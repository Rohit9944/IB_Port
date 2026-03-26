@include('include.header')

<!-- About section -->
<section class="about-sec2 overflow-hidden">

    <div class="container mt-5">
        <div class="row align-items-end">
            <div class="col-xl-6 col-sm-8 mx-auto mx-xl-0 p-0">
                <div class="about-media-box position-relative">
                    <div class="ab-main-img">
                        <img src="/assets/images/about-m.jpg" class="img-fluid" alt="">
                        <div class="experien-stat">
                            <p class="text-info m-0"> <span class="purecounter" data-purecounter-end="25">25</span>+
                                Years
                                Experience</p>
                        </div>
                        <div class="about-sm p-xl-3">
                            <img class="img-fluid" src="{{asset('/assets/images/about-m2.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 ps-xl-0">
                <div class="about-content">
                    <span class="sub-title2 fadeInUp single">About Our Company</span>
                    <h2 class="sec-title">Why Global Shipping Companies Trust IBPortDash</h2>
                    <p class="lead">
                        The dry bulk shipping industry still relies heavily on manual communication, fragmented
                        data, and slow negotiation
                        processes. IBPortDash transforms this ecosystem with a powerful digital platform designed to
                        connect cargo owners, ship
                        owners, and brokers in real time.</p>
                    <p class="lead">By combining AI-driven intelligence, maritime data integrations, and secure
                        digital
                        workflows, we help industry
                        participants make faster decisions, reduce operational risks, and improve chartering
                        efficiency.</p>
                    <!-- <ul class="check">
                                <li>AI-Driven Cargo and Vessel Matching</li>
                                <li>Real-Time Maritime Analytics</li>
                                <li>Verified Counterparty Safety Scores</li>
                                <li>Automated Communication & Document</li>
                            </ul> -->
                </div>
                <div class="about-footer d-sm-flex align-items-center gap-5 bg-shade round mt-5">
                    <div class="af-item d-flex align-items-start gap-4">
                        <img src="{{asset('/assets/images/af-1.png')}}" alt="transform">
                        <div class="af-info">
                            <h3 class="h5">Global Maritime Network </h3>
                            <p>Connect with verified cargo owners, ship operators.</p>
                        </div>
                    </div>
                    <div class="af-item d-flex align-items-start gap-4">
                        <img src="{{asset('/assets/images/af-2.png')}}" alt="transform">
                        <div class="af-info">
                            <h3 class="h5">Real-Time Vessel Tracking</h3>
                            <p>Track vessel movements, routes, and estimated arrival times.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Operation Section Start -->
<section class="operation-sec sec-padding pt-0">

    <div class="container p-0">
        <div class="row justify-content-end w-100 gap-5 gap-xl-0">

            <div class="col-12 col-xl-6 p-0 operation-sec-left"
                style="background: url({{asset('/assets/images/double-container.svg')}}) no-repeat right 0px; background-size:80%;">
                <div class="container-img"></div>
            </div>

            <div class="col-xl-6 operation-sec-right pt-5 mt-2">
                <span class="sub-title2 fadeInUp single text-secondary">Our Process</span>
                <h2 class="sec-title text-info">
                    How IBPortDash Simplifies Ship Charting
                </h2>

                <div class="ct-tab nav flex-column nav-pills mx-0" id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">

                    <button class="nav-link d-flex align-items-center justify-content-between" id="air-tab"
                        data-bs-toggle="tab" data-bs-target="#air" type="button" role="tab" aria-controls="air"
                        aria-selected="true">
                        <span class="th-info text-start">
                            <span class="h4 d-block">Select your Vessel</span>
                            <span class="p d-block text-capitalize">
                                stop looking around. select the right vessel to ensure maximum
                                easeness in
                                transporting your cargo to destination.
                            </span>
                        </span>
                        <span class="icon-lg rounded-circle"><i class="fa fa-arrow-right"></i></span>
                    </button>

                    <button class="nav-link d-flex align-items-center justify-content-between" id="byroad-tab"
                        data-bs-toggle="tab" data-bs-target="#byroad" type="button" role="tab"
                        aria-controls="byroad" aria-selected="false">
                        <span class="th-info text-start">
                            <span class="h4 d-block">PreVet Your Company</span>
                            <span class="p d-block text-capitalize">
                                don't panic! pre-Vetting process for onboarding of cargo owner and
                                ship owner.
                            </span>
                        </span>
                        <span class="icon-lg rounded-circle"><i class="fa fa-arrow-right"></i></span>
                    </button>

                    <button class="nav-link d-flex align-items-center justify-content-between" id="road-tab"
                        data-bs-toggle="tab" data-bs-target="#road" type="button" role="tab" aria-controls="road"
                        aria-selected="false">
                        <span class="th-info text-start">
                            <span class="h4 d-block">Move Your Cargo To Ship</span>
                            <span class="p d-block text-capitalize">
                                do one favour, quickly move your cargo to the ship and help in
                                departing the ship
                                from port.
                            </span>
                        </span>
                        <span class="icon-lg rounded-circle"><i class="fa fa-arrow-right"></i></span>
                    </button>

                    <button class="nav-link d-flex align-items-center justify-content-between" id="control-tab"
                        data-bs-toggle="tab" data-bs-target="#control" type="button" role="tab" aria-controls="control"
                        aria-selected="false">
                        <span class="th-info text-start">
                            <span class="h4 d-block">Control All One Place</span>
                            <span class="p d-block text-capitalize">
                                all is well, no need to worry about your cargo, you can track them
                                anytime from
                                anywhere on our portal.
                            </span>
                        </span>
                        <span class="icon-lg rounded-circle"><i class="fa fa-arrow-right"></i></span>
                    </button>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Operation Section End -->

