<x-guest-layout>

    <div class="text-center mb-3">
        <a href="index.html"><img src="images/logo-full.png" alt=""></a>
    </div>
    <h4 class="text-center mb-4 text-white">Sign up your account</h4>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
            <x-input-label for="firstname" value="Firstname" class="mb-1 text-white font-weight-bold"/>
            <x-text-input id="firstname" class="form-control" type="text" 
                name="firstname" 
                :value="old('firstname')" 
                required autofocus autocomplete="firstname" 
                placeholder="First Name"
            />
            <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
        </div>

        <div class="form-group">
            <x-input-label for="lastname" value="Lirstname" class="mb-1 text-white font-weight-bold"/>
            <x-text-input id="lastname" class="form-control" type="text" 
                name="lastname" 
                :value="old('lastname')" 
                required autofocus autocomplete="lastname" 
                placeholder="Last Name"
            />
            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
        </div>

        <div class="form-group">
            <x-input-label class="mb-1 text-white font-weight-bold" for="email" :value="__('Email')" />
            <x-text-input id="email" class="form-control" type="email" 
                name="email" 
                :value="old('email')" 
                required autocomplete="email"
                placeholder="hello@example.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="form-group">
            <x-input-label class="mb-1 text-white font-weight-bold" for="password" :value="__('Password')" />
            <x-text-input id="password" class="form-control"
                type="password"
                name="password"
                required autocomplete="new-password" 
                placeholder="Password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        
        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label class="mb-1 text-white font-weight-bold" for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="form-control"
                type="password"
                name="password_confirmation" 
                required autocomplete="new-password"
                placeholder="Confirm Password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="text-center mt-4">
            <x-primary-button class="btn bg-white text-primary btn-block" type="submit">
                {{ __('Sign me up') }}
            </x-primary-button>
        </div>
    </form>
    <div class="new-account mt-3">
        <p class="text-white">
            {{ __('Already registered?') }} 
            <a class="text-white" href="{{ route('login') }}">Sign in</a>
        </p>
    </div>
</x-guest-layout>
