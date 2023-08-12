<header class="header-top" header-theme="light">
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <div class="top-menu d-flex align-items-center">
                <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>

                <button type="button" id="navbar-fullscreen" class="nav-link"><i class="ik ik-maximize"></i></button>

            </div>
            @auth

                <div class="top-menu d-flex align-items-center">
                    {{-- Notification --}}
                    <div class="dropdown">

                    </div>
                    <div class="dropdown">
                        <span>{{ ucfirst(Auth::user()->name) }}</span>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="ik ik-user"></i>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('user.ubah') }}"><i
                                        class="ik ik-user dropdown-icon"></i>
                                    {{ __('Profile') }}</a>
                                <a class="dropdown-item" href="{{ route('monitor.index') }}"><i
                                        class="ik ik-user dropdown-icon"></i>
                                    {{ __('Monitor') }}</a>
                                {{-- <a class="dropdown-item" href="#"><i class="ik ik-navigation dropdown-icon"></i>
                            {{ __('Message') }}</a> --}}
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="ik ik-power dropdown-icon"></i>
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                    </div>

                </div>
            @endauth
        </div>
    </div>
</header>
