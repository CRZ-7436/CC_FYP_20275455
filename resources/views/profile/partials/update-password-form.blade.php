<section class="bg-white shadow sm:rounded-lg p-6">
    <header>
        <h2 class="text-lg font-medium text-orange-600">
            {{ __('Update Password') }}
        </h2>
        <p class="mt-1 text-sm text-orange-800">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Current Password')" class="text-orange-600"/>
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full border-orange-500 focus:border-orange-600 focus:ring focus:ring-orange-500 focus:ring-opacity-50" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2 text-red-500" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('New Password')" class="text-orange-600"/>
            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full border-orange-500 focus:border-orange-600 focus:ring focus:ring-orange-500 focus:ring-opacity-50" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2 text-red-500" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" class="text-orange-600"/>
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full border-orange-500 focus:border-orange-600 focus:ring focus:ring-orange-500 focus:ring-opacity-50" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2 text-red-500" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button class="bg-orange-500 hover:bg-orange-600 focus:ring-orange-500">{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-orange-500"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
