<section class="bg-white dark:bg-gray-900">
    <header>
        <h2 class="text-lg font-medium text-orange-600 dark:text-orange-400">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-800 dark:text-gray-200">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}" class="space-y-6">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" class="text-orange-600" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full border-orange-500 focus:border-orange-600 focus:ring focus:ring-orange-500 focus:ring-opacity-50" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" class="text-orange-600" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full border-orange-500 focus:border-orange-600 focus:ring focus:ring-orange-500 focus:ring-opacity-50" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Unverified email address message -->
        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div class="mt-2 text-sm text-orange-600">
                {{ __('Your email address is unverified.') }}

                <button form="send-verification" class="underline hover:text-orange-700">
                    {{ __('Click here to re-send the verification email.') }}
                </button>
            </div>

            @if (session('status') === 'verification-link-sent')
                <p class="mt-2 font-medium text-sm text-orange-600">
                    {{ __('A new verification link has been sent to your email address.') }}
                </p>
            @endif
        @endif

        <div class="flex items-center gap-4">
            <x-primary-button class="bg-orange-500 hover:bg-orange-600 focus:ring-orange-500">
                {{ __('Save') }}
            </x-primary-button>

            <!-- Saved confirmation message -->
            @if (session('status') === 'profile-updated')
                <p class="text-sm text-orange-600" x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>
</section>
