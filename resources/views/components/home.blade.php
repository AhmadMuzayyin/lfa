<div class="layar">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<div class="layout-wrapper">
    <header id="page-topbar" class="bg-primary">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="btn-group" role="group">
                    <button id="btnGroupVerticalDrop1" type="button"
                        class="btn btn-sm font-size-20 ps-4 d-lg-none header-item waves-effect waves-light text-white"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <i class="bx bx-customize"></i>
                    </button>

                    @if (Auth()->user()->role == 1)
                        @include('components.admin-nav')
                    @else
                        @include('components.admin-nav')
                    @endif

                </div>
            </div>

            <div class="d-flex">
                <div class="dropdown d-inline-block">
                    <span class="d-none d-xl-inline-block ms-1 text-white" key="t-henry">
                        {{ Auth()->user()->fullname }}
                    </span>
                    <button type="button" class="btn header-item waves-effect">
                        <img class="rounded-circle header-profile-user"
                            src="{{ url('/backend/img/iStock-476085198.jpg') }}" alt="Header Avatar">
                    </button>
                </div>
                <div class="dropdown d-inline-block">
                    <a class="btn header-item waves-effect text-white py-4" href="">
                        <i class="bx bx-cog font-size-20"></i></a>
                </div>
                <div class="dropdown d-inline-block">
                    <form action="{{ url('logout') }}" method="POST">
                        @csrf
                        <button class="btn py-4 header-item waves-effect" type="submit">
                            <i class="bx bx-power-off font-size-20 text-white"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>


    <div class="row px-2 mx-5 mt-4">
        <div class="col-3" id="tombolPilih">
            <div class="btn-group d-none d-lg-inline-block ms-xl-2 px-1" role="group"
                style="z-index: 99999; position: fixed;">
                <button id="btnGroupVerticalDrop1" type="button" class="btn btn-primary active"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    -- Pilih Menu --
                </button>
                @if (Auth()->user()->role == 1)
                    @include('components.admin-nav')
                @else
                    @include('components.admin-nav')
                @endif
            </div>
        </div>
    </div>

    <div class="topnav bg-white text-primary fixed-top shadow" id="navbarHead">
        <div class="container" id="layar">
            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
                <div class="collapse navbar-collapse" id="topnav-menu-content">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none {{ Request::is('admin/dashboard') ? 'text-primary' : 'text-dark' }}"
                                href="{{ url('/admin/dashboard') }}" id="topnav-dashboard" role="button">
                                <i class="bx bx-home-circle me-2"></i>
                                <span key="t-dashboards">Beranda</span>
                            </a>
                        </li>
                        @yield('navbar')
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                @yield('dashboard')
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © E-Learning Lajnah Falakiyah.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            ~ LF-Annuqayah
                        </div>
                    </div>
                </div>

                <div class="row d-lg-none">
                    <div class="col-12 border">
                        <ul class="nav border bg-white nav-tabs nav-tabs-custom fixed-bottom nav-justified"
                            role="tablist">
                            <li class="nav-item">
                                <a class="nav-link " href="" role="tab" aria-selected="false">
                                    <span class="d-block d-sm-none"><i
                                            class="bx bx-home-circle font-size-20"></i></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="" role="tab" aria-selected="false">
                                    <span class="d-block d-sm-none"><i class="bx bx-book-open font-size-20"></i></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="" role="tab" aria-selected="false">
                                    <span class="d-block d-sm-none"><i class="bx bx-task font-size-20"></i></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="" role="tab" aria-selected="true">
                                    <span class="d-block d-sm-none"><i
                                            class="bx bx-pie-chart-alt-2 font-size-20"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Page-content -->

            </div>
            <!-- end main content-->
        </div>
    </div>
</div>
