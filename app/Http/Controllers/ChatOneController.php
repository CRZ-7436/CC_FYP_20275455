<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ChatOneController extends Controller
{
    public function index()
    {
        return view('chatbots.chatone');
    }

    public function chat(Request $request)
    {
        $apiKey = 'openai_api_key_here'; // Put OpenAI API key here **************
        
        Log::info("Prompt: " . $request->input('prompt'));
    
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $apiKey,
        ])->post('https://api.openai.com/v1/completions', [
            'model' => 'gpt-3.5-turbo-instruct', // Updated model
            'prompt' => $request->input('prompt'),
            'max_tokens' => 150,
            'temperature' => 0.7,
        ]);
    
        if (!$response->successful()) {
            Log::error("OpenAI API Error: " . $response->body());
            return view('chatbots.chatone', ['error' => 'Failed to get response from OpenAI API']);
        }
    
        $responseData = $response->json();
        Log::info("API Response: ", $responseData);
    
        return view('chatbots.chatone', ['response' => $responseData]);
    }
    
}