<!-- text slider start -->
<section class="text-slider">
    <div class="text-slide-sec sec-padding overflow-hidden">
        <div class="marque-active">
            <div class="text-slide-wrap">
                <div class="text-item">
                    <img src="{{asset('/assets/images/star-1.png')}}" alt="">
                    <h3 class="display-1">Transport</h3>
                </div>
                <div class="text-item">
                    <img src="{{asset('/assets/images/star-1.png')}}" alt="">
                    <h3 class="display-1">Logistic</h3>
                </div>
                <div class="text-item">
                    <img src="{{asset('/assets/images/star-1.png')}}" alt="">
                    <h3 class="display-1">Global Export</h3>
                </div>
                <div class="text-item">
                    <img src="{{asset('/assets/images/star-1.png')}}" alt="">
                    <h3 class="display-1">Transport</h3>
                </div>
                <div class="text-item">
                    <img src="{{asset('/assets/images/star-1.png')}}" alt="">
                    <h3 class="display-1">Global Import</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- text slider end -->

<!-- tracking section -->
<section>
    <div class="tracking-cta-sec jarallax" data-jarallax="" data-speed=".2">

        <div class="parallax-overly"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tracking-wrapper text-center text-info">
                        <span
                            class="sub-title text-secondary fadeInUp w-auto d-flex justify-content-center align-items-center"
                            style="transform: translate(0px, 0px); opacity: 1;">
                            <img src="{{asset('/assets/images/icons/truck-w.svg')}}" alt="" class="img-fluid truck-w-img">
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
            <img src="{{asset('/assets/images/tracking-bg.jpg')}}" alt="" class="jarallax-img"
                style="object-fit: cover; object-position: 50% 50%; max-width: none; position: fixed; top: 0px; left: 0px; width: 1440px; height: 1153.44px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; margin-top: 57.28px; transform: translate3d(0px, -32.76px, 0px);">
        </div>
    </div>
    <!-- Tracker form End -->

    <div class="tracking-form-sec">
        <div class="container">
            <div class="row trackign-form-wrapper">
                <div class="col-lg-12">
                    <div class="tracking-tabs">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="request-quote-tab" data-bs-toggle="tab"
                                    data-bs-target="#request-quote-tab-pane" type="button" role="tab"
                                    aria-controls="request-quote-tab-pane" aria-selected="true">
                                    Request Quote
                                </button>
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
                                        <label class="form-check-label mb-0" for="air">Air Freight</label>
                                    </div>
                                    <div class="form-group d-flex gap-2 align-items-center">
                                        <input class="form-check-input" type="radio" name="freightType" id="ocean"
                                            value="ocean">
                                        <label class="form-check-label mb-0" for="ocean">Ocean Freight</label>
                                    </div>
                                    <div class="form-group d-flex gap-2 align-items-center">
                                        <input class="form-check-input" type="radio" name="freightType" id="land"
                                            value="land">
                                        <label class="form-check-label mb-0" for="land">Land Freight</label>
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
                                                <a href="contact.html" class="text-primary">Contact Our Expert</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div> <!-- Tab Content End -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- tracking section END -->

