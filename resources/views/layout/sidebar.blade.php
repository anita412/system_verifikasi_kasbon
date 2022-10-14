    <div class="left-sidenav">
        <!-- LOGO -->
        <div class="brand">
            <a href="index" class="logo">
                <span>
                    <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="logo-small" class="logo-sm">
                </span>
                <span>
                    <img src="{{ URL::asset('assets/images/logo.png') }}" alt="logo-large" class="logo-lg logo-light">
                    <img src="{{ URL::asset('assets/images/logo-dark.png') }}" alt="logo-large" class="logo-lg logo-dark">
                </span>
            </a>
        </div>
        <!--end logo-->
        <div class="menu-content h-100" data-simplebar>
            <ul class="metismenu left-sidenav-menu">
                <li class="menu-label mt-0">Main</li>
                <li>
                    <a href="{{ route('dashboard') }}"> <i data-feather="home"
                            class="align-self-center menu-icon"></i><span>Dashboard</span></a>
                </li>

                <hr class="hr-dashed hr-menu">
                <li class="menu-label my-2">Components & Extra</li>
                @can('user-list')
                <li>
                    <a href="{{ route('users.index') }}"><i class="dripicons-user-group align-self-center menu-icon"></i><span>User</span></a>
                </li>
                @endcan
                @can('unit-list')
                <li>
                    <a href="{{ route('units.index') }}"><i class="dripicons-briefcase align-self-center menu-icon"></i><span>Unit</span></a>
                </li>
                @endcan
                @can('role-list')
                <li>
                    <a href="{{ route('roles.index') }}"><i class="dripicons-briefcase align-self-center menu-icon"></i><span>Role</span></a>
                </li>
                @endcan
                @can('kasbon-list')
                <li>
                    <a href="javascript: void(0);"> <i  class="align-self-center ti-receipt"></i><span>Kasbon</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="{{ route('kasbon.index') }}"><i class="ti-control-record"></i>Rencana / Realisasi</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('pertanggungan.index') }}"><i class="ti-control-record"></i>Pertanggungan</a></li> 
                        @can('nonkasbon-list')
                        <li class="nav-item"><a class="nav-link" href="{{ route('nonkasbon.index') }}"><i class="ti-control-record"></i>Non Kasbon</a></li> 
                        @endcan
                    </ul>
                </li>
                @endcan
                @can('vkb-atasan-list')
                <li>
                    <a href="javascript: void(0);"> <i  class="align-self-center menu-icon ti-check-box"></i><span>Verifikasi Atasan - 1</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="{{ route('vkb-atasan.index') }}"><i class="ti-control-record"></i>Kasbon Rencana / Realisasi</a></li>
                        @can('vkp-atasan-list')
                        <li class="nav-item"><a class="nav-link" href="{{ route('vkp-atasan.index') }}"><i class="ti-control-record"></i>Pertanggungan</a></li> 
                        @endcan
                        @can('nkb-atasan-list')
                        <li class="nav-item"><a class="nav-link" href="{{ route('vnk-atasan.index') }}"><i class="ti-control-record"></i>Verifikasi Atasan NonKasbon</a></li> 
                        @endcan
                    </ul> 
                </li>
                @endcan
                @can('vkb-list')
                <li>
                    <a href="javascript: void(0);"> <i class="align-self-center menu-icon ti-check-box"></i><span>Verifikasi</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="{{ route('vkb.index') }}"><i class="ti-control-record"></i>Kasbon Rencana / Realisasi</a></li>
                        @can('vkp-list')
                        <li class="nav-item"><a class="nav-link" href="{{ route('vkp.index') }}"><i class="ti-control-record"></i>Pertanggungan</a></li> 
                        @endcan
                        @can('nkb-list')
                        <li class="nav-item"><a class="nav-link" href="{{ route('vnk.index') }}"><i class="ti-control-record"></i>NonKasbon</a></li> 
                        @endcan
                    </ul> 
                </li>
                @endcan
                
                @can('vkb-atasan-2-list')
                <li>
                    <a href="javascript: void(0);"> <i class="align-self-center menu-icon ti-check-box" ></i><span>Verifikasi Atasan - 2</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="{{ route('vkb-atasan-2.index') }}"><i class="ti-control-record"></i>Kasbon Rencana / Realisasi</a></li>
                        @can('vkp-atasan-2-list')
                        <li class="nav-item"><a class="nav-link" href="{{ route('vkp-atasan-2.index') }}"><i class="ti-control-record"></i>Pertanggungan</a></li> 
                        @endcan
                        @can('nkb-atasan-2-list')
                        <li class="nav-item"><a class="nav-link" href="{{ route('vnk-atasan-2.index') }}"><i class="ti-control-record"></i>NonKasbon</a></li> 
                        @endcan
                    </ul> 
                </li>
                @endcan
                @can('sppd-list')
                <li>
                    <a href="{{ route('sppd.index') }}"><i class="align-self-center ti-receipt"></i><span>SPPD</span></a>
                </li>
                @endcan
            </ul>
        </div>
    </div>
