@extends('layouts.app')

@section('content')

<div class="mb-24">
    <div class="row gy-4">

        <!-- Card Start -->
        <div class="col-xxl-4 col-md-6">
            <div class="shadow-7 p-16 radius-12 bg-base">
                <div class="row g-3">
                    <div class="col-sm-6 col-xs-6">
                        <div class="py-20 px-24 radius-8 position-relative z-1 h-100 bg-blue-light">
                            <img src="assets/images/home-twelve/icons/booking-card-big-icon1.png" alt="Big Icon"
                                class="position-absolute end-0 bottom-0 me-8 z-n1">
                            <span
                                class="w-44-px h-44-px radius-8 bg-white d-flex justify-content-center align-items-center">
                                <img src="assets/images/home-twelve/icons/booking-card-icon1.png" alt="Icon">
                            </span>
                            <span class="d-block mt-12 text-neutral-800">New Booking</span>
                            <h6 class="mt-1 mb-0">170</h6>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        <div class="py-20 px-24 radius-8 position-relative z-1 h-100 bg-green-light">
                            <img src="assets/images/home-twelve/icons/booking-card-big-icon2.png" alt="Big Icon"
                                class="position-absolute end-0 bottom-0 me-4 z-n1">
                            <span
                                class="w-44-px h-44-px radius-8 bg-white d-flex justify-content-center align-items-center">
                                <img src="assets/images/home-twelve/icons/booking-card-icon2.png" alt="Icon">
                            </span>
                            <span class="d-block mt-12 text-neutral-800">Schedule Room</span>
                            <h6 class="mt-1 mb-0">285</h6>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        <div class="py-20 px-24 radius-8 position-relative z-1 h-100 bg-red-light">
                            <img src="assets/images/home-twelve/icons/booking-card-big-icon3.png" alt="Big Icon"
                                class="position-absolute end-0 bottom-0 me-8 z-n1">
                            <span
                                class="w-44-px h-44-px radius-8 bg-white d-flex justify-content-center align-items-center">
                                <img src="assets/images/home-twelve/icons/booking-card-icon3.png" alt="Icon">
                            </span>
                            <span class="d-block mt-12 text-neutral-800">Total Customers</span>
                            <h6 class="mt-1 mb-0">175</h6>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        <div class="py-20 px-24 radius-8 position-relative z-1 h-100 bg-warning-light">
                            <img src="assets/images/home-twelve/icons/booking-card-big-icon4.png" alt="Big Icon"
                                class="position-absolute end-0 bottom-0 me-8 z-n1">
                            <span
                                class="w-44-px h-44-px radius-8 bg-white d-flex justify-content-center align-items-center">
                                <img src="assets/images/home-twelve/icons/booking-card-icon4.png" alt="Icon">
                            </span>
                            <span class="d-block mt-12 text-neutral-800">Total Revenue</span>
                            <h6 class="mt-1 mb-0">$750.00</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card End -->

        <!-- Semi Circle Gauge start -->
        <div class="col-xxl-4 col-md-6">
            <div class="shadow-7 p-24 radius-12 bg-base h-100">
                <div class="text-center">
                    <div class="position-relative">
                        <div id="semiCircleGaugeTwo" class="big-semi-circle-gauge d-flex justify-content-center"></div>
                        <span
                            class="w-90-px h-90-px rounded-circle bg-primary-50 d-flex justify-content-center align-items-center position-absolute start-50 translate-middle-x top-50">
                            <img src="assets/images/home-twelve/icons/home.png" alt="Home Icon">
                        </span>
                    </div>
                    <h3 class="mt-40 mb-0">35</h3>
                    <span class="text-neutral-800 mt-4">Available Room Today</span>
                </div>
            </div>
        </div>
        <!-- Semi Circle Gauge End -->

        <!-- Booking Statistics progress start -->
        <div class="col-xxl-4">
            <div class="shadow-7 p-20 radius-12 bg-base h-100">
                <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
                    <h6 class="mb-2 fw-bold text-lg">Booking Statistic</h6>
                    <div class="">
                        <select
                            class="form-select form-select-sm w-auto bg-base border text-secondary-light radius-8 radius-8">
                            <option>Yearly</option>
                            <option>Monthly</option>
                            <option>Weekly</option>
                            <option>Today</option>
                        </select>
                    </div>
                </div>
                <div class="position-relative">
                    <div id="statisticBarChart" class="text-style"></div>
                </div>
            </div>
        </div>
        <!-- Booking Statistics progress End -->

    </div>
