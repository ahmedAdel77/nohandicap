<?php $__env->startSection('content'); ?>
<div class="container section center formwidth ">

    <div class="">
       <h5>LOGIN</h5>

    </div>

    <div class="col">
        <div class="col " id="login">

            <form method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo csrf_field(); ?>
                <div class="input-field">
                        <i class="material-icons prefix">email</i>

                    <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
                    <label for="email"><?php echo e(__('E-Mail')); ?></label>

                    <?php if($errors->has('email')): ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($errors->first('email')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>


                <div class="input-field">
                    <i class="material-icons prefix">lock_outline</i>
                    <input type="password" id="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?> validate" name="password" required>
                    <label for="password"><?php echo e(__('Password')); ?></label>

                    <?php if($errors->has('password')): ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($errors->first('password')); ?></strong>
                        </span>
                    <?php endif; ?>

                </div>

                <p>
                    <label>
                        <input class="" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                        <span><?php echo e(__('Remember Me')); ?></span>
                    </label>
                </p>

                <div class="input-field center">
                    <button class="btn green"><?php echo e(__('Login')); ?></button>

                    <?php if(Route::has('password.request')): ?>
                        <a class="" href="<?php echo e(route('password.request')); ?>">
                            <p class=""><?php echo e(__('Forgot Your Password?')); ?></p>
                        </a>
                    <?php endif; ?>

                </div>
            </form>
        </div>
    </div>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nohandicap\resources\views/auth/login.blade.php ENDPATH**/ ?>