<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block w-full mt-1"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block w-full mt-1"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <input type="hidden" name="role" value="{{ $role }}">

        <div class="mt-4">
            <input id="accept_terms" type="checkbox" name="accept_terms" required
                class="text-indigo-600 border-gray-300 rounded shadow-sm focus:ring-indigo-500">
            <label for="accept_terms" class="text-sm text-gray-600 ms-2">
                I accept the <a href="/terms-and-conditions" target="_blank">Terms and Conditions</a>.
            </label>
        </div>


        <div class="flex flex-col items-center justify-end mt-4">
            <x-primary-button class="flex items-center justify-center w-full text-center bg-green-500 ms-4">
                {{ __('Register') }} as {{ ucfirst($role) }}
            </x-primary-button>
            
            <a class="mt-4 text-sm text-gray-600 no-underline rounded-md dark:text-gray-400 hover:text-green-500 dark:hover:text-green-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            
        </div>
    </form>
</x-guest-layout>








