<?php $__env->startSection('content'); ?>
    <h3>Place an Ad</h3>

    <form action="<?php echo e(route('products.store')); ?>" method="POST" enctype="multipart/form-data" class="container">

        <?php echo csrf_field(); ?>

        <div class="input-field">
               <input type="text" id="name" name="name">
               <label for="name">Title</label>
        </div>

        <div class="input-field">
            <select name="category" id="">
                <option value="" disabled selected>Choose your category</option>
                <option value="Mobility">Mobility</option>
                <option value="Hearing Impairment (HI)">Hearing Impairment (HI)</option>
                <option value="Visual Impairment (VI)">Visual Impairment (VI)</option>
            </select>
            <label for="">Category</label>
        </div>

        <div class="input-field">
            <select name="condition" id="">
                <option value="" disabled selected>Choose product condition</option>
                <option value="New">New</option>
                <option value="Used">Used</option>
            </select>
            <label for="">Condition</label>
        </div>

        <div class="input-field">
                <textarea name="description" id="description" class="materialize-textarea" data-length="100"></textarea>
                <label for="description">Description</label>
        </div>

        <div class="file-field input-field">
            <div class="btn white black-text">
                <span>Cover Image</span>
                <i class="material-icons left">insert_photo</i>
                <input type="file" name="cover_image">
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Upload Cover Image" name="cover_image">
            </div>
        </div>

        <div class="file-field input-field increment">
            <div class="btn white black-text">
                <span>Product Photos</span>
                <i class="material-icons left">photo_library</i>
                <input type="file" name="product_image[]" multiple>
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Upload 1 or more Product Photos" name="product_image[]">
            </div>
        </div>

        <div class="input-field">
                <input type="number" id="price" name="price">
                <label for="price">Price</label>
         </div>

         <div class="section">
                <button type="submit" class="btn darken-2 ">
                        <span>Post</span>
                        <i class="material-icons left">add</i>
                </button>
         </div>

    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nohandicap\resources\views/products/create.blade.php ENDPATH**/ ?>