<?php $__env->startSection('content'); ?>

<div class="section">
        <div class="col s12 m6">
          <div class="card  darken-1">
            <div class="card-content">
              <span class="card-title  center">Dashboard</span>

              <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <a href="/products/create" class="btn purple lighten-1 btn-small"><span>Post An Ad</span>
                        <i class="material-icons left">add</i></a>

              <h6 style="font-weight: lighter; font-size: 40px;">Your posted Ads</h6>

              <?php if(count($products) > 0): ?>

              <table class="centered stripped highlight">
                    <thead>
                      <tr>
                          <th>Product Name</th>
                          <th></th>
                          <th></th>
                      </tr>
                    </thead>

                    <tbody>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                      <tr>
                        <td><a href="/products/<?php echo e($product->id); ?>"><?php echo e($product->name); ?></a>

                        </td>
                        <td>
                                <a href="/products/<?php echo e($product->id); ?>/edit" class="btn  blue ">
                                    <span>Edit</span>
                                    <i class="material-icons left">edit</i>
                                    </a>
                        </td>
                        <td>

                            <form action="<?php echo e(url("products/".$product->id)); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo method_field("DELETE"); ?>
                                <?php echo csrf_field(); ?>

                                <a class="waves-effect waves-red red darken-2 btn modal-trigger" href="#modal1">
                                        <span>Delete</span>
                                        <i class="material-icons left">delete</i>
                                    </a>

                                    <!-- Modal Structure -->
                                    <div id="modal1" class="modal">
                                      <div class="modal-content">
                                        <h5>Are you sure you want to delete this item ? </h5>
                                      </div>
                                      <div class="modal-footer red darken-1">
                                        <button type="submit" class="modal-close btn white black-text darken-2 waves-effect">
                                                <span>Yes, delete it</span>
                                        </button>
                                      </div>
                                    </div>
                            </form>

                        </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                  </table>

                <?php else: ?>
                        <p class="section">You have no posted products.</p>
                <?php endif; ?>

            </div>
        </div>

          </div>
        </div>
      </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nohandicap\resources\views/dashboard.blade.php ENDPATH**/ ?>