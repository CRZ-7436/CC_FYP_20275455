<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-orange-500 dark:text-orange-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    @section('content')
        <div class="py-12 bg-gray-50 dark:bg-white">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Update Profile Information -->
                <div class="mb-8 bg-white dark:bg-white shadow sm:rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <!-- Update Password -->
                <div class="mb-8 bg-white dark:bg-white shadow sm:rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

                <!-- Delete User Account -->
                <div class="bg-white dark:bg-white shadow sm:rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-app-layout>
