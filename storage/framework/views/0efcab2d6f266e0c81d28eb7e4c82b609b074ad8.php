<?php $__env->startSection('content'); ?>

<div class="section">
        <div class="col s12 m6">
          <div class="card  darken-1">
            <div class="card-content">
              <span class="card-title  center">Categories</span>


                    <a href="/categories/create" class="btn purple lighten-1 btn-small"><span>Add New Category</span>
                        <i class="material-icons left">add</i></a>


              <?php if(count($categories) > 0): ?>

              <table class="centered stripped highlight">
                    <thead>
                      <tr>
                          <th>Category Name</th>
                          <th></th>
                          <th></th>
                      </tr>
                    </thead>

                    <tbody>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                      <tr>
                        <td><a href="<?php echo e(route('categories.show', $category->id)); ?>">   <?php echo e($category->name); ?></a>

                        </td>
                        <td>
                                <a href="/categories/<?php echo e($category->id); ?>/edit" class="btn  blue ">
                                    <span>Edit</span>
                                    <i class="material-icons left">edit</i>
                                    </a>
                        </td>
                        <td>
                            <form action="<?php echo e(url("categories/".$category->id)); ?>" method="POST" enctype="multipart/form-data">
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
                        <p class="section">No Categories Listed.</p>
                <?php endif; ?>

            </div>
        </div>

          </div>
        </div>
      </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nohandicap\resources\views/categories/index.blade.php ENDPATH**/ ?>