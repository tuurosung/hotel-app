<section class="py-7 pt-lg-12 hero-section overflow-hidden position-relative d-flex align-items-center"
    style="background-image: url({{ asset('images/bed-4.jpg') }}); background-size: cover; background-position: center; min-height: 70vh">
    <!-- Dark overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.6); z-index: 1;">
    </div>

    <div class="container-fluid position-relative" style="z-index: 2;">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div>
                    <h3 class="text-white cal-sans fw-500">Welcome To</h3>
                    <h1 class="fw-500  lh-sm text-white cal-sans mb-0 hero-text">
                        Kayla Guest House
                    </h1>
                    <p class="mb-5 fs-5 text-white text-shadow inter">
                        Experience comfort and hospitality like
                        never before. Your perfect stay awaits!
                    </p>
                    <div class="d-flex align-items-center gap-6 mb-4">
                        <a class="d-flex align-items-center justify-content-center bg-warning rounded-3 round-54 shadow"
                            href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-title="Bootstrap">
                            <i class="fi fi-rr-bed fs-7 text-white"></i>
                        </a>
                        <a class="d-flex align-items-center justify-content-center bg-primary rounded-3 round-54 shadow"
                            href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-title="Sass">
                            <i class="fi fi-rr-bell-concierge fs-8 text-white"></i>
                        </a>
                        <a class="d-flex align-items-center justify-content-center bg-danger rounded-3 round-54 shadow"
                            href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-title="Sass">
                            <i class="fi fi-rr-tv-retro fs-8 text-white"></i>
                        </a>
                        <a class="d-flex align-items-center justify-content-center bg-info rounded-3 round-54 shadow"
                            href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-title="Sass">
                            <i class="fi fi-rr-shield-check fs-8 text-white"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-5">
            <div class="card-body text-dark py-3">
                <form method="POST" action="">
                    @csrf

                    <div class="row justify-content-center align-items-center g-3">
                        <div class="col-md-3">

                            <div class="">
                                <label for="" class="form-label">Checkin Date</label>
                                <input type="text" class="form-control datepicker-block-before" name="checkin_date" id="checkin_date"
                                    placeholder="{{ old('checkin_date') ?? now()->format('Y-m-d') }}" required />
                            </div>

                        </div>
                        <div class="col-md-3">

                            <div class="">
                                <label for="" class="form-label">Checkout Date</label>
                                <input type="text" class="form-control" name="checkout_date"
                                    id="checkout_date"
                                    placeholder=""
                                    required />
                            </div>

                        </div>
                        <div class="col-md-2">

                            <div class="">
                                <label for="number_of_adults" class="form-label">Adult</label>
                                <input type="number" class="form-control" name="number_of_adults" id="number_of_adults"
                                    aria-describedby="" placeholder="1" min="1" />
                            </div>

                        </div>
                        <div class="col-md-2">

                            <div class="">
                                <label for="number_of_children" class="form-label">Children</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    name="number_of_children"
                                    id="number_of_children"
                                    aria-describedby=""
                                    placeholder="0"
                                    min="0"
                                    value="0"
                                />
                            </div>



                        </div>
                        <div class="col-md-2 d-flex align-items-end justify-content-end">
                            <button class="btn btn-primary inter w-100 mb-0 mb-n7">Book Now</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>



<!-- <div class="card mt-5 d-none">
    <div class="card-body text-dark py-3">
        <div class="row justify-content-center align-items-center g-3">
            <div class="col-md-3">
                <div class="d-flex g-3">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('icons/pin.png') }}" alt="" width="28" height="28">
                    </div>
                    <div class="ms-3">
                        Location
                        <p class="m-0 inter fw-700 fs-3">Wa-Sombo, Upper West Region</p>
                    </div>
                </div>

            </div>
            <div class="col-md-2">
                <div class="d-flex g-3">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('icons/phone-call.png') }}" alt="" width="28" height="28">
                    </div>
                    <div class="ms-3">
                        Phone
                        <p class="m-0 inter fw-600 fs-4">055 504 2430</p>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="d-flex g-3">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('icons/newsletter.png') }}" alt="" width="28" height="28">
                    </div>
                    <div class="ms-3">
                        Email
                        <p class="m-0 inter fw-600 fs-4">kaylaguesthouse@gmail.com</p>
                    </div>
                </div>

            </div>
            <div class="col-md-3 d-flex align-items-end justify-content-end">
                <button class="btn btn-primary inter w-100">Make Reservation</button>
            </div>
        </div>

    </div>
</div> -->
