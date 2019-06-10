<?php $__env->startSection('content'); ?>

    <div class="section">
        <a href="/reports" class="btn grey darken-3">
            <span>Back</span>
            <i class="material-icons left">arrow_back_ios</i>
        </a>
    </div>
    <div class="row ">
        <div class="col l8">
            <h5 class="infostyle">Report Reason</h5>
            <p><?php echo e($report->reason); ?></p>
        </div>
        <div class="col l7">
            <h5 class="infostyle">Info.</h5>
            <p><?php echo e($report->info); ?></p>
        </div>
        <div class="col l6">
            <h5 class="infostyle">Product Reported</h5>

            <div class="card horizontal">
              <div class="card-image">
                <img src="/storage/cover_images/<?php echo e($report->product->cover_image); ?>" style="width: 250px;">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <p><span style="font-weight: 500; font-size: 20px">Title: </span><br><?php echo e($report->product->name); ?></p>
                  <p><span style="font-weight: 500; font-size: 20px">Description: </span><br><?php echo e($report->product->description); ?></p>
                  <p><span style="font-weight: 500; font-size: 20px">Category: </span><br><?php echo e($report->product->category); ?></p>
                  <p><span style="font-weight: 500; font-size: 20px">Condition: </span><br><?php echo e($report->product->condition); ?></p>
                </div>

                <div class="card-action">
                  <a target="_blank" href="/products/<?php echo e($report->product->id); ?>" class="green-text">View Product</a>
                </div>
              </div>
            </div>
        </div>
    </div>


    <div class="section">
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nohandicap\resources\views/reports/show.blade.php ENDPATH**/ ?>