@include('include.header')

<!-- Login Form Start -->
<section class="account-sec contact-form py-5">
    <div class="container mt-5 pt-5">
        <div class="row contact-form-wrap">
            <div class="col-12">
                <div class="contact-form shadow round"
                    style="background: url(/assets/images/slider1.jpg)no-repeat center center / cover;">
                    <div class="form-inner round">

                        <div class="text-center mb-5">
                            <h2 class="sec-title text-info fw-bold mb-2">Login To Your Account</h2>
                            <p class="fs-6 text-info">Please log to access your account.</p>
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
                                        style="position:absolute; right:15px; top:50%; transform:translateY(-50%); cursor:pointer;"></i>

                                    @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- remember | forgot-password -->
                                <div class="d-flex justify-content-between mt-4 px-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label text-info ms-1" for="remember">
                                            Remember me
                                        </label>
                                    </div>
                                    <a href="{{ route('password.request') }}" class="text-danger fs-5 fw-bold">
                                        Forgot Password?
                                    </a>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12 mt-5">
                                    <button type="submit" class="round signup bg-primary text-info w-100">
                                        Login <i class="fa fa-arrow-right"></i>
                                    </button>
                                </div>

                                <div class="login-message text-center mt-3 mb-0">
                                    <p class="text-info fw-light"> Don't have an account ?
                                        <a class="text-secondary fw-semibold" href="{{ route('register') }}">
                                            Register Now
                                        </a>
                                    </p>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Login Form End -->

@include('include.footer')