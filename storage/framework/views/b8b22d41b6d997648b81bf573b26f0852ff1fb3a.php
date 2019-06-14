<?php $__env->startSection('content'); ?>

<div class="container section center formwidth ">

        <div class="">
           <h5>REGISTER</h5>


        </div>

    <div class=" ">
        <div class="col" id="register">
            <form method="POST" action="<?php echo e(route('register')); ?>">
                    <?php echo csrf_field(); ?>

                <div class="input-field">
                        <i class="material-icons prefix">person</i>

                    <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
                    <label for="name"><?php echo e(__('Name')); ?></label>

                    <?php if($errors->has('name')): ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($errors->first('name')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="input-field">
                        <i class="material-icons prefix">email</i>

                    <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>
                    <label for="email"><?php echo e(__('E-Mail')); ?></label>

                    <?php if($errors->has('email')): ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($errors->first('email')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="input-field">
                    <i class="material-icons prefix">phone</i>

                    <input id="phone" type="tel" class="form-control<?php echo e($errors->has('phone') ? ' is-invalid' : ''); ?>" name="phone" value="<?php echo e(old('phone')); ?>" required >
                    <label for="phone"><?php echo e(__('Phone Number')); ?></label>

                    <?php if($errors->has('phone')): ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($errors->first('phone')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="input-field">
                        <i class="material-icons prefix">lock_outline</i>

                    <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?> validate" name="password" required>
                    <label for="password"><?php echo e(__('Password')); ?></label>

                    <?php if($errors->has('password')): ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($errors->first('password')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="input-field">
                        <i class="material-icons prefix">lock_outline</i>

                    <input id="password-confirm" type="password" class="form-control validate" name="password_confirmation" required>
                    <label for="password-confirm"><?php echo e(__('Confirm Password')); ?></label>
                </div>

                <div class="input-field center">
                    <button class="btn green" type="submit"><?php echo e(__('Register')); ?></button>
                </div>

            </form>
        </div>
    </div>

</div>
<div class="card-panel" style="background-color: whitesmoke; width: ; margin-top:px;">
        <div class=" center panel" style="padding: 5px;">
            <span class="center infostyle" style="font-weight: bolder">By creating an account you will have access to My ads, where you can:</span>
            <ul>
                <li class=""><span style="font-weight: bolder">-</span> Place an Ad on the platform.</li>
                <li class=""><span style="font-weight: bolder">-</span> Edit or delete your Ads.</li>
                <li class=""><span style="font-weight: bolder">-</span> Check responses for your Ads.</li>
            </ul>
        </div>
    </div>

    <div class="" style="margin-top: 50px;"></div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nohandicap\resources\views/auth/register.blade.php ENDPATH**/ ?>