<!-- brands slider -->
<div class="brands-sec3 overflow-hidden">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-12">
                <div class="brands-carousel2 swiper swiper-initialized swiper-horizontal swiper-free-mode">
                    <div class="swiper-wrapper" id="swiper-wrapper-82b10ac5a36daae101" aria-live="off"
                        style="transform: translate3d(-2013.2px, 0px, 0px); transition-duration: 300ms;">
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                            data-swiper-slide-index="2" role="group" aria-label="3 / 7" style="width: 287.6px;">
                            <a href="about-us.html"><img src="{{asset('/assets/images/bra3.png')}}" alt="Brands"></a>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                            data-swiper-slide-index="3" role="group" aria-label="4 / 7" style="width: 287.6px;">
                            <a href="about-us.html"><img src="{{asset('/assets/images/bra4.png')}}" alt="Brands"></a>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" role="group"
                            aria-label="5 / 7" style="width: 287.6px;">
                            <a href="about-us.html"><img src="{{asset('/assets/images/bra5.png')}}" alt="Brands"></a>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5" role="group"
                            aria-label="6 / 7" style="width: 287.6px;">
                            <a href="about-us.html"><img src="{{asset('/assets/images/bra1.png')}}" alt="Brands"></a>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="6" role="group"
                            aria-label="7 / 7" style="width: 287.6px;">
                            <a href="about-us.html"><img src="{{asset('/assets/images/bra2.png')}}" alt="Brands"></a>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="0" role="group" aria-label="1 / 7"
                            style="width: 287.6px;">
                            <a href="about-us.html"><img src="{{asset('/assets/images/bra1.png')}}" alt="Brands"></a>
                        </div>
                        <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="1" role="group"
                            aria-label="2 / 7" style="width: 287.6px;">
                            <a href="about-us.html"><img src="{{asset('/assets/images/bra2.png')}}" alt="Brands"></a>
                        </div>
                        <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="2" role="group"
                            aria-label="3 / 7" style="width: 287.6px;">
                            <a href="about-us.html"><img src="{{asset('/assets/images/bra3.png')}}" alt="Brands"></a>
                        </div>
                        <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="3" role="group"
                            aria-label="4 / 7" style="width: 287.6px;">
                            <a href="about-us.html"><img src="{{asset('/assets/images/bra4.png')}}" alt="Brands"></a>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="4" role="group" aria-label="5 / 7"
                            style="width: 287.6px;">
                            <a href="about-us.html"><img src="{{asset('/assets/images/bra5.png')}}" alt="Brands"></a>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="5" role="group" aria-label="6 / 7"
                            style="width: 287.6px;">
                            <a href="about-us.html"><img src="{{asset('/assets/images/bra1.png')}}" alt="Brands"></a>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="6" role="group" aria-label="7 / 7"
                            style="width: 287.6px;">
                            <a href="about-us.html"><img src="{{asset('/assets/images/bra2.png')}}" alt="Brands"></a>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" role="group"
                            aria-label="1 / 7" style="width: 287.6px;">
                            <a href="about-us.html"><img src="{{asset('/assets/images/bra1.png')}}" alt="Brands"></a>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                            data-swiper-slide-index="1" role="group" aria-label="2 / 7" style="width: 287.6px;">
                            <a href="about-us.html"><img src="{{asset('/assets/images/bra2.png')}}" alt="Brands"></a>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                            data-swiper-slide-index="2" role="group" aria-label="3 / 7" style="width: 287.6px;">
                            <a href="about-us.html"><img src="{{asset('/assets/images/bra3.png')}}" alt="Brands"></a>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                            data-swiper-slide-index="3" role="group" aria-label="4 / 7" style="width: 287.6px;">
                            <a href="about-us.html"><img src="{{asset('/assets/images/bra4.png')}}" alt="Brands"></a>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" role="group"
                            aria-label="5 / 7" style="width: 287.6px;">
                            <a href="about-us.html"><img src="{{asset('/assets/images/bra5.png')}}" alt="Brands"></a>
                        </div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brands slider END -->

