<x-guest-layout>
    <div class="mb-4 text-sm text-orange-600 dark:text-orange-400">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}" class="mx-auto max-w-md py-8 px-4 shadow-lg rounded-lg bg-white">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" class="text-orange-600"/>

            <x-text-input id="password" class="block mt-1 w-full border-orange-500 focus:border-orange-600 focus:ring focus:ring-orange-500 focus:ring-opacity-50"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2 text-orange-600"/>
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button class="bg-orange-500 hover:bg-orange-600 focus:ring-orange-500">
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
