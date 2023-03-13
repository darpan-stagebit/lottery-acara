<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="text-center mb-3">
        <a href="index.html"><img src="images/logo-full.png" alt=""></a>
    </div>
    <h4 class="text-center mb-4 text-white">Forgot Password</h4>

    <div class="text-white text-small mb-3 text-center">
        <small>
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </small>
    </div>

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="form-group">
            <x-input-label class="text-white font-weight-bold" for="email" :value="__('Email')" />
            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email', 'hello@example.com')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2 error text-small text-danger" />
        </div>

        <div class="text-center">
            <x-primary-button type="submit" class="btn bg-white text-primary btn-block">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>

            <div class="mt-3">
                <a class="text-white" href="{{ route('login') }}">I remember Login details.</a>
            </div>
        </div>
    </form>
</x-guest-layout>
