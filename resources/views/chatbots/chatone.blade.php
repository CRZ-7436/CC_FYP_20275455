@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Chat with ChatGPT</h1>
    <form action="{{ route('chatone.chat') }}" method="POST">
        @csrf
        <input type="text" name="prompt" placeholder="Ask me anything...">
        <button type="submit">Ask</button>
    </form>
    @if(isset($error))
        <div>
            <p>Error: {{ $error }}</p>
        </div>
    @elseif(isset($response['choices']) && count($response['choices']) > 0)
        <div>
            <p>Response: {{ $response['choices'][0]['text'] }}</p>
        </div>
    @else
        <p>No response or an error occurred.</p>
    @endif
</div>
@endsection
