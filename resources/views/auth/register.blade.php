@include('include.header')

<!-- Register Form Start -->
<section class="contact-form py-5">
    <div class="container mt-5 pt-5">
        <div class="row contact-form-wrap">
            <div class="col-12">
                <div class="contact-form shadow round"
                    style="background: url(/assets/images/slider1.jpg)no-repeat center center / cover;">
                    <div class="form-inner round">

                        <h2 class="fw-bold text-info text-center mt-1 pb-5"> Create your Account</h2>

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
                                        class="form-control @error('company_type') is-invalid @enderror" required>
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
                                        class="form-control @error('country') is-invalid @enderror"
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
                                        style="position:absolute; right:15px; top:50%; transform:translateY(-50%); cursor:pointer;"></i>

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
                                        style="position:absolute; right:15px; top:50%; transform:translateY(-50%); cursor:pointer;"></i>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12 mt-5">
                                    <button type="submit"
                                        class="round signup bg-primary text-info fs-6 fw-semibold w-100">
                                        Sign Up <i class="fa fa-arrow-right"></i>
                                    </button>
                                </div>

                                <div class="login-bottom mt-3 text-center">
                                    <label class="text-muted text-info fw-light fs-6"><i
                                            class="fa fa-user me-2 fs-6"></i>
                                        Already have an account?
                                        <a href="{{ route('login') }}" class="text-secondary fw-semibold">Log In</a>
                                    </label>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Register Form End -->

@include('include.footer')