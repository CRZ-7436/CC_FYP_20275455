@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Chat with ChatGPT</h1>
    <form action="{{ route('chatone.chat') }}" method="POST">
        @csrf
        <input type="text" name="prompt" placeholder="Ask me anything...">
        <button type="submit">Ask</button>
    </form>
    @if(isset($response['choices']) && count($response['choices']) > 0)
        <div>
            <p>Response: {{ $response['choices'][0]['text'] }}</p>
        </div>
    @endif

    <h2>Chat History</h2>
    @foreach ($chatHistories as $history)
        <p><strong>Q:</strong> {{ $history->prompt }} <strong>A:</strong> {{ $history->response }}</p>
    @endforeach
</div>
@endsection
