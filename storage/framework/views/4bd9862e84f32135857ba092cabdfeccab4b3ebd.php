<?php $__env->startSection('content'); ?>

<div class="section">
        <div class="col s12 m6">
          <div class="card  darken-1">
            <div class="card-content">
              <span class="card-title  center">Your Profile</span>

              <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <a href="/profile/show" class="btn-small blue-grey waves-effect waves-light"><span>Back</span>
                        <i class="material-icons left">arrow_back_ios</i></a>

                    <h3 style="font-weight: lighter; font-size: 50px;">Edit Profile</h3>

                    <form action="<?php echo e(route('users.update', $user->id)); ?>" method="POST" class="container section">
                        <?php echo method_field('PUT'); ?>
                     <?php echo csrf_field(); ?>

                        <div class="input-field">
                               <input type="text" id="name" name="name" value="<?php echo e($user->name); ?>">
                               <label for="name">Name</label>
                        </div>
                        <div class="input-field">
                               <input type="email" id="email" name="email" value="<?php echo e($user->email); ?>">
                               <label for="email">Email</label>
                        </div>
                        <div class="input-field">
                               <input type="tel" id="phone" name="phone" value="<?php echo e($user->phone); ?>">
                               <label for="phone">Phone Number</label>
                        </div>

                         <div class="section">
                                <button type="submit" class="btn purple darken-2 waves-effect waves-light">
                                        <span>Edit</span>
                                        <i class="material-icons left">done</i>
                                </button>
                         </div>

                    </form>


            </div>
        </div>

          </div>
        </div>
      </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nohandicap\resources\views/profile/edit.blade.php ENDPATH**/ ?>