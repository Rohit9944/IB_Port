<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta username="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta username="description"
        content="IBPortDash is a modern Transport & Logistics HTML template for shipping, freight, trucking, courier and supply-chain businesses. Clean, responsive design for logistics companies, warehousing, delivery services and transport operators.">
    <meta username="keywords"
        content="transport, logistics, shipping, freight, courier, supply chain, trucking, delivery, warehouse, cargo, transport company, responsive template">
    <meta username="author" content="theme-village">

    <title>IBPortDash</title>
    <link rel="apple-touch-icon" href="assets/images/logo.svg">
    <link rel="shortcut icon" href="assets/images/logo.svg">

    <link rel="stylesheet" href="assets/css/global.css">
</head>

<body>

    <!-- Register Form Start -->
    <section class="login-form contact-form py-2"
        style="background: url(assets/images/slider1.jpg)no-repeat center center / cover;">
        <div class="container my-1">
            <div class="row contact-form-wrap gap-4 gap-lg-0">
                <div class="col-12 col-lg-7 order-lg-2">
                    <div class="contact-form d-flex justify-content-end">
                        <div class="form-inner round">

                            <h2 class="fw-bold fs-1 text-center mt-1 pb-4"> Create your Account </h2>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row">

                                    <!-- first name -->
                                    <div class="form-group col-lg-6">
                                        <input type="text" id="first_name" name="first_name" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}" placeholder="First name" required="">
                                        @error('first_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <i class="fa fa-user-circle"></i>
                                    </div>

                                    <!-- last name -->
                                    <div class="form-group col-lg-6">
                                        <input type="text" id="last_name" name="last_name" class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}" placeholder="Last name" required="">
                                        @error('last_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <i class="fa fa-user-circle"></i>
                                    </div>

                                    <!-- email -->
                                    <div class="form-group col-lg-12">
                                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email" required="">
                                        @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <!-- Company Name -->
                                    <div class="form-group col-lg-12">
                                        <input type="text" name="company_name"
                                            class="form-control @error('company_name') is-invalid @enderror"
                                            value="{{ old('company_name') }}"
                                            placeholder="Company Name" required>
                                        @error('company_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <i class="fa fa-building"></i>
                                    </div>

                                    <!-- Company Type -->
                                    <div class="form-group col-lg-6">
                                        <select name="company_type"
                                            class="round m-1 form-control @error('company_type') is-invalid @enderror" required>
                                            <option value="">Select Role</option>
                                            <option value="cargo_owner">Cargo Owner</option>
                                            <option value="ship_owner">Ship Owner</option>
                                            <option value="broker">Broker</option>
                                        </select>
                                        @error('company_type')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Country -->
                                    <div class="form-group col-lg-6">
                                        <input type="text" name="country"
                                            class="m-1 p-3 form-control @error('country') is-invalid @enderror"
                                            value="{{ old('country') }}"
                                            placeholder="Country" required>
                                        @error('country')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <i class="fa fa-globe"></i>
                                    </div>

                                    <!-- Password -->
                                    <div class="form-group col-lg-12 position-relative">
                                        <input type="password" id="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Password" required>

                                        <i class="fa fa-eye-slash toggle-password"
                                            toggle="#password"
                                            style="position:absolute; right:26px; top:50%; transform:translateY(-50%); cursor:pointer;"></i>

                                        @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="form-group col-lg-12 position-relative">
                                        <input type="password" id="password_confirmation" name="password_confirmation"
                                            class="form-control"
                                            placeholder="Confirm Password" required>

                                        <i class="fa fa-eye-slash toggle-password"
                                            toggle="#password_confirmation"
                                            style="position:absolute; right:26px; top:50%; transform:translateY(-50%); cursor:pointer;"></i>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="col-12 mt-3">
                                        <button type="submit"
                                            class="round signup text-info fs-6 fw-semibold w-100">
                                            Sign Up <i class="fa fa-arrow-right"></i>
                                        </button>
                                    </div>

                                    <div class="login-bottom mt-3 text-center">
                                        <label class="text-muted text-dark fw-semibold fs-6"><i
                                                class="fa fa-user me-2 fs-6"></i>
                                            Already have an account?
                                            <a href="{{ route('login') }}" class="text-primary fw-semibold">Log In</a>
                                        </label>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg py-5">
                    <div class="feat-wrap mx-auto mx-lg-0 position-relative z-2">
                        <h1 class="text-info fs-1 fw-semibold text-center text-lg-start mb-4">Features</h1>

                        <ul class="feature-list check gap-3 d-flex flex-column mx-auto mx-lg-0">
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
    <!-- Register Form End -->


    <!-- Scroll Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" height="100%" viewBox="-1 -1 102 102" width="100%">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" fill="none" stroke="black" stroke-width="2">
            </path>
        </svg>
    </div>


    <!--Javascript ========================================================-->
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