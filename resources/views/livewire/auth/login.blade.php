@include('partials.head')

<style>
#login-side {
    width: 100%;
    background-image: url("{{ asset('images/2064.jpg') }}");
    background-size: cover;
}

.shadow-lg {
    box-shadow: 0 1rem 3rem rgba(var(--bs-black-rgb), .175) !important;
}

.login-content {
    max-width: 26rem;
}

.login-content {
    max-width: 22.5rem;
    margin: 0 auto;
    position: relative;
    flex: 1;
}
</style>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="../assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <div id="main-wrapper">
        <div
            class="position-relative overflow-hidden auth-bg min-vh-100 w-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100 my-5 my-xl-0">

                    <div class="col-md-9 d-flex flex-column justify-content-center">
                        <div class="card mb-0 bg-body auth-login m-auto w-100 shadow-lg">
                            <div class="row gx-0">

                                <div class="col-md-6 p-3">
                                    <div id="login-side"
                                        class="h-100 d-flex align-items-center justify-content-center rounded-3">
                                        <div></div>
                                    </div>
                                </div>

                                <div class="col-md-6 border-end">

                                    <div
                                        class="card-body px-4 py-5 px-sm-4 login-content d-flex justify-content-center align-items-center">

                                        <div class="w-100">

                                            <a href="{{ route('home') }}"
                                                class="text-nowrap logo-img d-block mb-5 w-100 text-center">
                                                <img src="{{ asset('images/logo.png') }}" class="dark-logo"
                                                    alt="Logo-Dark" width="150" />
                                            </a>

                                            <h2 class="lh-base mb-0 cal-sans fw-500 text-center">Welcome Back</h2>
                                            <p class="text-muted text-center mb-5">For your protection, please verify
                                                your identity. </p>

                                            <div class="position-relative text-center my-5">
                                                <p
                                                    class="mb-0 fs-12 px-3 d-inline-block bg-body z-index-5 position-relative">
                                                    Or sign in with email
                                                </p>
                                                <span
                                                    class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
                                            </div>

                                            @include('components.errors')

                                            <form class="mb-0" action="{{  route('login') }}" method="POST">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email Address</label>
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" value="{{ old('email') }}" required>
                                                </div>
                                                <div class="mb-4">

                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <label for="password" class="form-label">Password</label>
                                                        <a class="text-primary link-dark fs-2" href="javascript:void(0);">
                                                            Forgot Password ?
                                                        </a>
                                                    </div>

                                                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mb-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                                                        <label class="form-check-label text-dark" for="flexCheckChecked">
                                                            Keep me logged in
                                                        </label>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-dark w-100 py-8 mb-4 rounded-1">
                                                    Sign In
                                                </button>
                                                <div class="d-flex align-items-center mb-5">
                                                    <p class="mb-0">Don’t have an account yet?</p>
                                                    <a class="text-primary fw-bolder ms-2" href="{{ route('register') }}">
                                                        Sign Up Now
                                                    </a>
                                                </div>
                                            </form>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="dark-transparent sidebartoggler"></div>

        <!-- Import Js Files -->
        @include('partials.footer')

        <!-- solar icons -->
        <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>
