<nav class="nav-wrapper green scrollspy" id="up">
        <div class="container">
          <a href="<?php echo e(url('/')); ?>" class="brand-logo" style="font-family: ">
            <div class="">
                <div class="col">
                    <img src="<?php echo e(asset('logo/nohandicap12.png')); ?>" alt="" width="170px;">
                    <span class="right" style="font-weight: lighter; font-size: 20px;">
                        <div class="hide-on-med-and-down ">
                                | Assistive tools ads
                        </div>
                    </span>

                </div>
                <div class="col">

                
                </div>
            </div>
          </a>

          <?php if(auth()->guard()->check()): ?>
            <?php if(Auth::user()->isAdmin == 1): ?>
                <a href="#" data-target="adminSideNav" class=" white-text  sidenav-trigger show-on-large right"><i class="material-icons">menu</i></a>
            <?php endif; ?>

            <?php if(Auth::user()->isAdmin == 0): ?>
                <a href="#" data-target="userSideNav" class=" white-text  sidenav-trigger show-on-large right"><i class="material-icons">menu</i></a>
            <?php endif; ?>
          <?php endif; ?>

          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

          <ul class="sidenav" id="mobile-demo">
                <?php if(Auth::guest()): ?>

                <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                <?php endif; ?>

                <li><a href="/pages/about">About</a></li>
                <?php if(auth()->guard()->check()): ?>

                <?php if( Auth::user()->isAdmin == 0 ): ?>
                    <li><a href="/products/create">Place an Ad</a></li>
                <?php endif; ?>
                <?php endif; ?>

              </ul>

        <ul class="right hide-on-med-and-down">

            <?php if(Auth::guest() || Auth::user()->isAdmin == 0): ?>
                <li>
                    <a href="/pages/about" class="">About Us</a>
                </li>
            <?php endif; ?>

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

                <div class="">
                    <!-- Dropdown Structure -->
                    <ul id="dropdown1" class="dropdown-content">

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
                    <li class="hide-on-small-only"><a href="/products/create" class="btn-small waves-effect waves-light purple">
                        <span>Post An Ad</span>
                        <i class="material-icons left">add</i>
                        </a>
                    </li>
                </ul>
            <?php endif; ?>

            <?php if(Auth()->user()->isAdmin == 1): ?>
                <ul id="adminSideNav" class="sidenav right">
                        <li><a  class="waves-effect"><i class="material-icons">dashboard</i>Admin Panel</a></li>
                        <li><div class="divider"></div></li>
                        <li><div class="user-view">
                                <div class="background">

                                <div style="color: black"></div>
                                </div>

                                <a href="#user"><img class="circle" src="<?php echo e(asset('Avatar.jpg')); ?>"></a>

                                <a href="#name"><span class="black-text name"><?php echo e(Auth()->user()->name); ?></span></a>
                                <a href="#email"><span class="black-text email"><?php echo e(Auth()->user()->email); ?></span></a>
                            </div></li>
                            <li><div class="divider"></div></li>

                            <li><a href="/users" class="waves-effect"><i class="material-icons ">person</i>Users</a></li>
                            <li><a href="/reports" class="waves-effect"><i class="material-icons ">report</i>Reports</a></li>
                            <li><div class="divider"></div></li>

                    </ul>
            <?php endif; ?>

            <?php if(Auth()->user()->isAdmin == 0): ?>
                <ul id="userSideNav" class="sidenav right">
                        <li><a  class="waves-effect"><i class="material-icons">dashboard</i>User Dashboard</a></li>
                        <li><div class="divider"></div></li>
                        <li><div class="user-view">
                                <div class="background">
                                <div style="color: black"></div>
                                </div>
                                <a href="#user"><img class="circle" src="<?php echo e(asset('Avatar.jpg')); ?>"></a>

                                

                                <a href="#name"><span class="black-text name"><?php echo e(Auth()->user()->name); ?></span></a>
                                <a href="#email"><span class="black-text email"><?php echo e(Auth()->user()->email); ?></span></a>
                            </div></li>
                            <li><div class="divider"></div></li>

                            <li><a href="/dashboard" class="waves-effect"><i class="material-icons">attachment</i>MyAds</a></li>
                            <li><a href="/profile/show" class="waves-effect"><i class="material-icons">person</i>MyProfile</a></li>
                            <li><div class="divider"></div></li>

                    </ul>
            <?php endif; ?>

            <?php endif; ?>


</nav>

<?php /**PATH C:\xampp\htdocs\nohandicap\resources\views/inc/navbar.blade.php ENDPATH**/ ?>