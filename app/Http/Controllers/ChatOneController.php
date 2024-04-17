<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\ChatHistory;

class ChatOneController extends Controller
{
    public function index()
    {
        // Fetch all chat histories for the current user
        $chatHistories = ChatHistory::where('user_id', auth()->id())->latest()->get();
        return view('chatbots.chatone', ['chatHistories' => $chatHistories]);
    }

    public function chat(Request $request)
    {
        $apiKey = 'api key here'; // Put OpenAI API key here *****************************************
        $userInput = $request->input('prompt');
        Log::info("Prompt: " . $userInput);
    
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $apiKey,
        ])->post('https://api.openai.com/v1/completions', [
            'model' => 'gpt-3.5-turbo-instruct',
            'prompt' => $userInput,
            'max_tokens' => 150,
            'temperature' => 0.7,
        ]);
    
        if (!$response->successful()) {
            Log::error("OpenAI API Error: " . $response->body());
            return view('chatbots.chatone', ['error' => 'Failed to get response from OpenAI API']);
        }
    
        $responseData = $response->json();
        Log::info("API Response: ", $responseData);
    
        // Store chat in history
        $chatHistory = new ChatHistory([
            'user_id' => auth()->id(),
            'prompt' => $userInput,
            'response' => $responseData['choices'][0]['text']
        ]);
        $chatHistory->save();
    
        // Fetch all chat histories for the current user
        $chatHistories = ChatHistory::where('user_id', auth()->id())->latest()->get();
    
        return view('chatbots.chatone', [
            'response' => $responseData,
            'chatHistories' => $chatHistories
        ]);
    }
}
