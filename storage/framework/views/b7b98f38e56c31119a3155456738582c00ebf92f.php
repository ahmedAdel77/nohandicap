<?php $__env->startSection('content'); ?>

    <div class="section">
        <a href="/products" class="btn blue-grey waves-effect waves-light">
            <span>Back</span>
            <i class="material-icons left">arrow_back_ios</i>
        </a>
    </div>

    <div class="">

            <div class="row">
                <div class="col s6 l6">
                    <h3 class="" style=""><?php echo e($product->name); ?></h3>
                </div>
                <div class="col s6 l6 right-align">
                    <h5 class="price" style="font-weight: 500; font-size: 30px;"><?php echo e($product->price); ?> EGP</h5>

                </div>
                <div class="col s6 l6">
                        

                    <p class="right-align">Posted <?php echo e($product->created_at->diffForHumans()); ?></p>

                </div>
            </div>

            <div class="slider ">
                    <ul class="slides z-depth-1">
                            <li>
                                <img src="/storage/cover_images/<?php echo e($product->cover_image); ?>" style="width:100%" class="materialboxed">
                            </li>
                        <?php $__currentLoopData = json_decode($product->product_image, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <img src="/storage/product_images/<?php echo e($image); ?>" style="width:100%; height: 100%; " class="materialboxed">
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>

            <div class="row">
                <div class="col s6 l6">
                    <h5 class="infostyle">Category</h5>
                    <p><?php echo e($product->category); ?></p>
                </div>
                <div class="col s6 l6">
                    <h5 class="infostyle">Condition</h5>
                    <p><?php echo e($product->condition); ?></p>
                </div>
                <div class="col s6 l6">
                    <h5 class="infostyle">Description</h5>
                    <?php echo nl2br(str_replace(" ", " &nbsp;", $product->description)); ?>

                    
                    
                </div>
            </div>

            <div class="row">
                <div class="col s2 l2 ">
                        <p>Views: <span  style="font-weight: 500; border-right: 1px solid lightgray; padding-right: 10px"><?php echo e(views($product)->count()); ?></span></p>
                </div>
            </div>

            <?php if(!Auth::guest()): ?>
                <?php if(Auth::user()->id == $product->user_id || Auth::user()->isAdmin == 1): ?>

                <div class="container" style="margin-bottom: 100px;">

                        <form action="<?php echo e(url("products/".$product->id)); ?>" method="POST">

                            <a type="" class="btn blue darken-2 left" href="/products/<?php echo e($product->id); ?>/edit" >
                                <span>Edit</span>
                                <i class="material-icons left">edit</i>
                            </a>

                            <?php echo method_field("DELETE"); ?>
                            <?php echo csrf_field(); ?>

                            <a class="waves-effect waves-red red darken-2 btn modal-trigger right" href="#modal1">
                                    <span>Delete</span>
                                    <i class="material-icons left">delete</i>
                                </a>

                                <!-- Modal Structure -->
                                <div id="modal1" class="modal">
                                  <div class="modal-content center">
                                    <h5>Are you sure you want to delete this item ? </h5>
                                  </div>
                                  <div class="modal-footer red darken-1">
                                    <button type="submit" class="modal-close btn white black-text darken-2 waves-effect">
                                            <span>Yes, delete it</span>
                                    </button>
                                  </div>
                                </div>

                        </form>

                </div>

                <?php endif; ?>

            <?php endif; ?>

    <?php if(Auth::guest() || (Auth::user()->id != $product->user_id && Auth::user()->isAdmin == 0)): ?>

        <div class="container" style="margin-bottom: 60px;">
            <ul class="collapsible">
                <li>
                  <div class="collapsible-header"><i class="material-icons red-text text-darken-3">report_problem</i>Report</div>
                  <div class="collapsible-body">
                    <span>

                            <form action="<?php echo e(url('products/'.$product->id.'/report')); ?>" method="POST">
                            <?php echo csrf_field(); ?>

                                <div class="input-field">
                                    <select name="reason" id="">
                                        <option value="" disabled selected>Choose reason of report</option>
                                        <option value="This is illegal/fraudulent">This is illegal/fraudulent</option>
                                        <option value="This Ad is spam">This Ad is spam</option>
                                        <option value="This Ad is a duplicate">This Ad is a duplicate</option>
                                        <option value="This Ad is in the wrong category">This Ad is in the wrong category</option>
                                        <option value="The Ad goes against posting rules">The Ad goes against <a href="#">posting rules</a></option>
                                    </select>
                                    <label for="">Category</label>
                                </div>

                                    <div class="input-field">
                                        <textarea name="info" id="textarea" class="materialize-textarea" data-length="100"></textarea>
                                        <label for="textarea">More information</label>
                                    </div>

                                    <div class="center">
                                        <button  type="submit" class="btn red darken-2 waves-effect waves-dark">
                                            <span>Send report</span>
                                            <i class="material-icons left">send</i>
                                        </button>
                                    </div>

                                </form>

                    </span></div>
                </li>
            </ul>
        </div>
    <?php endif; ?>

<!-- contact seller -->

        <div class="row">

            <div class="col s12 l12" style="width: ;">
                <div class="center safe">
                    <i class="material-icons green-text">info</i>
                    <h5 style="font-weight: lighter; font-size: 40px;">Safety Tips</h5>
                    <p>1. Only meet in public/crowded places for example metro stations and malls.</p>
                    <p>2. Never go alone to meet a buyer/seller, always take someone with you.</p>
                    <p>3. Check and inspect the product properly before purchasing it</p>
                    <p>4. Never pay anything in advance or transfer money before inspecting the product</p>
                </div>
            </div>

            <div class="col s12 l12" style="margin-top: 20px;margin-bottom: 40px;">
                <ul class="collection with-header">
                    <li class="collection-header center">
                        <h4 style="font-weight: lighter; font-size: 40px;">Seller Info.</h4>
                    </li>
                    <li class="collection-item avatar">
                        <i class="material-icons circle blue">person</i>
                        <span class="title">Name</span>
                        <p class="grey-text"><?php echo e($product->user->name); ?></p>
                    </li>
                    <li class="collection-item avatar">
                        <i class="material-icons circle blue">phone</i>
                        <span class="title">Phone</span>
                        <p class="grey-text"><?php echo e($product->user->phone); ?></p>
                    </li>
                    <li class="collection-item avatar">
                        <i class="material-icons circle blue">email</i>
                        <span class="title">Email</span>
                        <p class="grey-text"><?php echo e($product->user->email); ?></p>
                    </li>
                </ul>
            </div>


        </div>

<?php echo $__env->make('inc.scrollup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nohandicap\resources\views/products/show.blade.php ENDPATH**/ ?>