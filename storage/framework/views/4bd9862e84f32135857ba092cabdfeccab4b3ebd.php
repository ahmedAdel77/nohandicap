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


                    <h3>Edit Profile</h3>

                    <form action="" method="POST" class="container section">
                        <?php echo method_field('PUT'); ?>
                     <?php echo csrf_field(); ?>

                        <div class="input-field">
                               <input type="text" id="name" name="name" value="<?php echo e($user->name); ?>">
                               <label for="name">Name</label>
                        </div>
                        <div class="input-field">
                               <input type="text" id="email" name="email" value="<?php echo e($user->email); ?>">
                               <label for="email">Email</label>
                        </div>

                         <div class="section">
                                <button type="submit" class="btn darken-2 ">
                                        <span>Edit</span>
                                        <i class="material-icons left">edit</i>
                                </button>
                         </div>

                    </form>

                    <div class="section">
                    </div>

            </div>
        </div>

          </div>
        </div>
      </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nohandicap\resources\views/profile/edit.blade.php ENDPATH**/ ?>