<?php $__env->startSection('content'); ?>
    <h3>Create A Conditions</h3>

    <form action="<?php echo e(route('conditions.store')); ?>" method="POST" enctype="multipart/form-data" class="container section">

        <?php echo csrf_field(); ?>

        <div class="input-field">
               <input type="text" id="name" name="name">
               <label for="name">Condition Name</label>
        </div>

         <div class="section">
                <button type="submit" class="btn darken-2 ">
                        <span>Create</span>
                        <i class="material-icons left">add</i>
                </button>
         </div>

    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nohandicap\resources\views/conditions/create.blade.php ENDPATH**/ ?>