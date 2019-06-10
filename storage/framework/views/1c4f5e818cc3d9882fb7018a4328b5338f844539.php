<?php $__env->startPush('js'); ?>
    <script>

        function readUrl(input, index) {

            if (input.files && input.files[0]) {
              var reader = new FileReader();

              reader.onload = function(e) {
                $('#myimage'+ index).attr('src', e.target.result);
              }

              reader.readAsDataURL(input.files[0]);
            }
        }

        $(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

            if (input.files) {
                var filesAmount = input.files.length;
                $(placeToInsertImagePreview).text("");
                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img class="col l2">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#gallery-photo-add').on('change', function() {
            imagesPreview(this, 'div.gallery');
        });
    });

    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <h3>Edit Ad</h3>

    <form action="<?php echo e(route('products.update', $product->id)); ?>" method="POST" class="container section" enctype="multipart/form-data">
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>

        <div class="input-field">
                <input type="text" id="name" name="name" value="<?php echo e($product->name); ?>">
                <label for="name">Product Name</label>
        </div>

        <div class="input-field">
            <select name="category" id="">
                <?php if($product->category == "Mobility"): ?>
                    <option value="" disabled>Choose your category</option>
                    <option value="Mobility" selected>Mobility</option>
                    <option value="Hearing Impairment (HI)">Hearing Impairment (HI)</option>
                    <option value="Visual Impairment (VI)">Visual Impairment (VI)</option>
                <?php elseif($product->category == "Hearing Impairment (HI)"): ?>
                    <option value="" disabled>Choose your category</option>
                    <option value="Mobility">Mobility</option>
                    <option value="Hearing Impairment (HI)" selected>Hearing Impairment (HI)</option>
                    <option value="Visual Impairment (VI)">Visual Impairment (VI)</option>
                <?php elseif($product->category == "Visual Impairment (VI)"): ?>
                    <option value="" disabled>Choose your category</option>
                    <option value="Mobility">Mobility</option>
                    <option value="Hearing Impairment (HI)">Hearing Impairment (HI)</option>
                    <option value="Visual Impairment (VI)" selected>Visual Impairment (VI)</option>
                <?php else: ?>
                    <option value="" disabled selected>Choose your category</option>
                    <option value="Mobility">Mobility</option>
                    <option value="Hearing Impairment (HI)">Hearing Impairment (HI)</option>
                    <option value="Visual Impairment (VI)">Visual Impairment (VI)</option>
                <?php endif; ?>

            </select>
            <label for="">Category</label>
        </div>

        <div class="input-field">
            <select name="condition" id="">

                    <?php if($product->condition == "New"): ?>
                        <option value="" disabled>Choose product condition</option>
                        <option value="New" selected>New</option>
                        <option value="Used">Used</option>

                    <?php elseif($product->condition == "Used"): ?>
                        <option value="" disabled>Choose product condition</option>
                        <option value="New">New</option>
                        <option value="Used" selected>Used</option>
                    <?php else: ?>
                        <option value="" disabled selected>Choose product condition</option>
                        <option value="New">New</option>
                        <option value="Used">Used</option>
                    <?php endif; ?>

            </select>
            <label for="">Condition</label>
        </div>

         <div class="input-field">
                <textarea name="description" id="description" class="materialize-textarea" data-length="100"><?php echo e($product->description); ?></textarea>
                <label for="description">Description</label>
        </div>

        <div class="row">
            <div class="col l10">
                    <div class="file-field input-field ">
                            <div class="btn orange white-text">
                                <span>Cover Image</span>
                                <i class="material-icons left">insert_photo</i>
                                <input type="file" name="cover_image" onchange="readUrl(this, 0)" >
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload Cover Image"  value="<?php echo e($product->cover_image); ?>">
                            </div>
                        </div>
            </div>
            <div class="col l2 ">
                <img src="/storage/cover_images/<?php echo e($product->cover_image); ?>" id="myimage0" style="width: 100px;">
            </div>
        </div>

        


        <div class="file-field input-field increment">
                <div class="btn orange white-text">
                    <span>Product Photos</span>
                    <i class="material-icons left">photo_library</i>
                    <input id="gallery-photo-add" type="file" name="product_image[]" multiple >
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload 1 or more Product Photos" name="product_image[]" value="<?php echo e($product->product_image); ?>">
                </div>
            </div>

            <div class="gallery row">
                <?php $__currentLoopData = json_decode($product->product_image, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <img src="/storage/product_images/<?php echo e($image); ?>" class="col l2" >
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>


        <div class="input-field">
                <input type="number" id="price" name="price" value="<?php echo e($product->price); ?>">
                <label for="price">Price</label>
        </div>

         <div class="section">
                <button type="submit" class="btn purple darken-2 waves-effect waves-light">
                        <span>Save</span>
                        <i class="material-icons left">done</i>
                </button>
         </div>

    </form>

<?php $__env->stopSection(); ?>

<script type="text/javascript">

    $(document).ready(function() {

      $(".btn-success").click(function(){
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){
          $(this).parents(".control-group").remove();
      });

    });

</script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nohandicap\resources\views/products/edit.blade.php ENDPATH**/ ?>