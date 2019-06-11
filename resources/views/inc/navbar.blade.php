<nav class="nav-wrapper green scrollspy" id="up">
        <div class="container">
          <a href="{{ url('/') }}" class="brand-logo" style="font-family: ">
            <div class="">
                <div class="col">
                    <img src="{{ asset('logo/nohandicap12.png') }}" alt="" width="170px;">
                    <span class="right" style="font-weight: lighter; font-size: 20px;">
                        | Assistive tools ads
                    </span>

                </div>
                <div class="col">

                {{-- {{ config('{{ app.name }}', '') }} --}}
                </div>
            </div>
          </a>

          <a href="" class="sidenav-trigger" target-data="mobile-menu">
            <i class="material-icons">menu</i>
          </a>

          <ul class="right hide-on-med-and-down">



            @if (Auth::guest() || Auth::user()->isAdmin == 0)
                <li>
                    <a href="/pages/about" class="">About Us</a>
                </li>
            @endif


                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
                @else
                <li class="">

                    <!-- Dropdown Trigger -->
                    <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">
                        {{ Auth::user()->name }}
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
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                                 </a>
                            </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                        </form>

                    </div>
                </ul>


                </li>

            @endguest
            @auth

            @if (Auth()->user()->isAdmin == 0)

                <ul class="right">
                    <li><a href="/products/create" class="btn-small waves-effect waves-light purple">
                        <span>Post An Ad</span>
                        <i class="material-icons left">add</i>
                        </a>
                    </li>
                </ul>

            @endif


            @if (Auth()->user()->isAdmin == 1)


            <ul id="slide-out" class="sidenav right">

                    <li><div class="user-view">
                            <div class="background">
                              <div style="color: black"></div>
                            </div>
                            <a href="#user"><img class="circle" src="{{ asset('Avatar.jpg') }}"></a>

                            {{-- <i class="material-icons black-text center">person</i> --}}

                            <a href="#name"><span class="black-text name">{{ Auth()->user()->name }}</span></a>
                            <a href="#email"><span class="black-text email">{{ Auth()->user()->email }}</span></a>
                          </div></li>
                          <li><div class="divider"></div></li>

                          <li><a href="/users" class="waves-effect"><i class="material-icons">person</i>Users</a></li>
                          <li><a href="/reports" class="waves-effect"><i class="material-icons">report</i>Reports</a></li>
                          <li><div class="divider"></div></li>

                </ul>

                  <a href="#" data-target="slide-out" class=" white-text  sidenav-trigger show-on-large right"><i class="material-icons">menu</i></a>

            @endif
            @endauth


</nav>
