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
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to view chat history.');
        }

        // Fetch all chat histories for the current user
        $chatHistories = ChatHistory::where('user_id', auth()->id())->latest()->get();
        return view('chatbots.chatone', ['chatHistories' => $chatHistories]);
    }

    /**
     * Handle the incoming chat request and log the chat history.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
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

        // Store chat in history
        ChatHistory::create([
            'user_id' => auth()->id(),
            'prompt' => $userInput,
            'response' => $responseData['choices'][0]['text']
        ]);

        // Refresh chat histories to include the new entry
        $chatHistories = ChatHistory::where('user_id', auth()->id())->latest()->get();

        return view('chatbots.chatone', [
            'response' => $responseData,
            'chatHistories' => $chatHistories
        ]);
    }
}
