@include('include.header')

<section class="contact-form py-5">
    <div class="container mt-5 pt-5">
        <div class="row contact-form-wrap">
            <div class="col-12">
                <div class="contact-form shadow round"
                    style="background: url(/assets/images/slider1.jpg) no-repeat center center / cover;">
                    
                    <div class="form-inner round">

                        <h2 class="fw-bold text-info text-center mt-1 pb-5">
                            Create your Account
                        </h2>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row">

                                <!-- First Name -->
                                <div class="form-group col-lg-6">
                                    <input type="text" name="first_name"
                                        class="form-control @error('first_name') is-invalid @enderror"
                                        value="{{ old('first_name') }}"
                                        placeholder="First name" required>
                                    @error('first_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <i class="fa fa-user-circle"></i>
                                </div>

                                <!-- Last Name -->
                                <div class="form-group col-lg-6">
                                    <input type="text" name="last_name"
                                        class="form-control @error('last_name') is-invalid @enderror"
                                        value="{{ old('last_name') }}"
                                        placeholder="Last name" required>
                                    @error('last_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <i class="fa fa-user-circle"></i>
                                </div>

                                <!-- Email -->
                                <div class="form-group col-lg-12">
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}"
                                        placeholder="Email" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <i class="fa fa-envelope"></i>
                                </div>

                                <!-- Role -->
                                <div class="form-group col-lg-6">
                                    <select id="role" name="role"
                                        class="form-control @error('role') is-invalid @enderror" required>
                                        <option value="">Select Role</option>
                                        <option value="cargo_owner" {{ old('role')=='cargo_owner'?'selected':'' }}>Cargo Owner</option>
                                        <option value="ship_owner" {{ old('role')=='ship_owner'?'selected':'' }}>Ship Owner</option>
                                        <option value="broker" {{ old('role')=='broker'?'selected':'' }}>Broker</option>
                                    </select>
                                    @error('role')
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

                                <!-- Company Name (Dynamic) -->
                                <div id="company_name_field" class="form-group col-lg-12"
                                    style="{{ old('role') == 'cargo_owner' ? '' : 'display:none;' }}">

                                    <input type="text" id="company_name" name="company_name"
                                        class="form-control @error('company_name') is-invalid @enderror"
                                        value="{{ old('company_name') }}"
                                        placeholder="Company Name">

                                    @error('company_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <i class="fa fa-building"></i>
                                </div>

                                <!-- Password -->
                                <div class="form-group col-lg-12 position-relative">
                                    <input type="password" id="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        placeholder="Password" required>

                                    <i class="fa fa-eye-slash toggle-password"
                                        toggle="#password"></i>

                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Confirm Password -->
                                <div class="form-group col-lg-12 position-relative">
                                    <input type="password" id="password_confirmation"
                                        name="password_confirmation"
                                        class="form-control"
                                        placeholder="Confirm Password" required>

                                    <i class="fa fa-eye-slash toggle-password"
                                        toggle="#password_confirmation"></i>
                                </div>

                                <!-- Submit -->
                                <div class="col-12 mt-5">
                                    <button type="submit"
                                        class="round signup bg-primary text-info fw-semibold w-100">
                                        Sign Up <i class="fa fa-arrow-right"></i>
                                    </button>
                                </div>

                                <!-- Login Link -->
                                <div class="login-bottom mt-3 text-center">
                                    <label class="text-muted">
                                        Already have an account?
                                        <a href="{{ route('login') }}" class="text-secondary fw-semibold">
                                            Log In
                                        </a>
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

<!-- JS -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const role = document.getElementById('role');
    const companyField = document.getElementById('company_name_field');

    role.addEventListener('change', function () {
        if (this.value === 'cargo_owner') {
            companyField.style.display = 'block';
        } else {
            companyField.style.display = 'none';
        }
    });
});
</script>

@include('include.footer')