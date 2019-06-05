<?php $__env->startSection('content'); ?>

    <div class="section">
        <a href="/categories" class="btn grey darken-3">
            <span>Back</span>
            <i class="material-icons left">arrow_back_ios</i>
        </a>
    </div>

    <div class="row ">
        <div class="col l6">
            <h5 class="infostyle">Category</h5>
            <p><?php echo e($category->name); ?></p>
        </div>
    </div>

    <div class="section">
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nohandicap\resources\views/categories/show.blade.php ENDPATH**/ ?>