<!-- TEAM SECTION-2 START -->
<section class="team-sec2 sec-padding overflow-hidden position-relative">

    <!-- <img src="{{asset('/assets/images/trolly-sh.png')}}" alt="" class="anim-img moveXS right-bottom"> -->

    <div class="container">
        <div class="swiper mySwiper team-swiper position-relative">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="review-thumb team-pfp">
                                <img class="img-fluid team-img" src="{{asset('/assets/images/testimonial-ft.jpg')}}" alt="review">
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="team-content">
                                <span class="sub-title fadeInUp"
                                    style="transform: translate(0px, 0px); opacity: 1;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="18" fill="none"
                                        viewBox="0 0 30 18">
                                        <path fill="#fd5523"
                                            d="M8.125 15.429h-2.5a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h2.5c.166 0 .325.068.442.188a.65.65 0 0 1 0 .91.62.62 0 0 1-.442.188m20.313 0h-1.563a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h1.044l.842-4.618c-.011-2.364-1.973-4.382-4.386-4.382h-4.104l-1.989 9h3.593c.166 0 .325.068.442.188a.653.653 0 0 1 0 .91.62.62 0 0 1-.442.188H17.5a.61.61 0 0 1-.488-.242.65.65 0 0 1-.122-.543L19.162 4.36a.65.65 0 0 1 .22-.361.6.6 0 0 1 .39-.14h4.603C27.476 3.857 30 6.452 30 9.642l-.949 5.261a.65.65 0 0 1-.214.377.6.6 0 0 1-.4.148">
                                        </path>
                                        <path fill="#fd5523"
                                            d="M24.375 18c-1.722 0-3.125-1.441-3.125-3.214s1.403-3.215 3.125-3.215c1.723 0 3.125 1.442 3.125 3.215S26.098 18 24.375 18m0-5.143c-1.034 0-1.875.866-1.875 1.929s.841 1.928 1.875 1.928 1.875-.865 1.875-1.928-.841-1.929-1.875-1.929M10.625 18C8.903 18 7.5 16.559 7.5 14.786s1.403-3.215 3.125-3.215c1.723 0 3.125 1.442 3.125 3.215S12.348 18 10.625 18m0-5.143c-1.034 0-1.875.866-1.875 1.929s.841 1.928 1.875 1.928 1.875-.865 1.875-1.928c0-1.064-.841-1.929-1.875-1.929m-2.5-9h-5a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.91.62.62 0 0 1 .442-.188h5c.166 0 .325.068.442.189a.65.65 0 0 1 0 .909.62.62 0 0 1-.442.188m0 3.857h-6.25a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.91.62.62 0 0 1 .442-.187h6.25c.166 0 .325.067.442.188a.65.65 0 0 1 0 .909.62.62 0 0 1-.442.188m0 3.857h-7.5a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h7.5c.166 0 .325.067.442.188a.65.65 0 0 1 0 .91.62.62 0 0 1-.442.187">
                                        </path>
                                        <path fill="#fd5523"
                                            d="M17.5 15.429h-4.375a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188H17l2.84-12.857H5.625a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909A.62.62 0 0 1 5.625 0h15a.61.61 0 0 1 .488.241.65.65 0 0 1 .122.543L18.11 14.927a.65.65 0 0 1-.22.36.6.6 0 0 1-.39.142">
                                        </path>
                                    </svg>

                                    Our Team
                                </span>

                                <h2 class="sec-title">Professional Skills</h2>

                                <div>
                                    <div>
                                        <img src="{{asset('/assets/images/quote2.png')}}" alt="" class="img-fluid quote-img">
                                    </div>
                                    <p class="mt-2 mb-3">
                                        IBPortDash has transformed our supply chain with their reliable and
                                        efficient
                                        Logistics
                                        solutions. Their team is responsive and always goes the extra mile to ensure
                                        timely
                                        deliveries. Highly recommended!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="review-thumb team-pfp">
                                <img class="img-fluid" src="{{ asset('/assets/images/testimonial-ft.jpg') }}" alt="review">
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="team-content">
                                <span class="sub-title fadeInUp"
                                    style="transform: translate(0px, 0px); opacity: 1;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="18" fill="none"
                                        viewBox="0 0 30 18">
                                        <path fill="#fd5523"
                                            d="M8.125 15.429h-2.5a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h2.5c.166 0 .325.068.442.188a.65.65 0 0 1 0 .91.62.62 0 0 1-.442.188m20.313 0h-1.563a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h1.044l.842-4.618c-.011-2.364-1.973-4.382-4.386-4.382h-4.104l-1.989 9h3.593c.166 0 .325.068.442.188a.653.653 0 0 1 0 .91.62.62 0 0 1-.442.188H17.5a.61.61 0 0 1-.488-.242.65.65 0 0 1-.122-.543L19.162 4.36a.65.65 0 0 1 .22-.361.6.6 0 0 1 .39-.14h4.603C27.476 3.857 30 6.452 30 9.642l-.949 5.261a.65.65 0 0 1-.214.377.6.6 0 0 1-.4.148">
                                        </path>
                                        <path fill="#fd5523"
                                            d="M24.375 18c-1.722 0-3.125-1.441-3.125-3.214s1.403-3.215 3.125-3.215c1.723 0 3.125 1.442 3.125 3.215S26.098 18 24.375 18m0-5.143c-1.034 0-1.875.866-1.875 1.929s.841 1.928 1.875 1.928 1.875-.865 1.875-1.928-.841-1.929-1.875-1.929M10.625 18C8.903 18 7.5 16.559 7.5 14.786s1.403-3.215 3.125-3.215c1.723 0 3.125 1.442 3.125 3.215S12.348 18 10.625 18m0-5.143c-1.034 0-1.875.866-1.875 1.929s.841 1.928 1.875 1.928 1.875-.865 1.875-1.928c0-1.064-.841-1.929-1.875-1.929m-2.5-9h-5a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.91.62.62 0 0 1 .442-.188h5c.166 0 .325.068.442.189a.65.65 0 0 1 0 .909.62.62 0 0 1-.442.188m0 3.857h-6.25a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.91.62.62 0 0 1 .442-.187h6.25c.166 0 .325.067.442.188a.65.65 0 0 1 0 .909.62.62 0 0 1-.442.188m0 3.857h-7.5a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h7.5c.166 0 .325.067.442.188a.65.65 0 0 1 0 .91.62.62 0 0 1-.442.187">
                                        </path>
                                        <path fill="#fd5523"
                                            d="M17.5 15.429h-4.375a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188H17l2.84-12.857H5.625a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909A.62.62 0 0 1 5.625 0h15a.61.61 0 0 1 .488.241.65.65 0 0 1 .122.543L18.11 14.927a.65.65 0 0 1-.22.36.6.6 0 0 1-.39.142">
                                        </path>
                                    </svg>

                                    Our Team
                                </span>

                                <h2 class="sec-title">Professional Skills</h2>

                                <div>
                                    <div><img src="{{asset('/assets/images/quote2.png')}}" alt="" class="img-fluid quote-img">
                                    </div>
                                    <p class="mt-2 mb-3">
                                        Arki features minimal and stylish design. The theme is well crafted for all
                                        the
                                        modern
                                        architect and interior design website. With Arki, it makes your logistic
                                        website look even more attractive and impressive too.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next position-absolute"></div>
            <div class="swiper-button-prev position-absolute"></div>
        </div>

    </div>
