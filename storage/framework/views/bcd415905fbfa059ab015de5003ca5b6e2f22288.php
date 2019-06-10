<nav class="nav-wrapper green ">
        <div class="container">
          <a href="<?php echo e(url('/')); ?>" class="brand-logo">
                <?php echo e(config('app.name', 'Laravel')); ?>

          </a>

          <a href="" class="sidenav-trigger" target-data="mobile-menu">
            <i class="material-icons">menu</i>
          </a>

          <ul class="right hide-on-med-and-down">

                <?php if(auth()->guard()->guest()): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                </li>
                <?php if(Route::has('register')): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                    </li>
                <?php endif; ?>
                <?php else: ?>
                <li class="">

                    <!-- Dropdown Trigger -->
                    <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">
                        <?php echo e(Auth::user()->name); ?>

                     <span class="caret"></span><i class="material-icons right">arrow_drop_down</i></a>
                    </li>

                    <div>
                        <!-- Dropdown Structure -->
                        <ul id="dropdown1" class="dropdown-content">

                            <li>
                                <a href="/dashboard" class="dropdown-item">Dashboard</a>
                            </li>

                            <li>
                                <a href="/profile/show" class="dropdown-item">Profile</a>
                            </li>

                            <li class="divider"></li>

                            <li>
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                                 </a>
                            </li>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                        </form>

                    </div>
                </ul>

                </li>
            <?php endif; ?>
            <?php if(auth()->guard()->check()): ?>

            <?php if(Auth()->user()->isAdmin == 0): ?>

                <ul class="right">
                    <li><a href="/products/create" class="btn-small waves-effect waves-light purple">
                        <span>Post An Ad</span>
                        <i class="material-icons left">add</i>
                        </a>
                    </li>
                </ul>

            <?php endif; ?>


            <?php if(Auth()->user()->isAdmin == 1): ?>


            <ul id="slide-out" class="sidenav right">

                    <li><div class="user-view">
                            <div class="background">
                              <div style="color: black"></div>
                            </div>
                            <a href="#user"><img class="circle" src="<?php echo e(asset('Avatar.jpg')); ?>"></a>
                            

                            <a href="#name"><span class="black-text name"><?php echo e(Auth()->user()->name); ?></span></a>
                            <a href="#email"><span class="black-text email"><?php echo e(Auth()->user()->email); ?></span></a>
                          </div></li>
                          <li><div class="divider"></div></li>

                          <li><a href="/users" class="waves-effect"><i class="material-icons">person</i>Users</a></li>
                          <li><a href="/reports" class="waves-effect"><i class="material-icons">report</i>Reports</a></li>
                          <li><div class="divider"></div></li>

                </ul>


                  <a href="#" data-target="slide-out" class=" white-text  sidenav-trigger show-on-large right"><i class="material-icons">menu</i></a>



            <?php endif; ?>
            <?php endif; ?>


      </nav>

      
<?php /**PATH C:\xampp\htdocs\nohandicap\resources\views/inc/navbar.blade.php ENDPATH**/ ?>