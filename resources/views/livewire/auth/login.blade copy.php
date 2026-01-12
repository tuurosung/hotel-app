@include('partials.head')

<body>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div
                class="col-12 min-vh-100 d-flex flex-column justify-content-center align-items-center bg-light-gray py-10">
                <div
                    class="w-full max-w-md px-6 py-8 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-neutral-900 dark:border-neutral-700">

                    <form action="" class="flex flex-col gap-6">

                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email') }}</label>
                            <input type="email" class="form-control" name="email" id="email" required
                                autocomplete="email" placeholder="email@example.com" />
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password" required
                                aria-describedby="" placeholder="{{ __('Password') }}" autocomplete="current-password"
                                viewable />
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" placeholder="Email address" autocomplete="email"
                                placeholder="email@example.com">
                            <label>
                                <i class="fi fi-rr-envelope me-2 fs-4"></i>Email
                                address
                            </label>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Remember Me
                            </label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" placeholder="Password">
                            <label>
                                <i class="fi fi-rr-lock me-2 fs-4"></i>Password
                            </label>

                        </div>

                        <button type="submit" class="btn btn-primary w-100">Log In</button>

                    </form>


                </div>
</body>
@include('partials.footer')

<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Log in to your account')"
        :description="__('Enter your email and password below to log in')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form method="POST" action="{{ route('login.store') }}" class="flex flex-col gap-6">
        @csrf


        <!-- Password -->
        <div class="relative">


            @if (Route::has('password.request'))
            <flux:link class="absolute top-0 text-sm end-0" :href="route('password.request')" wire:navigate>
                {{ __('Forgot your password?') }}
            </flux:link>
            @endif
        </div>

        <!-- Remember Me -->
        <flux:checkbox name="remember" :label="__('Remember me')" :checked="old('remember')" />

        <div class="flex items-center justify-end">
            <flux:button variant="primary" type="submit" class="w-full" data-test="login-button">
                {{ __('Log in') }}
            </flux:button>
        </div>
    </form>

    @if (Route::has('register'))
    <div class="space-x-1 text-sm text-center rtl:space-x-reverse text-zinc-600 dark:text-zinc-400">
        <span>{{ __('Don\'t have an account?') }}</span>
        <flux:link :href="route('register')" wire:navigate>{{ __('Sign up') }}</flux:link>
    </div>
    @endif
</div>