</section>
<!-- TEAM SECTION-2 END -->
                    
<!-- achievements section -->
 <section class="achievements sec-padding" style="background-image: url({{ asset('/assets/images/stat-bg.jpg') }})">
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="single-stat fadeInUp" data-delay=".1"
                style="transform: translate(0px, 0px); opacity: 1;">
                <img src="{{asset('/assets/images/stat1.png')}}" alt="Stat">
                <div class="stat-info">
                    <h3 class="display-3 text-white"><span class=" purecounter" data-purecounter-end="520"
                            data-purecounter-duration=".3">520</span>+
                    </h3>
                    <p>Successful Transportation</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="single-stat fadeInUp" data-delay=".4"
                style="transform: translate(0px, 0px); opacity: 1;">
                <img src="{{ asset('/assets/images/sta2.png') }}" alt="Stat">
                <div class="stat-info">
                    <h3 class="display-3 text-white"><span class=" purecounter" data-purecounter-end="50"
                            data-purecounter-duration=".3">50</span>+
                    </h3>
                    <p>Expert Team Member</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="single-stat fadeInUp" data-delay=".6"
                style="transform: translate(0px, 0px); opacity: 1;">
                <img src="{{ asset('/assets/images/stat3.png') }}" alt="Stat">
                <div class="stat-info">
                    <h3 class="display-3 text-white"><span class=" purecounter" data-purecounter-end="400"
                            data-purecounter-duration=".3">400</span>+
                    </h3>
                    <p>Serving Countries</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="single-stat fadeInUp" data-delay=".8"
                style="transform: translate(0px, 0px); opacity: 1;">
                <img src="{{ asset('/assets/images/stat4.png') }}" alt="Stat">
                <div class="stat-info">
                    <h3 class="display-3 text-white"><span class=" purecounter" data-purecounter-end="200"
                            data-purecounter-duration=".3">200</span>+
                    </h3>
                    <p>Businesses globally trust</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- achievements section END -->

