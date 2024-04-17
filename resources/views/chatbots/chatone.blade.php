@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-xl font-bold text-orange-500 mb-4">Chat with ChatGPT</h1>
    <form action="{{ route('chatone.chat') }}" method="POST" class="flex mb-6">
        @csrf
        <input type="text" name="prompt" placeholder="Ask me anything..."
               class="flex-grow p-3 border-2 border-gray-300 rounded focus:outline-none focus:border-orange-500">
        <button type="submit" class="ml-2 bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600">
            Ask
        </button>
    </form>

    @if(isset($response) && is_array($response))
        <div class="mt-6 bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4">
            <h2 class="font-semibold">Latest Response</h2>
            <ul class="list-disc pl-5">
                @foreach($response as $line)
                    <li>{{ $line }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="mt-6">
        <h2 class="text-lg font-semibold text-orange-500 mb-4">Chat History</h2>
        @foreach ($chatHistories as $history)
        <div class="mb-4 p-4 bg-white rounded shadow">
            <p class="font-bold text-orange-500">You:</p>
            <p class="mb-2">{{ $history->prompt }}</p>
            <p class="font-bold text-green-500">ChatGPT:</p>
            <p>{!! nl2br(e($history->formatted_response)) !!}</p>  <!-- Display formatted response -->
        </div>
        @endforeach
    </div>
</div>
@endsection
