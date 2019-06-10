<?php $__env->startSection('content'); ?>

<div class="section">
    <a href="/conditions" class="btn grey darken-3">
        <span>Back</span>
        <i class="material-icons left">arrow_back_ios</i>
    </a>
</div>

    <h3>Edit Condition</h3>

    <form action="<?php echo e(route('conditions.update', $condition->id)); ?>" method="POST" class="container section">
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>

        <div class="input-field">
               <input type="text" id="name" name="name" value="<?php echo e($condition->name); ?>">
               <label for="name">Condition Name</label>
        </div>

         <div class="section">
                <button type="submit" class="btn darken-2 ">
                        <span>Edit</span>
                        <i class="material-icons left">edit</i>
                </button>
         </div>

    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nohandicap\resources\views/conditions/edit.blade.php ENDPATH**/ ?>