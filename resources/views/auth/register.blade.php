

<x-guest-layout >
  <!-- Include Custom CSS -->
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
 

  <div class="main" >
  <input type="checkbox" id="chk" aria-hidden="true">


    <x-validation-errors class="custom-validation-errors" />

    <form method="POST" action="{{ route('register') }}">
      @csrf

      <div>
        <x-label for="name" value="{{ __('Name') }}"  class="label" style="color:white;"/>
        <x-input id="name" class="block mt-1 w-full input" type="text" name="name" :value="old('name')" required autofocus autocomplete="username" />
      </div>

      <div class="mt-4">
        <x-label for="email" value="{{ __('Email') }}" class="label" style="color:white;" />
        <x-input id="email" class="block mt-1 w-full input" type="email" name="email" :value="old('email')" required autocomplete="email" />
      </div>

      <div class="mt-4">
        <x-label for="address" value="{{ __('Address') }}" class="label" style="color:white;"/>
        <x-input id="address" class="block mt-1 w-full input" type="text" name="address" :value="old('address')" required autocomplete="address" />
      </div>

      <div class="mt-4">
        <x-label for="phone" value="{{ __('Phone') }}" class="label" style="color:white;"/>
        <x-input id="phone" class="block mt-1 w-full input" type="text" name="phone" :value="old('phone')" required autocomplete="phone" />
      </div>

      <div class="mt-4">
        <x-label for="password" value="{{ __('Password') }}" class="label" style="color:white;"/>
        <x-input id="password" class="block mt-1 w-full input" type="password" name="password" required autocomplete="new-password" />
      </div>

      <div class="mt-4">
        <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" class="label" style="color:white;"/>
        <x-input id="password_confirmation" class="block mt-1 w-full input" type="password" name="password_confirmation" required autocomplete="new-password" />
      </div>

      @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
        <div class="mt-4">
          <x-label for="terms">
            <div class="flex items-center">
              <x-checkbox name="terms" id="terms" required />
              <div class="ms-2">
                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                  'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                  'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                ]) !!}
              </div>
            </div>
          </x-label>
        </div>
      @endif

      <div class="flex items-center justify-end mt-4">
      

        <x-button class="ms-4" style="background-color: #573b8a;">
          {{ __('SignUp') }}
        </x-button>

        <div class="regis">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Login?') }}
            </a>
        </div>

      </div>
    </form>
                </div>
   
</x-guest-layout>






