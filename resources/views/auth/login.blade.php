<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block w-full mt-1" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class=""
        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="text-indigo-600 border-gray-300 rounded shadow-sm focus:ring-indigo-500" name="remember">
                <span class="text-sm text-gray-600 ms-2">{{ __('Remember me') }}</span>
            </label>
        </div>

        <!-- Accept Terms -->
        <div>
            <input id="accept_terms" type="checkbox" name="accept_terms" required
                class="text-indigo-600 border-gray-300 rounded shadow-sm focus:ring-indigo-500">
            <label for="accept_terms" class="text-sm text-gray-600 ms-2">
                I accept the <a href="/terms-and-conditions" target="_blank">Terms and Conditions</a>.
            </label>
        </div>
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="flex items-center justify-center w-full mb-4 font-bold text-center">
                {{ __('Log in') }}
            </x-primary-button>
        </div>

        <div class="flex items-center justify-center gap-3 text-sm text-gray-600">
            <a href="{{ route('choose-role') }}" class="text-sm text-gray-600 no-underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Create an account.') }}
            </a>

            @if (Route::has('password.request'))
            <a class="text-sm text-gray-600 no-underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif
        </div>
       
    </form>
</x-guest-layout>
