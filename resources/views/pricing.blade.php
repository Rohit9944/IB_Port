@include('include.header')

    <!-- plans section start -->
    <section class="plan-sec">
        <div class="container">
            <div class="sec-intro mx-auto text-center mb-5">
                <span class="sub-title2 fadeInUp">Our Subscription Plans</span>
                <h2 class="sec-title">Flexible Subscription Plans for IBPortDash</h2>
            </div>

            <div
                class="plan-opt d-flex flex-column flex-md-row justify-content-center align-items-center gap-4 my-4 mx-auto">
                <div class="log-type text-center">
                    <a href="{{ route('login') }}">Ship Owner</a>
                </div>
                <div class="log-type text-center">
                    <a href="{{ route('login') }}">Cargo Owner</a>
                </div>
                <div class="log-type text-center">
                    <a href="{{ route('login') }}">Fright
                        Forwarder</a>
                </div>
            </div>

            <div class="row justify-content-center align-items-center gap-4 gap-lg-0 gap-xl-5 g-4 mt-0">

                <div class="col-12 col-lg-4 col-xl-3">
                    <div class="plan-card rounded-4 p-4 position-relative mt-lg-5 mx-auto mx-lg-0">
                        <h4 class="fw-bold text-blue mb-4">Base</h4>

                        <div class="plan-price d-flex align-items-center gap-1 mb-4">
                            <h2 class="fs-3 fw-bold amount mb-0 text-blue">CAD 2000</h2>
                            <span class="year-span">/year</span>
                        </div>

                        <ul class="check">
                            <li>Platform Negotiations</li>
                            <li>One RFQ In A Year</li>
                            <li>Some Real-Time Data</li>
                        </ul>
                        <div class="plan-foot">
                            <div class="btn-wrapper position-absolute">
                                <div class="text-center btn-plan">
                                    <a href="#">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 col-xl-3">
                    <div class="pro-card plan-card rounded-4 p-4 position-relative mx-auto mx-lg-0">
                        <h4 class="fw-bold text-white mb-4">Pro</h4>

                        <div class="plan-price d-flex align-items-center gap-1 mb-4">
                            <h2 class="fs-3 fw-bold amount mb-0 text-white">CAD 3000</h2>
                            <span class="year-span text-white-50">/year</span>
                        </div>

                        <ul class="check">
                            <li class="text-white">Advanced Real Time Data</li>
                            <li class="text-white">Market Research And Reports</li>
                            <li class="text-white">Four RFQ In A Year</li>
                            <li class="text-white">Commodity Research And Reports</li>
                        </ul>
                        <div class="plan-foot">
                            <div class="btn-wrapper position-absolute">
                                <div class="text-center btn-plan">
                                    <a href="#">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 col-xl-3">
                    <div class="plan-card rounded-4 p-4 position-relative mt-lg-5 mx-auto mx-lg-0">
                        <h4 class="fw-bold text-blue mb-4">Enterprise</h4>

                        <div class="plan-price d-flex align-items-center gap-1 mb-4">
                            <h2 class="fs-3 fw-bold amount mb-0 text-blue">Customize Plan</h2>
                        </div>

                        <ul class="check">
                            <li>Advanced Real Time Data</li>
                            <li>Market Research And Reports</li>
                            <li>Multiple RFQ In A Year</li>
                            <li>Commodity Research And Reports</li>
                        </ul>
                        <div class="plan-foot">
                            <div class="btn-wrapper position-absolute">

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

    @include('include.footer')