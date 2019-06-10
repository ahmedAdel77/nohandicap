<?php $__env->startSection('content'); ?>

<div class="section">
        <div class="col s12 m6">
          <div class="card  darken-1">
            <div class="card-content">
              <span class="card-title  center">Conditions</span>


                    <a href="/conditions/create" class="btn purple lighten-1 btn-small"><span>Add New Condition</span>
                        <i class="material-icons left">add</i></a>


              <?php if(count($conditions) > 0): ?>

              <table class="centered stripped highlight">
                    <thead>
                      <tr>
                          <th>Condition Name</th>
                          <th></th>
                          <th></th>
                      </tr>
                    </thead>

                    <tbody>
                            <?php $__currentLoopData = $conditions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $condition): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                      <tr>
                        <td><a href="<?php echo e(route('conditions.show', $condition->id)); ?>">   <?php echo e($condition->name); ?></a>

                        </td>
                        <td>
                                <a href="<?php echo e(route('conditions.edit', $condition->id)); ?>" class="btn  blue ">
                                    <span>Edit</span>
                                    <i class="material-icons left">edit</i>
                                    </a>
                        </td>
                        <td>
                            <form action="<?php echo e(route('conditions.destroy', $condition->id)); ?>" method="POST" enctype="multipart/form-data">
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
                        <p class="section">No Conditions Listed.</p>
                <?php endif; ?>

            </div>
        </div>

          </div>
        </div>
      </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nohandicap\resources\views/conditions/index.blade.php ENDPATH**/ ?>