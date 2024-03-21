@extends('layouts.app')

@section('title', 'Sign Up')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-md">
        <div class="w-full p-5">
            <form action="{{ route('signup.register') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                    <input type="text" name="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                    <input type="email" name="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
                    <input type="password" name="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                </div>
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password:</label>
                    <input type="password" name="password_confirmation" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Sign Up
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


