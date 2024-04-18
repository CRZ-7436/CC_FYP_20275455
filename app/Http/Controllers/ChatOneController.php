<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\ChatHistory;

class ChatOneController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to view chat history.');
        }

        $chatHistories = ChatHistory::where('user_id', auth()->id())->latest()->get();
        return view('chatbots.chatone', ['chatHistories' => $chatHistories]);
    }

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

        ChatHistory::create([
            'user_id' => auth()->id(),
            'prompt' => $userInput,
            'response' => $responseData['choices'][0]['text'],  // Original response
            'formatted_response' => implode("\n", $formattedResponse)  // Formatted response
        ]);

        $chatHistories = ChatHistory::where('user_id', auth()->id())->latest()->get();

        return view('chatbots.chatone', [
            'response' => $formattedResponse,
            'chatHistories' => $chatHistories
        ]);
    }

    private function formatResponse($text)
    {
        $lines = preg_split("/\r\n|\n|\r/", $text);
        $formatted = [];
        $codeBlock = false;
    
        // Define patterns and their handlers
        $handlers = [
            'list' => '/^\d+\.\s+/',
            'bullet' => '/^[-*]\s+/',
            'code' => '/```/',
            'default' => function($line) use (&$formatted, &$codeBlock) {
                if ($codeBlock) {
                    $formatted[] = $line;
                } else {
                    $formatted[] = trim($line);
                }
            }
        ];
    
        foreach ($lines as $line) {
            $line = trim($line);
            if (empty($line)) continue;
    
            $handled = false;
            foreach ($handlers as $type => $pattern) {
                if ($type === 'default') continue;
                if (preg_match($pattern, $line)) {
                    switch ($type) {
                        case 'list':
                        case 'bullet':
                            $formatted[] = $line;
                            $handled = true;
                            break;
                        case 'code':
                            $formatted[] = '```';
                            $codeBlock = !$codeBlock; // Toggle code block state
                            $handled = true;
                            break;
                    }
                    break; // Stop checking other patterns
                }
            }
    
            // Handle default case
            if (!$handled) {
                $handlers['default']($line);
            }
        }
    
        return $formatted;
    }    
}    
