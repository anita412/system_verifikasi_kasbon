<div class="left-sidenav">
    <!-- LOGO -->
    <div class="brand">
        <a href="index" class="logo">
            <span>
                <img src="{{ URL::asset('assets/images/logo.jpeg') }}" alt="logo-small" class="logo">
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
                <a href="/dashboard"> <i data-feather="home" class="align-self-center menu-icon"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <hr class="hr-dashed hr-menu">
            <li class="menu-label my-2"><a href=" href=javascript: void(0);">PENGAJUAN KASBON</li>
            @can('user-list')
            <li>
                <a href="{{ route('users.index') }}"><i class="dripicons-user-group"></i><span>User</span></a>
            </li>
            @endcan
            @can('role-list')
            <li>
                <a href="{{ route('roles.index') }}"><i class="dripicons-briefcase"></i><span>Role</span></a>
            </li>
            @endcan
            @can('kasbon-list')
            <li>
                <a href="{{ route('kasbons.index') }}">
                    <i class="dripicons-article"></i>
                    <span>Kasbon</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/list-kasbon">
                    <i class="dripicons-view-list"></i>List Kasbon
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/entry-rencana1">
                    <i class="ti-layout-accordion-list"></i>Form Entry Rencana/Realisasi
                </a>
            </li>              
            <li class="nav-item">
                <a class="nav-link" href="/entry-nonkasbon">
                    <i class="ti-notepad"></i>Form Entry Non Kasbon
                </a>
            </li>  
            <li class="nav-item">
                <a class="nav-link" href="/entry-bayarbeli">
                    <i class="ti-money"></i>Form Tambah Pembayaran Pembelian
                </a>
            </li>          
            <li class="nav-item">
                <a class="nav-link" href="/entry-pertanggungan1">
                    <i class="ti-bookmark-alt"></i>Form Entry Pertanggungan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/entry-sppd">
                    <i class="dripicons-briefcase"></i>Form Entry SPPD
                </a>
            </li>
            @endcan
        </ul>
    </div>
</div>
