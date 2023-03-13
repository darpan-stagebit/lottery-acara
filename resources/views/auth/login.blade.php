<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="text-center mb-3">
        <a href="/"><img src="{{ asset('images/logo-full.png') }}" alt=""></a>
    </div>
    <h4 class="text-center mb-4 text-white">Sign in your account</h4>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="form-group">
            <x-input-label class="mb-1 text-white font-weight-bold" for="email" :value="__('Email')" />
            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        
        <div class="form-group">
            <x-input-label class="mb-1 text-white font-weight-bold" for="password" :value="__('Password')" />
            <x-text-input id="password" class="form-control"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div class="form-row d-flex justify-content-between mt-4 mb-2">
            <div class="form-group">
                <div class="custom-control custom-checkbox ml-1 text-white">
                    <input type="checkbox" class="custom-control-input" id="remember_me">
                    <label class="custom-control-label" for="remember_me">{{ __('Remember me') }}</label>
                </div>
            </div>
            @if (Route::has('password.request'))
                <div class="form-group">
                    <a class="text-white" href="{{ route('password.request') }}">Forgot Password?</a>
                </div>
            @endif
        </div>
        <div class="text-center">
            <button type="submit" class="btn bg-white text-primary btn-block">Sign Me In</button>
        </div>
    </form>
    <div class="new-account mt-3">
        <p class="text-white">Don't have an account? <a class="text-white" href="{{ route('register') }}">Sign up</a></p>
    </div>

</x-guest-layout>