</div>
<div class="row g-4">
    <div class="col-xl-8">
        <div class="d-flex flex-column gap-24">

            <!-- Travel Slider Start -->
            <div class="">
                <div class="d-flex align-items-center justify-content-between mb-16">
                    <h6 class="text-lg mb-0">Exclusive Travel Packages</h6>
                    <div class="d-flex align-items-center gap-16">
                        <button type="button" id="instructor-prev"
                            class="slick-prev slick-arrow d-flex align-items-center rounded-circle border border-neutral-400 text-neutral-600 text-2xl bg-hover-primary-600 hover-text-white d-flex align-items-center justify-content-center w-40-px h-40-px position-relative top-0 start-0 end-0 transform-unset">
                            <i class="ri-arrow-left-s-line"></i>
                        </button>
                        <button type="button" id="instructor-next"
                            class="slick-next slick-arrow d-flex align-items-center rounded-circle border border-neutral-400 text-neutral-600 text-2xl bg-hover-primary-600 hover-text-white d-flex align-items-center justify-content-center w-40-px h-40-px position-relative top-0 start-0 end-0 transform-unset">
                            <i class="ri-arrow-right-s-line"></i>
                        </button>
                    </div>
                </div>
                <div class="travel-slider">
                    <div class="bg-base p-6 radius-12">
                        <div class="radius-8 overflow-hidden">
                            <img src="assets/images/home-twelve/travel-img1.png" alt="Image"
                                class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="p-8 pt-16">
                            <h6 class="text-md mb-1">Paris</h6>
                            <span class="text-secondary-light">5 Days, 6 Nights</span>
                            <div class="mt-10 d-flex align-items-center justify-content-between gap-10">
                                <span class="fw-semibold text-secondary-light text-sm">$12,000</span>
                                <div class="d-flex align-items-center gap-1">
                                    <span class="text-primary-600 line-height-1 text-md fw-medium"><i
                                            class="ri-user-3-line"></i></span>
                                    <span class="text-sm fw-medium">(280)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-base p-6 radius-12">
                        <div class="radius-8 overflow-hidden">
                            <img src="assets/images/home-twelve/travel-img2.png" alt="Image"
                                class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="p-8 pt-16">
                            <h6 class="text-md mb-1">İstanbul</h6>
                            <span class="text-secondary-light">6 Days, 7 Nights</span>
                            <div class="mt-10 d-flex align-items-center justify-content-between gap-10">
                                <span class="fw-semibold text-secondary-light text-sm">$7,000</span>
                                <div class="d-flex align-items-center gap-1">
                                    <span class="text-primary-600 line-height-1 text-md fw-medium"><i
                                            class="ri-user-3-line"></i></span>
                                    <span class="text-sm fw-medium">(280)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-base p-6 radius-12">
                        <div class="radius-8 overflow-hidden">
                            <img src="assets/images/home-twelve/travel-img3.png" alt="Image"
                                class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="p-8 pt-16">
                            <h6 class="text-md mb-1">London</h6>
                            <span class="text-secondary-light">4 Days, 5 Nights</span>
                            <div class="mt-10 d-flex align-items-center justify-content-between gap-10">
                                <span class="fw-semibold text-secondary-light text-sm">$15,000</span>
                                <div class="d-flex align-items-center gap-1">
                                    <span class="text-primary-600 line-height-1 text-md fw-medium"><i
                                            class="ri-user-3-line"></i></span>
                                    <span class="text-sm fw-medium">(280)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-base p-6 radius-12">
                        <div class="radius-8 overflow-hidden">
                            <img src="assets/images/home-twelve/travel-img4.png" alt="Image"
                                class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="p-8 pt-16">
                            <h6 class="text-md mb-1">Bangkok</h6>
                            <span class="text-secondary-light">3 Days, 4 Nights</span>
                            <div class="mt-10 d-flex align-items-center justify-content-between gap-10">
                                <span class="fw-semibold text-secondary-light text-sm">$5,000</span>
                                <div class="d-flex align-items-center gap-1">
                                    <span class="text-primary-600 line-height-1 text-md fw-medium"><i
                                            class="ri-user-3-line"></i></span>
                                    <span class="text-sm fw-medium">(220)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-base p-6 radius-12">
                        <div class="radius-8 overflow-hidden">
                            <img src="assets/images/home-twelve/travel-img2.png" alt="Image"
                                class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="p-8 pt-16">
                            <h6 class="text-md mb-1">İstanbul</h6>
                            <span class="text-secondary-light">6 Days, 7 Nights</span>
                            <div class="mt-10 d-flex align-items-center justify-content-between gap-10">
                                <span class="fw-semibold text-secondary-light text-sm">$7,000</span>
                                <div class="d-flex align-items-center gap-1">
                                    <span class="text-primary-600 line-height-1 text-md fw-medium"><i
                                            class="ri-user-3-line"></i></span>
                                    <span class="text-sm fw-medium">(280)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Travel SLider end -->





        </div>
    </div>


    <div class="col-xl-4">
        <div class="d-flex flex-column gap-24">







        </div>
    </div>
</div>

@endsection
