@include('include.header')

    <!-- Tracker form Start -->
    <section class="sec-padding">
        <div class="tracking-cta-sec jarallax mt-5" data-jarallax="" data-speed=".2">

            <div class="parallax-overly"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tracking-wrapper text-center text-info">
                            <span
                                class="sub-title text-secondary fadeInUp w-auto d-flex justify-content-center align-items-center"
                                style="transform: translate(0px, 0px); opacity: 1;">
                                <img src="{{ asset('assets/images/icons/truck-w.svg') }}" alt="" class="img-fluid truck-w-img">
                                &nbsp;
                                tracking</span>

                            <h1 class="sec-title text-info">Track the Status of Your Shipment Instantly</h1>

                            <div class="tracking-form2 fadeInUp" style="transform: translate(0px, 0px); opacity: 1;">
                                <p class="text-light">Enter your tracking number to get real-time updates on your
                                    shipment’s location and
                                    delivery
                                    status.</p>
                                <form action="#"
                                    class="tracking-form d-sm-flex justify-content-between align-items-center">

                                    <input type="text" placeholder="Enter your tracking number">
                                    <button class="btn btn-primary">Track Now <i
                                            class="fa fa-arrow-right"></i><span></span></button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="jarallax-container-1" class="jarallax-container"
                style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100; clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%);">
                <img src="{{ asset('assets/images/tracking-bg.jpg') }}" alt="" class="jarallax-img"
                    style="object-fit: cover; object-position: 50% 50%; max-width: none; position: fixed; top: 0px; left: 0px; width: 1440px; height: 1153.44px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; margin-top: 57.28px; transform: translate3d(0px, -32.76px, 0px);">
            </div>
        </div>
        <!-- Tracker form End -->

        <div class="tracking-form-sec">
            <div class="container">
                <div class="row trackign-form-wrapper">
                    <div class="col-lg-12">
                        <div class="tracking-tabs mb-3">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="request-quote-tab" data-bs-toggle="tab"
                                        data-bs-target="#request-quote-tab-pane" type="button" role="tab"
                                        aria-controls="request-quote-tab-pane" aria-selected="true">
                                        Request Quote
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="shipment-tab" data-bs-toggle="tab"
                                        data-bs-target="#shipment-tab-pane" type="button" role="tab"
                                        aria-controls="shipment-tab-pane" aria-selected="false" tabindex="-1">
                                        Traking Shipment</button>
                                </li>


                            </ul>
                        </div> <!-- Event Tabs End -->
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade show active" id="request-quote-tab-pane" role="tabpanel"
                                aria-labelledby="request-quote-tab" tabindex="0">
                                <form action="#" class="request-form">
                                    <h3 class="h5">Select Your Services Type*</h3>
                                    <div class="d-flex gap-3 mt-3">
                                        <div class="form-group d-flex gap-2 align-items-center">
                                            <input class="form-check-input" type="radio" name="freightType" id="air"
                                                value="air" checked="">
                                            <label class="form-check-label fs-6 mb-0" for="air">Air Freight</label>
                                        </div>
                                        <div class="form-group d-flex gap-2 align-items-center">
                                            <input class="form-check-input" type="radio" name="freightType" id="ocean"
                                                value="ocean">
                                            <label class="form-check-label fs-6 mb-0" for="ocean">Ocean Freight</label>
                                        </div>
                                        <div class="form-group d-flex gap-2 align-items-center">
                                            <input class="form-check-input" type="radio" name="freightType" id="land"
                                                value="land">
                                            <label class="form-check-label fs-6 mb-0" for="land">Land Freight</label>
                                        </div>
                                    </div>
                                    <div class="row form-inner">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label for="fname">Full Name*</label>
                                                <input id="fname" type="text" placeholder="John Doe">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label for="remail">Email*</label>
                                                <input id="remail" type="email" placeholder="info@transhub.com">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label for="phone">Phone No*</label>
                                                <input id="phone" type="text" placeholder="+986- 4459 **** ****">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label for="goods">Type Of Goods</label>
                                                <select name="goods" id="goods" class="tv-select">
                                                    <option value="" selected disabled>(Select type of goods)</option>
                                                    <option value="1">Heavy Goods</option>
                                                    <option value="1">Light Goods</option>
                                                    <option value="1">Standard</option>
                                                    <option value="1">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label for="Dimensions">Dimensions</label>
                                                <input id="Dimensions" type="text"
                                                    placeholder="Length x Width x Height x Unit">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label for="ship_date">Date of Shipment</label>
                                                <input type="text" value="Date" data-date-format="mm/dd/yy"
                                                    id="ship_date" placeholder="Date">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mt-3 mt-lg-5">
                                            <div
                                                class="d-sm-flex justify-content-between align-items-center contact-submit">
                                                <button class="btn btn-primary mb-4 mb-sm-0">Request A Quote <i
                                                        class="fa fa-arrow-right"></i><span></span></button>
                                                <p class="m-0">Note: Face any trouble? We wil contact with You as soon
                                                    as
                                                    possible ||
                                                    <a href="{{ route('contact') }}" class="text-primary">Contact Our Expert</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="shipment-tab-pane" role="tabpanel"
                                aria-labelledby="shipment-tab" tabindex="0">
                                <div class="position-relative">
                                    <div class="shipment-content">
                                        <h3 class="display-4 mb-4">Tracking Shipment</h3>
                                        <p>Shipment tracking is the backbone of modern logistics. Today’s customers
                                            expect
                                            real-time
                                            visibility—knowing exactly where their cargo is, when it will arrive, and
                                            whether
                                            any
                                            delays
                                            might occur.</p>
                                        <ul class="check">
                                            <li>24/7 real-time location updates</li>
                                            <li>Interactive tracking dashboard</li>
                                            <li>Enter your tracking ID and Verify</li>
                                        </ul>
                                        <!-- Shipment tracking form or instructions -->
                                        <form action="#" class="tracking-form my-5 d-flex  gap-3">
                                            <input type="text" class="form-control"
                                                placeholder="Enter your tracking number" required="">
                                            <button class="btn btn-primary" type="submit">Track Now <i
                                                    class="fa fa-arrow-right"></i><span></span></button>
                                        </form>
                                        <p class="fw-light small">Note: Face any trouble? We wil contact with You as
                                            soon as
                                            possible ||
                                            <a href="{{ route('contact') }}" class="text-primary">Contact Our Expert</a>
                                        </p>
                                    </div>
                                    <div class="img-end">
                                        <img class="img-fluid " src="{{ asset('assets/images/booking.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div> <!-- Tab Content End -->
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('include.footer')