<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <!-- number Address -->
        <div class="mt-4">
            <x-input-label for="number" :value="__('number')" />
            <x-text-input id="number" class="block mt-1 w-full" type="number" name="number" :value="old('email')"
                required autocomplete="name" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <!-- gender Address -->
        <div class="mt-4">
            <x-input-label for="gender" :value="__('Gender')" />
<div class="flex gap-x-5 items-center">

    <Label class="text-white">
        male
        <input type="radio" name="gender" value="male" class="w-4 h-4 rounded-full">
    </Label>
    <Label class="text-white">
        female
        <input type="radio" name="gender" value="female" class="w-4 h-4 rounded-full">
    </Label>

</div>

        </div>
        <div class="mt-4">
            <x-input-label :value="__('image')" />
            <input id="number" class="block mt-1 w-full" type="file" accept="image/*" name="image"
                :value="old('image')" required autocomplete="image" />

        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
