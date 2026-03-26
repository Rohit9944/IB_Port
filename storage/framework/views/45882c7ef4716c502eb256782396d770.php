<?php echo $__env->make('include.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- Hero section Start -->
    <section class="hero position-relative">
        <div class="container-fluid"></div>

        <div class="hero-content position-absolute">
            <span class="head-text text-uppercase fw-semibold text-secondary fs-6"> digital maritime
                marketplace
            </span>
            <h1 class="text-white fw-bold"> AI-Powered Platform for Global Dry Bulk Shipping</h1>
            <p class="text-white py-4">
                Transforming traditional ship chartering with real-time maritime data, AI-driven vessel matching,
                and secure digital contract management.
            </p>

            <div class="hero-btns d-flex flex-row align-items-center gap-3 gap-md-4">
                <a href="<?php echo e(route('contact')); ?>" class="btn fs-6 btn-secondary border-white border btn-hover">Request Demo <i
                        class="fa fa-arrow-right"></i>
                    <span></span>
                </a>
                <a href="<?php echo e(route('pricing')); ?>" class="btn-search btn-primary text-white fs-6 btn-hover2 fw-light">
                    Join The Platform <i class="fa fa-arrow-right"></i>
                    <span></span>
                </a>
            </div>
        </div>
    </section>
    <!-- Hero Section END -->

    <!-- About section -->
    <section class="about-sec2 overflow-hidden">

        <div class="container">
            <div class="row align-items-end">
                <div class="col-xl-6 col-sm-8 mx-auto mx-xl-0 p-0">
                    <div class="about-media-box position-relative">
                        <div class="ab-main-img">
                            <img src="<?php echo e(asset('/assets/images/about-m.jpg')); ?>" class="img-fluid" alt="">
                            <div class="experien-stat">
                                <p class="text-info m-0"> <span class="purecounter" data-purecounter-end="25">25</span>+
                                    Years
                                    Experience</p>
                            </div>
                            <div class="about-sm">
                                <img class="img-fluid" src="<?php echo e(asset('/assets/images/about-m2.png')); ?>" alt="">
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
                            <img src="/assets/images/af-1.png" alt="transform">
                            <div class="af-info">
                                <h3 class="h5">Global Maritime Network </h3>
                                <p>Connect with verified cargo owners, ship operators.</p>
                            </div>
                        </div>
                        <div class="af-item d-flex align-items-start gap-4">
                            <img src="/assets/images/af-2.png" alt="transform">
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

    <!-- text slider start -->
    <section class="text-slider">
        <div class="text-slide-sec sec-padding overflow-hidden pt-0">
            <div class="marque-active">
                <div class="text-slide-wrap">
                    <div class="text-item">
                        <img src="<?php echo e(asset('/assets/images/star-1.png')); ?>" alt="">
                        <h3 class="display-1">Transport</h3>
                    </div>
                    <div class="text-item">
                        <img src="<?php echo e(asset('/assets/images/star-1.png')); ?>" alt="">
                        <h3 class="display-1">Logistic</h3>
                    </div>
                    <div class="text-item">
                        <img src="<?php echo e(asset('/assets/images/star-1.png')); ?>" alt="">
                        <h3 class="display-1">Global Export</h3>
                    </div>
                    <div class="text-item">
                        <img src="<?php echo e(asset('/assets/images/star-1.png')); ?>" alt="">
                        <h3 class="display-1">Transport</h3>
                    </div>
                    <div class="text-item">
                        <img src="<?php echo e(asset('/assets/images/star-1.png')); ?>" alt="">
                        <h3 class="display-1">Global Import</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- text slider end -->

    <!-- Services Section Start -->
    <section class="services-sec2 sec-padding overflow-hidden bg-cover jarallax" data-jarallax data-speed=".2">
        <img src="<?php echo e(asset('/assets/images/service2-bg.jpg')); ?>" alt="parallax" class="jarallax-img">
        <div class="container ct-container p-0">
            <div class="row align-items-center serv-header m-auto">
                <div class="col-lg-8">
                    <div class="sec-intro">
                        <span class="sub-title2 fadeInUp single">Our Services</span>
                        <h2 class="sec-title">Digital Solutions for Modern Maritime Trade</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="header-slider-nav">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="service-slider2 swiper">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="service-card2 position-relative s1 round bg-transparent">
                                    <div class="serv-empty z-2">
                                        <img src="<?php echo e(asset('/assets/images/pt1.jpg')); ?>" alt="" class="opacity-0">

                                        <div class="serv-mask p-3 rounded-4 position-absolute"></div>

                                        <div
                                            class="details-below bg-transparent px-4 py-3 rounded-4 position-absolute z-1">
                                            <div class="serv-icon bg-primary p-3 rounded-1 mb-4">
                                                <img src="<?php echo e(asset('/assets/images/icons/pre-vet.png')); ?>" alt="" class="img-fluid">
                                            </div>

                                            <h4 class="text-primary mb-3 fw-semibold">Pre-Vetting of Counter Parties
                                            </h4>
                                            <p class="text-muted">Communicate and negotiate charter agreements
                                                directly
                                                within the platform for faster deal closures.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="service-card2 position-relative s2 round bg-transparent">
                                    <div class="serv-empty z-2">
                                        <img src="<?php echo e(asset('/assets/images/pt1.jpg')); ?>" alt="" class=" opacity-0">

                                        <div class="serv-mask p-3 rounded-4 position-absolute"></div>

                                        <div
                                            class="details-below bg-transparent px-4 py-3 rounded-4 position-absolute z-1">
                                            <div class="serv-icon bg-primary p-3 rounded-1 mb-4">
                                                <img src="<?php echo e(asset('/assets/images/icons/negotiate.png')); ?>" alt="" class="img-fluid">
                                            </div>

                                            <h4 class="text-primary mb-3 fw-semibold">In-Platform Negotiations</h4>
                                            <p class="text-muted">Communicate and negotiate charter agreements
                                                directly
                                                within the platform for faster deal closures.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="service-card2 position-relative s3 round bg-transparent">
                                    <div class="serv-empty z-2">
                                        <img src="<?php echo e(asset('/assets/images/pt1.jpg')); ?>" alt="" class=" opacity-0">

                                        <div class="serv-mask p-3 rounded-4 position-absolute"></div>

                                        <div
                                            class="details-below bg-transparent px-4 py-3 rounded-4 position-absolute z-1">
                                            <div class="serv-icon bg-primary p-3 rounded-1 mb-4">
                                                <img src="<?php echo e(asset('/assets/images/icons/manage.png')); ?>" alt="" class="img-fluid">
                                            </div>

                                            <h4 class="text-primary mb-3 fw-semibold">Contract Management</h4>
                                            <p class="text-muted">Communicate and negotiate charter agreements
                                                directly
                                                within the platform for faster deal closures.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="service-card2 position-relative s4 round bg-transparent">
                                    <div class="serv-empty z-2">
                                        <img src="<?php echo e(asset('/assets/images/pt1.jpg')); ?>" alt="" class=" opacity-0">

                                        <div class="serv-mask p-3 rounded-4 position-absolute"></div>

                                        <div
                                            class="details-below bg-transparent px-4 py-3 rounded-4 position-absolute z-1">
                                            <div class="serv-icon bg-primary p-3 rounded-1 mb-4">
                                                <img src="<?php echo e(asset('/assets/images/icons/data.png')); ?>" alt="" class="img-fluid">
                                            </div>

                                            <h4 class="text-primary mb-3 fw-semibold">Real Time Data Flow
                                            </h4>
                                            <p class="text-muted">Communicate and negotiate charter
                                                agreements directly
                                                within the platform for faster deal closures.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Services Section End -->

    <!-- Operation Section Start -->
    <section class="operation-sec sec-padding pt-0">

        <div class="container p-0">
            <div class="row justify-content-end w-100 gap-5 gap-xl-0">

                <div class="col-12 col-xl-6 p-0 operation-sec-left"
                    style="background: url(<?php echo e(asset('/assets/images/double-container.svg')); ?>) no-repeat right 0px; background-size:80%;">
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

                        <button class="nav-link d-flex align-items-center justify-content-between" id="road-tab"
                            data-bs-toggle="tab" data-bs-target="#road" type="button" role="tab" aria-controls="road"
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

                        <button class="nav-link d-flex align-items-center justify-content-between" id="road-tab"
                            data-bs-toggle="tab" data-bs-target="#road" type="button" role="tab" aria-controls="road"
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

    <!-- plans section start -->
    <section class="plan-sec">
        <div class="container">
            <div class="sec-intro mx-auto text-center mb-4">
                <span class="sub-title2 fadeInUp">Our Subscription Plans</span>
                <h2 class="sec-title">Flexible Subscription Plans for IBPortDash</h2>
            </div>

            <div class="row justify-content-center align-items-center gap-4 gap-lg-0 gap-xl-4">

                <div class="col-12 col-lg-4 col-xl-3 p-0">
                    <div class="plan-card rounded-4 p-4 position-relative mt-lg-5 mx-auto mx-lg-0">
                        <h4 class="fw-bold text-blue mb-4">Base</h4>
                        <ul class="check">
                            <li>Platform Negotiations</li>
                            <li>One RFQ In A Year</li>
                            <li>Some Real-Time Data</li>
                        </ul>
                        <div class="plan-foot">
                            <div class="btn-wrapper position-absolute">
                                <div class="plan-price d-flex align-items-center gap-1 mb-4">
                                    <h3 class="fs-4 amount fw-bold mb-0 text-blue">CAD 2000</h3>
                                    <span class="year-span">/year</span>
                                </div>
                                <div class="text-center btn-plan">
                                    <a href="#">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 col-xl-3 p-0">
                    <div class="pro-card plan-card bg-primary rounded-4 p-4 position-relative mx-auto mx-lg-0">
                        <h4 class="fw-bold text-white mb-4">Pro</h4>
                        <ul class="check">
                            <li class="text-white">Advanced Real Time Data</li>
                            <li class="text-white">Market Research And Reports</li>
                            <li class="text-white">Four RFQ In A Year</li>
                            <li class="text-white">Commodity Research And Reports</li>
                        </ul>
                        <div class="plan-foot">
                            <div class="btn-wrapper position-absolute">
                                <div class="plan-price d-flex align-items-center gap-1 mb-4">
                                    <h3 class="fs-4 amount fw-bold mb-0 text-white">CAD 3000</h3>
                                    <span class="year-span text-white-50">/year</span>
                                </div>
                                <div class="text-center btn-plan">
                                    <a href="#">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 col-xl-3 p-0">
                    <div class="plan-card rounded-4 p-4 position-relative mt-lg-5 mx-auto mx-lg-0">
                        <h4 class="fw-bold text-blue mb-4">Enterprise</h4>
                        <ul class="check">
                            <li>Advanced Real Time Data</li>
                            <li>Market Research And Reports</li>
                            <li>Multiple RFQ In A Year</li>
                            <li>Commodity Research And Reports</li>
                        </ul>
                        <div class="plan-foot">
                            <div class="btn-wrapper position-absolute">
                                <div class="plan-price d-flex align-items-center gap-1 mb-4">
                                    <h3 class="fs-4 amount fw-bold mb-0 text-blue">Customize Plan</h3>
                                </div>
                                <div class="text-center btn-plan">
                                    <a href="#">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Plan section end -->

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
                                <img src="<?php echo e(asset('/assets/images/icons/truck-w.svg')); ?>" alt="" class="img-fluid truck-w-img">
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
                <img src="<?php echo e(asset('/assets/images/tracking-bg.jpg')); ?>" alt="" class="jarallax-img"
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
                                <a href="about-us.html"><img src="<?php echo e(asset('/assets/images/bra3.png')); ?>" alt="Brands"></a>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                data-swiper-slide-index="3" role="group" aria-label="4 / 7" style="width: 287.6px;">
                                <a href="about-us.html"><img src="<?php echo e(asset('/assets/images/bra4.png')); ?>" alt="Brands"></a>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" role="group"
                                aria-label="5 / 7" style="width: 287.6px;">
                                <a href="about-us.html"><img src="<?php echo e(asset('/assets/images/bra5.png')); ?>" alt="Brands"></a>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5" role="group"
                                aria-label="6 / 7" style="width: 287.6px;">
                                <a href="about-us.html"><img src="<?php echo e(asset('/assets/images/bra1.png')); ?>" alt="Brands"></a>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="6" role="group"
                                aria-label="7 / 7" style="width: 287.6px;">
                                <a href="about-us.html"><img src="<?php echo e(asset('/assets/images/bra2.png')); ?>" alt="Brands"></a>
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="0" role="group" aria-label="1 / 7"
                                style="width: 287.6px;">
                                <a href="about-us.html"><img src="<?php echo e(asset('/assets/images/bra1.png')); ?>" alt="Brands"></a>
                            </div>
                            <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="1" role="group"
                                aria-label="2 / 7" style="width: 287.6px;">
                                <a href="about-us.html"><img src="<?php echo e(asset('/assets/images/bra2.png')); ?>" alt="Brands"></a>
                            </div>
                            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="2" role="group"
                                aria-label="3 / 7" style="width: 287.6px;">
                                <a href="about-us.html"><img src="<?php echo e(asset('/assets/images/bra3.png')); ?>" alt="Brands"></a>
                            </div>
                            <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="3" role="group"
                                aria-label="4 / 7" style="width: 287.6px;">
                                <a href="about-us.html"><img src="<?php echo e(asset('/assets/images/bra4.png')); ?>" alt="Brands"></a>
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="4" role="group" aria-label="5 / 7"
                                style="width: 287.6px;">
                                <a href="about-us.html"><img src="<?php echo e(asset('/assets/images/bra5.png')); ?>" alt="Brands"></a>
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="5" role="group" aria-label="6 / 7"
                                style="width: 287.6px;">
                                <a href="about-us.html"><img src="<?php echo e(asset('/assets/images/bra1.png')); ?>" alt="Brands"></a>
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="6" role="group" aria-label="7 / 7"
                                style="width: 287.6px;">
                                <a href="about-us.html"><img src="<?php echo e(asset('/assets/images/bra2.png')); ?>" alt="Brands"></a>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" role="group"
                                aria-label="1 / 7" style="width: 287.6px;">
                                <a href="about-us.html"><img src="<?php echo e(asset('/assets/images/bra1.png')); ?>" alt="Brands"></a>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                                data-swiper-slide-index="1" role="group" aria-label="2 / 7" style="width: 287.6px;">
                                <a href="about-us.html"><img src="<?php echo e(asset('/assets/images/bra2.png')); ?>" alt="Brands"></a>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                data-swiper-slide-index="2" role="group" aria-label="3 / 7" style="width: 287.6px;">
                                <a href="about-us.html"><img src="<?php echo e(asset('/assets/images/bra3.png')); ?>" alt="Brands"></a>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                data-swiper-slide-index="3" role="group" aria-label="4 / 7" style="width: 287.6px;">
                                <a href="about-us.html"><img src="<?php echo e(asset('/assets/images/bra4.png')); ?>" alt="Brands"></a>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" role="group"
                                aria-label="5 / 7" style="width: 287.6px;">
                                <a href="about-us.html"><img src="<?php echo e(asset('/assets/images/bra5.png')); ?>" alt="Brands"></a>
                            </div>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brands slider END -->

    <!-- FAQ Section Start -->
    <section class="faq-sec overflow-hidden sec-padding position-relative">
        <!-- <img src="/assets/images/red-container.png" alt="container" class="anim-img right-top moveXS"> -->
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

    <!-- achievements section -->
    <section class="stat-sec" style="background-image: url('<?php echo e(asset('/assets/images/stat-bg.jpg')); ?>');">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-stat fadeInUp" data-delay=".1"
                        style="transform: translate(0px, 0px); opacity: 1;">
                        <img src="<?php echo e(asset('/assets/images/stat1.png')); ?>" alt="Stat">
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
                        <img src="<?php echo e(asset('/assets/images/sta2.png')); ?>" alt="Stat">
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
                        <img src="<?php echo e(asset('/assets/images/stat3.png')); ?>" alt="Stat">
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
                        <img src="<?php echo e(asset('/assets/images/stat4.png')); ?>" alt="Stat">
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

    <!-- Blog Section Start -->
    <section class="blog-sec sec-padding bg-shade">
        <div class="container">

            <div class="d-sm-flex justify-content-between align-items-center">
                <div class="sec-intro mb-0">
                    <span class="sub-title2 fadeInUp single">Blog & News</span>
                    <h2 class="sec-title">Insights from Our Journal</h2>
                </div>
                <a href="blog.html" class="btn btn-primary">View all posts <i class="fa fa-arrow-right"></i>
                    <span></span></a>
            </div>

            <!-- blog-1 -->
            <div class="row justify-content-md-center gy-4 my-2">
                <div class="col-xl-4 col-md-6">
                    <article class="blog-entry2 bg-info round m-auto m-xl-0">
                        <div class="blog-thumb">
                            <a href="about-us.html"><img src="<?php echo e(asset('/assets/images/blog4.png')); ?>" alt="" class="img-fluid"></a>
                        </div>
                        <div class="blog-inner">
                            <div class="blog-meta d-flex gap-4">
                                <span><a href="#"><i class="fa-regular fa-user"></i>Adam
                                        Smith</a></span>
                                <span><a href="#"><i class="fa-regular fa-calendar"></i>07
                                        Nov,2025</a></span>
                            </div>
                            <h3 class="display-6"><a href="about-us.html">
                                    How Digital Platforms Are Transforming Ship Chartering
                                </a></h3>
                            <div class="blog-footer border-top">
                                <a href="about-us.html" class="link-btn">Learn more <i
                                        class="fa-solid fa-circle-arrow-right"></i></a>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- blog-2 -->
                <div class="col-xl-4 col-md-6">
                    <article class="blog-entry2 bg-info round m-auto m-xl-0">
                        <div class="blog-thumb">
                            <a href="about-us.html"><img src="<?php echo e(asset('/assets/images/blog5.jpg')); ?>" alt="" class="img-fluid"></a>
                        </div>
                        <div class="blog-inner">
                            <div class="blog-meta d-flex gap-4">
                                <span><a href="#"><i class="fa-regular fa-user"></i>Adam
                                        Smith</a></span>
                                <span><a href="#"><i class="fa-regular fa-calendar"></i>07
                                        Nov,2025</a></span>
                            </div>
                            <h3 class="display-6"><a href="about-us.html">
                                    The Role of Real-Time Data in Modern Maritime Logistics
                                </a></h3>
                            <div class="blog-footer border-top">
                                <a href="about-us.html" class="link-btn">Learn more <i
                                        class="fa-solid fa-circle-arrow-right"></i></a>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- blog-3 -->
                <div class="col-xl-4 col-md-6">
                    <article class="blog-entry2 bg-info round m-auto m-xl-0">
                        <div class="blog-thumb">
                            <a href="about-us.html"><img src="<?php echo e(asset('/assets/images/blog6.jpg')); ?>" alt="" class="img-fluid"></a>
                        </div>
                        <div class="blog-inner">
                            <div class="blog-meta d-flex gap-4">
                                <span><a href="#"><i class="fa-regular fa-user"></i>Adam
                                        Smith</a></span>
                                <span><a href="#"><i class="fa-regular fa-calendar"></i>07
                                        Nov,2025</a></span>
                            </div>
                            <h3 class="display-6"><a href="about-us.html">
                                    AI and Data Analytics in the Future of Dry Bulk Shipping
                                </a></h3>
                            <div class="blog-footer border-top">
                                <a href="about-us.html" class="link-btn">Learn more <i
                                        class="fa-solid fa-circle-arrow-right"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <?php echo $__env->make('include.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\IB_Port\resources\views/index.blade.php ENDPATH**/ ?>