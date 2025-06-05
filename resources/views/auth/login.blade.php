<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


    {{-- <h1 class="text-white text-center text-4xl font-bold mb-6" style="color: black">{{ ucfirst($role) }} Login Form</h1> --}}
    <form method="POST" action="{{ route('login') }}">
        @csrf
        {{-- <input type="hidden" name="login_role" value="{{ $role }}"> --}}
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" style="color: black" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" style="background-color: white; color:black;" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" style="color: black" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" style="background-color: white; color:black;" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">

            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded white:bg-gray-900 border-gray-300 white:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 white:focus:ring-indigo-600 white:focus:ring-offset-gray-800 bg-white"
                    name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>

        </div>

        <div class="flex items-center justify-end mt-4">
            {{-- @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 white:text-gray-400 hover:text-gray-900 white:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 white:focus:ring-offset-gray-800"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif --}}
            <x-secondary-button onclick="window.history.back();">
                {{ __('Back') }}
            </x-secondary-button>

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
