<?php if($paginator->hasPages()): ?>


    <ul class="pagination center">


        


        <?php if($paginator->onFirstPage()): ?>


            <li class="disabled"><i class="material-icons">chevron_left</i></li>


        <?php else: ?>


            <li class="waves-effect"><a href="<?php echo e($paginator->previousPageUrl()); ?>"><i class="material-icons">chevron_left</i></a></li>


        <?php endif; ?>



        


        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


            


            <?php if(is_string($element)): ?>


                <li class="disabled"><?php echo e($element); ?></li>


            <?php endif; ?>



            


            <?php if(is_array($element)): ?>


                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                    <?php if($page == $paginator->currentPage()): ?>


                        <li class="active green">


                            <a><?php echo e($page); ?></a>


                        </li>


                    <?php else: ?>


                        <li class="waves-effect"><a class="page-link" href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>


                    <?php endif; ?>


                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            <?php endif; ?>


        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



        


        <?php if($paginator->hasMorePages()): ?>


            <li class="waves-effect"><a href="<?php echo e($paginator->nextPageUrl()); ?>"><i class="material-icons">chevron_right</i></a></li>


        <?php else: ?>


            <li class="disabled"><a href="<?php echo e($paginator->nextPageUrl()); ?>"><i class="material-icons">chevron_right</i></a></li>


        <?php endif; ?>


    </ul>




<?php endif; ?><?php /**PATH C:\xampp\htdocs\nohandicap\resources\views/vendor/pagination/materialize.blade.php ENDPATH**/ ?>