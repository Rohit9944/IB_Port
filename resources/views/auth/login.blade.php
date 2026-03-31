<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="IBPortDash is a modern Transport & Logistics HTML template for shipping, freight, trucking, courier and supply-chain businesses. Clean, responsive design for logistics companies, warehousing, delivery services and transport operators.">
    <meta name="keywords"
        content="transport, logistics, shipping, freight, courier, supply chain, trucking, delivery, warehouse, cargo, transport company, responsive template">
    <meta name="author" content="theme-village">

    <title>IBPortDash</title>
    <link rel="apple-touch-icon" href="assets/images/logo.svg">
    <link rel="shortcut icon" href="assets/images/logo.svg">

    <link rel="stylesheet" href="assets/css/global.css">
</head>

<body>

    <!-- Login Form Start -->
    <section class="login-form account-sec contact-form py-5"
        style="background: url(assets/images/slider1.jpg)no-repeat center center / cover;">
        <div class="container my-5">
            <div class="row contact-form-wrap gap-4 gap-lg-0">

                <div class="col-12 col-lg-7 order-lg-2">
                    <div class="contact-form d-flex justify-content-end">
                        <div class="form-inner round">

                            <div class="text-center mb-4">
                                <h2 class="sec-title fs-1 fw-bold mb-2">Login To Your Account</h2>
                                <p class="fs-6 text-dark">Please log to access your account.</p>
                            </div>
                            @if(session('success'))
                            <div class="alert alert-success text-center">
                                {{ session('success') }}
                            </div>
                            @endif

                            @if($errors->any())
                            <div class="alert alert-danger text-center">
                                {{ $errors->first() }}
                            </div>
                            @endif

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row">
                                    <!-- email -->
                                    <div class="form-group col-lg-12">
                                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email" required="">
                                        @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <i class="fa fa-envelope"></i>
                                    </div>

                                    <div class="form-group col-lg-12 position-relative">
                                        <input type="password" id="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Password" required>

                                        <i class="fa fa-eye-slash toggle-password"
                                            toggle="#password"
                                            style="position:absolute; right:27px; top:50%; transform:translateY(-50%); cursor:pointer;"></i>

                                        @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- remember | forgot-password -->
                                    <div class="d-flex justify-content-between mt-4 px-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label ms-1" for="remember">
                                                Remember me
                                            </label>
                                        </div>
                                        <a href="{{ route('password.request') }}" class="text-danger fs-5 fw-bold">
                                            Forgot Password?
                                        </a>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="col-12 mt-5">
                                        <button type="submit" class="round signup text-info w-100">
                                            Login <i class="fa fa-arrow-right"></i>
                                        </button>
                                    </div>

                                    <div class="login-message text-center mt-3 mb-0">
                                        <p class="text-dark"> Don't have an account ?
                                            <a class="text-primary fw-semibold" href="{{ route('register') }}">
                                                Register Now
                                            </a>
                                        </p>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg py-3">
                    <div class="feat-wrap mx-auto mx-lg-0 position-relative z-2">
                        <h1 class="text-info fs-1 fw-semibold text-center text-lg-start mb-4">Features</h1>

                        <ul class="feature-list check gap-3 d-flex flex-column mx-auto mx-lg-0 pt-2">
                            <li class="text-info fs-6 fw-light">
                                Comprehensive chartering solutions
                            </li>
                            <li class="text-info fs-6 fw-light">
                                Real time data flow
                            </li>
                            <li class="text-info fs-6 fw-light">
                                freight analytics
                            </li>
                            <li class="text-info fs-6 fw-light">
                                smart automated emails
                            </li>
                            <li class="text-info fs-6 fw-light">
                                instant cargo to ship matching
                            </li>
                            <li class="text-info fs-6 fw-light">
                                contract management
                            </li>
                            <li class="text-info fs-6 fw-light">
                                smart routing/ ship locator
                            </li>
                            <li class="text-info fs-6 fw-light">
                                on platform negotiations
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Form End -->

    <!-- Scroll Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" height="100%" viewBox="-1 -1 102 102" width="100%">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" fill="none" stroke="black" stroke-width="2">
            </path>
        </svg>
    </div>


    <!--Javascript
        ========================================================-->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/lenis.min.js"></script>
    <script src="assets/js/jarallax.min.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/SplitText.js"></script>
    <script src="assets/js/fancybox.umd.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/purecounter.js"></script>
    <script src="assets/js/jquery.marquee.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.timepicker.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>