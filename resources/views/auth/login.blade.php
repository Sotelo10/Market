<x-guest-layout>
    <!-- Image and Text -->
    <div class="flex flex-col items-center justify-center py-6 px-4">
        <div class="mb-8 flex items-center">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlr06duaMs7baSELi8hGaAjDMb2s7X2R25og&s" alt="ElectroMarket" class="w-auto h-12 mr-2">
            <h2 class="text-3xl font-extrabold text-gray-800">ElectroMarket</h2>
        </div>

        <!-- Login Form -->
        <form method="POST" action="{{ route('login') }}" class="w-full max-w-md">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="flex items-center justify-between">
                <x-primary-button>
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
