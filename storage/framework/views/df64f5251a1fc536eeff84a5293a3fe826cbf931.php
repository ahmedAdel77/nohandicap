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

                    <a href="/profile/<?php echo e($user->id); ?>/edit" class="btn  lighten-1 btn-small"><span>Edit</span>
                        <i class="material-icons left">edit</i></a>
                    <div class="container ">
                        <div class="row section">
                            <div class="col l12">
                                <h5 class="infostyle">Name</h5>
                                <p><?php echo e($user->name); ?></p>
                            </div>

                            <div class="col l12">
                                <h5 class="infostyle">Email</h5>
                                <p><?php echo e($user->email); ?></p>
                            </div>

                        </div>
                    </div>

                    <div class="section">
                    </div>

            </div>
        </div>

          </div>
        </div>
      </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nohandicap\resources\views/profile/show.blade.php ENDPATH**/ ?>