@include('partials.head')

<body>



    <!-- ------------------------------------- -->
    <!-- Top Bar End -->
    <!-- ------------------------------------- -->

    <!-- -------------------------------------------- -->
    <!-- Header start -->
    <!-- -------------------------------------------- -->
    <header class="header-fp p-0 w-100 bg-light-gray">
        <nav class="navbar navbar-expand-lg py-10">
            <div class="container-fluid d-flex justify-content-between">
                <a href="../main/frontend-landingpage.html" class="text-nowrap logo-img">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid" style="max-width: 78px;" />
                </a>
                <button class="navbar-toggler border-0 p-0 shadow-none" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <i class="ti ti-menu-2 fs-8"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 gap-xl-7 gap-8 mb-lg-0 inter fw-300">
                        <li class="nav-item">
                            <a class="nav-link fs-3 fw-400 text-dark link-primary"
                                href="../main/frontend-aboutpage.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-3 fw-400 text-dark link-primary"
                                href="../main/frontend-blogpage.html">Rooms</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link fs-3 fw-400 text-dark link-primary d-flex gap-2"
                                href="../main/frontend-portfoliopage.html">Reservations
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link fs-3 fw-400 text-dark link-primary d-flex gap-2"
                                href="../main/frontend-portfoliopage.html">Contact Us
                            </a>
                        </li>
                    </ul>
                    <a href="{{ route('login') }}" class="btn btn-dark btn-sm py-2 px-9">Log In</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- -------------------------------------------- -->
    <!-- Header End -->
    <!-- -------------------------------------------- -->

    <!-- Navbar Section -->
    @include('website.partials.navbar')

    <div class="main-wrapper overflow-hidden">

        <!-- Hero Section -->
        @include('website.partials.hero')

        <!-- Intro Section-->
        @include('website.partials.intro')

        <!-- CTA -->
        @include('website.partials.cta')

        <!-- Pricing Section -->
        @include('website.partials.pricing')

        <!-- Services Section -->
        @include('website.partials.services')

    </div>





    <!-- Scroll Top -->
    <a href="javascript:void(0)"
        class="top-btn btn btn-primary d-flex align-items-center justify-content-center round-54 p-0 rounded-circle">
        <i class="ti ti-arrow-up fs-7"></i>
    </a>

</body>

@include('partials.footer')
