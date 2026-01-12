<section class="py-7" id="pricing">
    <div class="container-fluid py-10">

        <div class="mb-4">
            <h2 class="cal-sans fw-500 mb-1">Luxury You Can Afford</h2>
            <p class="mb-0 fs-5 text-dark inter">
                Discover our range of comfortable and stylish rooms designed to provide you with a relaxing
                stay.
            </p>
        </div>


        <div class="row">
            <div class="col-md-4">

                <div class="card shadow-lg">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center justify-content-between mb-6">
                            <h6 class="mb-0 fw-semibold fs-4 mb-0">Standard</h6>
                            <i class="fi fi-sr-air-conditioner text-info fs-6"></i>
                        </div>
                        <img src="{{ asset('images/bed-1.jpg') }}" alt="matdash-img"
                            class="card-img w-100 object-fit-cover mb-4" height="160">

                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center gap-2">

                                <h5 class="fw-semibold fs-4 mb-0 inter">GHS 250</h5>
                                <!-- <p class="mb-0 text-decoration-line-through">$375</p> -->

                            </div>
                            <ul class="d-flex align-items-center gap-1 mb-0">

                                @for ($i = 0; $i < 5; $i++)
                                    <li>
                                        <a href="javascript:void(0)" class="text-warning">
                                            <i class="fi fi-sr-star"></i>
                                        </a>
                                    </li>
                                @endfor

                            </ul>
                        </div>

                        <button class="btn btn-primary w-100 fw-normal py-8 inter">Book A Room</button>
                    </div>
                </div>

            </div>
            <div class="col-md-4">

                <div class="card shadow-lg">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center justify-content-between mb-6">
                            <h6 class="mb-0 fw-semibold fs-4 mb-0">Executive</h6>
                            <i class="fi fi-sr-air-conditioner text-info fs-6"></i>
                        </div>
                        <img src="{{ asset('images/bed-2.jpg') }}" alt="matdash-img"
                            class="card-img w-100 object-fit-cover mb-4" height="160">

                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center gap-2">
                                <h5 class="fw-semibold fs-4 mb-0 inter">GHS 350</h5>
                                <!-- <p class="mb-0 text-decoration-line-through">$375</p> -->
                            </div>
                            <ul class="d-flex align-items-center gap-1 mb-0">

                                @for ($i = 0; $i < 5; $i++)
                                    <li>
                                        <a href="javascript:void(0)" class="text-warning">
                                            <i class="fi fi-sr-star"></i>
                                        </a>
                                    </li>
                                @endfor

                            </ul>
                        </div>

                        <button class="btn btn-primary w-100 fw-normal py-8">Book A Room</button>
                    </div>
                </div>

            </div>
            <div class="col-md-4">

                <div class="card shadow-lg">
                    <div class="card-body p-4">

                        <div class="d-flex align-items-center justify-content-between mb-6">
                            <h6 class="mb-0 fw-semibold fs-4 mb-0">Suites</h6>
                            <i class="fi fi-sr-air-conditioner text-info fs-6"></i>
                        </div>

                        <img src="{{ asset('images/bed-3.jpg') }}" alt="matdash-img"
                            class="card-img w-100 object-fit-cover mb-4" height="160">

                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center gap-2">
                                <h5 class="fw-semibold fs-4 mb-0 inter">GHS 750</h5>
                                <!-- <p class="mb-0 text-decoration-line-through">$375</p> -->
                            </div>
                            <ul class="d-flex align-items-center gap-1 mb-0">

                                @for ($i = 0; $i < 5; $i++)
                                    <li>
                                        <a href="javascript:void(0)" class="text-warning">
                                            <i class="fi fi-sr-star"></i>
                                        </a>
                                    </li>
                                @endfor

                            </ul>
                        </div>
                        <button class="btn btn-primary w-100 fw-500 py-8 inter">Book A Room</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
