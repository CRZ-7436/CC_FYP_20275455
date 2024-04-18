<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\ChatHistory;

class ChatOneController extends Controller
{
    /**
     * Display the initial chat page with history.
     */
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to view chat history.');
        }

        $chatHistories = ChatHistory::where('user_id', auth()->id())->latest()->get();
        return view('chatbots.chatone', ['chatHistories' => $chatHistories]);
    }

    /**
     * Handle the incoming chat request and log the chat history.
     */
    public function chat(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to chat.');
        }

        $userInput = $request->input('prompt');
        Log::info("Prompt: " . $userInput);
        
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
        ])->post('https://api.openai.com/v1/completions', [
            'model' => 'gpt-3.5-turbo-instruct',
            'prompt' => $userInput,
            'max_tokens' => 150,
            'temperature' => 0.7,
        ]);
        
        if (!$response->successful()) {
            Log::error("OpenAI API Error: " . $response->body());
            return back()->with('error', 'Failed to get response from OpenAI API');
        }

        $responseData = $response->json();
        Log::info("API Response: ", $responseData);

        // Format the response text
        $formattedResponse = $this->formatResponse($responseData['choices'][0]['text']);

        // Store chat in history with original response text
        ChatHistory::create([
            'user_id' => auth()->id(),
            'prompt' => $userInput,
            'response' => $responseData['choices'][0]['text'],
            'formatted_response' => implode("\n", $formattedResponse)
        ]);
        

        $chatHistories = ChatHistory::where('user_id', auth()->id())->latest()->get();

        return view('chatbots.chatone', [
            'response' => $formattedResponse,
            'chatHistories' => $chatHistories
        ]);
    }

    private function formatResponse($text)
    {
        $pattern = '/(\d+\.)\s+/';
        $sentences = preg_split($pattern, $text, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
        $formatted = [];
        $index = -1;

        foreach ($sentences as $sentence) {
            if (preg_match('/\d+\./', $sentence)) {
                $index++;
                $formatted[$index] = trim($sentence);
            } else {
                if ($index >= 0) {
                    $formatted[$index] .= ' ' . trim($sentence);
                }
            }
        }

        return array_values($formatted);
    }
}
