<?php $__env->startSection('extra'); ?>

<?php echo $__env->make('inc.filter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h3 style="font-weight: lighter; font-size: 50px;">Latest Ads</h3>

    <div class="row section">

    <?php if(isset($products)): ?>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="col s12 m6 l4" style="">
              <a href="/products/<?php echo e($product->id); ?>">
                <div class="card hoverable" style="">
                  <div class="card-image" class="">
                    <img src="/storage/cover_images/<?php echo e($product->cover_image); ?>" class="">
                  </div>
                  <div class="card-content" style="overflow: hidden;">
                    <h1 class="card-title truncate"><a href="/products/<?php echo e($product->id); ?>"><?php echo e($product->name); ?></a></h1>
                    <p class="truncate"><?php echo $product->description; ?></p>
                  </div>
                  <div class="card-content">
                    <p  class="price truncate"><?php echo e($product->price); ?> EGP</p>
                  </div>
                </div>
              </a>
            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($products->links()); ?>

    <?php else: ?>
        <p>No products found! .. We are sorry.</p>
    <?php endif; ?>
</div>

<?php echo $__env->make('inc.scrollup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nohandicap\resources\views/products/index.blade.php ENDPATH**/ ?>