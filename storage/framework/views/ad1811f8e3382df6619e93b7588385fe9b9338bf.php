<?php $__env->startSection('content'); ?>


    <ul id="slide-out" class="sidenav right">

        <li><div class="user-view">
                <div class="background">
                  <div style="color: black"></div>
                </div>
                <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
                

                <a href="#name"><span class="black-text name"><?php echo e($user->name); ?></span></a>
                <a href="#email"><span class="black-text email"><?php echo e($user->email); ?></span></a>
              </div></li>
              <li><div class="divider"></div></li>

              <li><a href="/admin/showUsers" class="waves-effect"><i class="material-icons">person</i>Users</a></li>
              <li><a href="#!" class="waves-effect"><i class="material-icons">report</i>Reports</a></li>
              <li><div class="divider"></div></li>

    </ul>

<div class="section "></div>
<div class="section "></div>
<div class="section "></div>
<div class="section "></div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nohandicap\resources\views/admin/index.blade.php ENDPATH**/ ?>