<!-- FAQ Section Start -->
<section class="faq-sec overflow-hidden sec-padding position-relative">
    <div class="container">
        <div class="sec-intro mx-auto text-center">
            <span class="sub-title2 fadeInUp">Our faq</span>
            <h2 class="sec-title">What Details Are Required for a Quote?</h2>
        </div>
        <div class="row gy-4">
            <div class="col-lg-7">
                <div class="faq-accordion rounded-4" id="tv-accordion">
                    <div class="accordion-item active">
                        <h4 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How does IBPortDash help with ship chartering?
                            </button>
                        </h4>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            role="tabpanel" data-bs-parent="#tv-accordion">
                            <div class="accordion-body">
                                <p>
                                    IBPortDash connects cargo owners and ship operators on one
                                    platform, enabling
                                    faster cargo-to-vessel matching, negotiations, and digital
                                    contract management.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h4 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How does the platform verify shipping partners?
                            </button>
                        </h4>
                        <div id="collapseTwo" class="accordion-collapse collapse" role="tabpanel"
                            aria-labelledby="headingTwo" data-bs-parent="#tv-accordion">
                            <div class="accordion-body">
                                <p>Meeting project deadlines is a top priority. We understand the
                                    importance of
                                    timely
                                    delivery and have established a comprehensive approach to ensure
                                    that all
                                    projects
                                    are
                                    completed</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h4 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Can I track vessel movements on the platform?
                            </button>
                        </h4>
                        <div id="collapseThree" class="accordion-collapse collapse" role="tabpanel"
                            aria-labelledby="headingThree" data-bs-parent="#tv-accordion">
                            <div class="accordion-body">
                                <p>Meeting project deadlines is a top priority. We understand the
                                    importance of
                                    timely
                                    delivery and have established a comprehensive approach to ensure
                                    that all
                                    projects
                                    are
                                    completed</p>
                            </div>
                        </div>
                    </div> <!-- Item End -->
                    <div class="accordion-item">
                        <h4 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                How are charter negotiations conducted?
                            </button>
                        </h4>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            role="tabpanel" data-bs-parent="#tv-accordion">
                            <div class="accordion-body">
                                <p>Meeting project deadlines is a top priority. We understand the
                                    importance of
                                    timely
                                    delivery and have established a comprehensive approach to ensure
                                    that all
                                    projects
                                    are
                                    completed</p>
                            </div>
                        </div>
                    </div> <!-- Item End -->
                    <div class="accordion-item">
                        <h4 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                What is the pricing model for IBPortDash?
                            </button>
                        </h4>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            role="tabpanel" data-bs-parent="#tv-accordion">
                            <div class="accordion-body">
                                <p>Teachers play a central role in education. They impart knowledge,
                                    facilitate
                                    learning, and
                                    help students develop
                                    critical thinking skills. Teachers also contribute to the social
                                    and emotional
                                    development
                                    of
                                    students.</p>
                            </div>
                        </div>
                    </div> <!-- Item End -->
                </div>
            </div>
            <div class="col-lg-5">
                <form>
                    <div class="contact-form rounded-4 position-relative">

                        <h3 class="display-4 mb-3">Make An Appointment</h3>
                        <div class="form-group">
                            <input type="text" placeholder="Your name">
                            <i class="fa-regular fa-user"></i>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Your email">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Company Name">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Cargo Type / Shipment Details">
                            <i class="fa-regular fa-clipboard"></i>
                        </div>
                        <button class="btn btn-primary btn-lg w-100 mt-2">Book An Appointment <i
                                class="fa fa-arrow-right"></i>
                            <span></span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- FAQ Section End -->

@include('include.footer')