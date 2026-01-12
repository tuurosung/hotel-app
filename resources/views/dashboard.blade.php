@include('partials.head')


<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="../assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <div id="main-wrapper">

        <!-- Sidebar Start -->
        @include('app-partials.sidebar')

        <div class="page-wrapper">
            @include('app-partials.navbar-header')

            @include('app-partials.left-sidebar')

            <div class="body-wrapper">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-4">Sample Page</h5>
                            <p class="mb-0">This is a sample page</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        @include('app-partials.search-bar')

    </div>
    <div class="dark-transparent sidebartoggler"></div>
    <!-- Import Js Files -->
    @include('partials.footer')

    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

</body>

</html>
