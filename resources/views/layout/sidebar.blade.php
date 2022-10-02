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
                @can('role-list')
                <li>
                    <a href="{{ route('roles.index') }}"><i class="dripicons-briefcase align-self-center menu-icon"></i><span>Role</span></a>
                </li>
                @endcan
                @can('kasbon-list')
                <li>
                    <a href="{{ route('kasbons.index') }}"><i class="dripicons-article align-self-center menu-icon"></i><span>Kasbon</span></a>
                </li>
                @endcan
                @can('verifikator-list')
                <li>
                    <a href="{{ route('verifikator.index') }}"><i class="dripicons-archive align-self-center menu-icon"></i><span>Verifikator</span></a>
                </li>
                <li>
                    <a href="{{ route('verifikasi-atasan.index') }}"><i class="dripicons-archive align-self-center menu-icon"></i><span>Verifikasi</span></a>
                </li>
                @endcan
                @can('pertanggungan-list')
                <li>
                    <a href="{{ route('pertanggungan.index') }}"><i class="dripicons-document-new align-self-center menu-icon"></i><span>Pertanggungan</span></a>
                </li>
                @endcan
                @can('nonkasbon-list')
                <li>
                    <a href="{{ route('nonkasbon.index') }}"><i class="dripicons-document-new align-self-center menu-icon"></i><span>Non Kasbon</span></a>
                </li>
                @endcan
            </ul>
        </div>
    </div>
