<?php $__env->startSection('content'); ?>

<div class="section">
        <div class="col s12 m6">
          <div class="card  darken-1">
            <div class="card-content">
              <span class="card-title  center">Users</span>


              <?php if(count($users)): ?>

              <table class="centered stripped highlight">
                    <thead>
                      <tr>
                          <th>Name</th>
                          <th></th>
                          <th></th>
                      </tr>
                    </thead>

                    <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                      <tr>
                        <td><a href="">   <?php echo e($user->name); ?></a>

                        </td>
                        <td>
                                <a href="" class="btn  blue ">
                                    <span>Edit</span>
                                    <i class="material-icons left">edit</i>
                                    </a>
                        </td>
                        <td>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <?php echo method_field("DELETE"); ?>
                                <?php echo csrf_field(); ?>

                                <button type="submit" class="btn red darken-2">
                                        <span>Delete</span>
                                        <i class="material-icons left">delete</i>
                                </button>
                            </form>

                        </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                  </table>

                <?php else: ?>
                        <p class="section">No Users Listed.</p>
                <?php endif; ?>

            </div>
        </div>

          </div>
        </div>
      </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nohandicap\resources\views/admin/showUsers.blade.php ENDPATH**/ ?>