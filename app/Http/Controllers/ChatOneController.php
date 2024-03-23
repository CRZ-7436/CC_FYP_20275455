<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatOneController extends Controller
{
    public function index()
    {
        return view('chatbots.chatone');
    }

    public function chat(Request $request)
    {
        $apiKey = 'openai_api_key_here'; // Put OpenAI API key here **************
        
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $apiKey,
        ])->post('https://api.openai.com/v1/engines/davinci/completions', [
            'prompt' => $request->input('prompt'),
            'max_tokens' => 150,
        ]);

        $responseData = $response->json();
        return view('chatbots.chatone', ['response' => $responseData]);
    }
}
