<?php echo $__env->make('include.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

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
                        <?php if(session('success')): ?>
                        <div class="alert alert-success text-center">
                            <?php echo e(session('success')); ?>

                        </div>
                        <?php endif; ?>

                        <?php if($errors->any()): ?>
                        <div class="alert alert-danger text-center">
                            <?php echo e($errors->first()); ?>

                        </div>
                        <?php endif; ?>

                        <form method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <!-- email -->
                                <div class="form-group col-lg-12">
                                    <input type="email" id="email" name="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('email')); ?>" placeholder="Email" required="">
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    <i class="fa fa-envelope"></i>
                                </div>

                                <div class="form-group col-lg-12 position-relative">
                                    <input type="password" id="password" name="password"
                                        class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        placeholder="Password" required>

                                    <i class="fa fa-eye-slash toggle-password"
                                        toggle="#password"
                                        style="position:absolute; right:15px; top:50%; transform:translateY(-50%); cursor:pointer;"></i>

                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <!-- remember | forgot-password -->
                                <div class="d-flex justify-content-between mt-4 px-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                        <label class="form-check-label text-info ms-1" for="remember">
                                            Remember me
                                        </label>
                                    </div>
                                    <a href="<?php echo e(route('password.request')); ?>" class="text-danger fs-5 fw-bold">
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
                                        <a class="text-secondary fw-semibold" href="<?php echo e(route('register')); ?>">
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

<?php echo $__env->make('include.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\IB_Port\resources\views/auth/login.blade.php ENDPATH**/ ?>