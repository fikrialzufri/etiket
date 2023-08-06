<div class="app-sidebar colored">
    <div class="sidebar-header">
        <a class="header-brand" href="{{ route('home') }}">
            <div class="logo-img">
                <img height="40" src="{{ asset('img/logomenu.png') }}" class="header-brand-img" title="SIP Borneo Corner">
            </div>
        </a>
        <div class="sidebar-action"><i class="ik ik-arrow-left-circle"></i></div>
        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
    </div>

    @php
        $segment1 = request()->segment(1);
        $segment2 = request()->segment(2);
        $segment3 = request()->segment(3);
    @endphp

    <div class="sidebar-content">
        <div class="nav-container">
            <nav id="main-menu-navigation" class="navigation-main">
                <div class="nav-item {{ $segment2 == '' ? 'active' : '' }}">
                    <a href="{{ route('home') }}">
                        <i class="ik ik-bar-chart-2"></i>
                        <span>{{ __('Dashboard') }}</span>
                    </a>
                </div>
                @canany(['view-provinsi', 'view-kota'])
                    <div class="nav-lavel">{{ __('Lokasi') }} </div>
                    @can('view-provinsi')
                        <div class="nav-item {{ $segment2 == 'provinsi' ? 'active' : '' }}">
                            <a href="{{ route('provinsi.index') }}">
                                <i class="ik ik-box"></i>
                                <span>{{ __('Provinsi') }}</span>
                            </a>
                        </div>
                    @endcan
                    @can('view-kota')
                        <div class="nav-item {{ $segment2 == 'kota' ? 'active' : '' }}">
                            <a href="{{ route('kota.index') }}">
                                <i class="ik ik-map"></i>
                                <span>{{ __('Kota') }}</span>
                            </a>
                        </div>
                    @endcan

                @endcan
                @canany(['view-entrance', 'view-event'])
                <div class="nav-lavel">{{ __('Event') }} </div>
                @can('view-entrance')
                    <div class="nav-item {{ $segment2 == 'entrance' ? 'active' : '' }}">
                        <a href="{{ route('entrance.index') }}">
                            <i class="ik ik-box"></i>
                            <span>{{ __('Entrance') }}</span>
                        </a>
                    </div>
                @endcan
                @can('view-event')
                    <div class="nav-item {{ $segment2 == 'event' ? 'active' : '' }}">
                        <a href="{{ route('event.index') }}">
                            <i class="ik ik-map"></i>
                            <span>{{ __('Event') }}</span>
                        </a>
                    </div>
                @endcan
                @endcan
                @canany(['view-peserta', 'view-bidang'])
                <div class="nav-lavel">{{ __('Peserta') }} </div>
                @can('view-peserta')
                    <div class="nav-item {{ $segment2 == 'peserta' ? 'active' : '' }}">
                        <a href="{{ route('peserta.index') }}">
                            <i class="ik ik-box"></i>
                            <span>{{ __('Peserta') }}</span>
                        </a>
                    </div>
                @endcan
                @can('view-bidang')
                    <div class="nav-item {{ $segment2 == 'bidang' ? 'active' : '' }}">
                        <a href="{{ route('bidang.index') }}">
                            <i class="ik ik-map"></i>
                            <span>{{ __('Bidang') }}</span>
                        </a>
                    </div>
                @endcan
                @can('view-jabatan')
                    <div class="nav-item {{ $segment2 == 'jabatan' ? 'active' : '' }}">
                        <a href="{{ route('jabatan.index') }}">
                            <i class="ik ik-map"></i>
                            <span>{{ __('Jabatan') }}</span>
                        </a>
                    </div>
                @endcan
                @endcan
                {{-- if auth --}}
                @auth
                    @canany(['view-user', 'view-roles'])
                        <div class="nav-lavel">{{ __('User') }} </div>
                        <div
                            class="nav-item {{ $segment2 == 'user' || $segment2 == 'role' || $segment2 == 'task' ? 'active open' : '' }} has-sub">
                            <a href="#"><i class="ik ik-user dropdown-icon"></i><span>{{ __('Pengguna') }}</span></a>
                            <div class="submenu-content">
                                @can('view-user')
                                    <a href="{{ route('user.index') }}"
                                        class="menu-item {{ $segment2 == 'user' ? 'active' : '' }}">
                                        Pengguna
                                    </a>
                                @endcan
                                @can('view-roles')
                                    <a href="{{ route('role.index') }}"
                                        class="menu-item {{ $segment2 == 'role' ? 'active' : '' }}">
                                        Hak Akses
                                    </a>
                                @endcan
                            </div>
                        </div>
                    @endcan
                @endauth
            </nav>
        </div>
    </div>
</div>
