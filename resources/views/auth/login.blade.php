
<x-guest-layout>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">

    <div class="main">
        <!-- Top half-circle with image -->
        <div class="top-circle">
            <div class="circle-text">
            <a href="{{ route('register') }}">
                {{ __('Sign Up?') }}
            </a>
        </div>
        </div>

        <!-- Validation and Login Form -->
        <x-validation-errors class="mb-4 main" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="signup">
            @csrf
            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <!-- <div class="block mt-4">
                <label for="remember_me">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div> -->
<!-- 
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button> -->

                <div class="block mt-4 remember-section">
    <label for="remember_me" class="remember-me" >
        <x-checkbox id="remember_me" name="remember" />
        <span>{{ __('Remember me') }}</span>
    </label>
</div>

<div class="flex flex-col items-end mt-4">
    @if (Route::has('password.request'))
        <a class="forgot-password underline text-sm text-gray-600 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
            {{ __('Forgot your password?') }}
        </a>
    @endif

    <x-button class="login-button mt-3" style="background-color: #573b8a; text-align:center; justify-content:center;">
        {{ __('Log in') }}
    </x-button>
</div>

            
        </form>
    </div>
</x-guest-layout>

