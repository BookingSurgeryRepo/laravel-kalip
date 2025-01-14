<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8"/>
    <title>BookingSurgery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc."/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style"/>

    <!-- Icons -->
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css"/>

    @livewireStyles

</head>

<!-- body start -->
<body data-menu-color="light" data-sidebar="default"

<!-- Begin page -->
<div id="app-layout">


    <!-- Topbar Start -->
    <div class="topbar-custom">
        <div class="container-fluid">
            <div class="d-flex justify-content-between">
                <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">
                    <li>
                        <button class="button-toggle-menu nav-link">
                            <i data-feather="menu" class="noti-icon"></i>
                        </button>
                    </li>
                </ul>

                <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">

                    <li class="d-none d-sm-flex">
                        <button type="button" class="btn nav-link" data-toggle="fullscreen">
                            <i data-feather="maximize" class="align-middle fullscreen noti-icon"></i>
                        </button>
                    </li>

                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <i data-feather="bell" class="noti-icon"></i>
                            <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0">
                                            <span class="float-end">
                                                <a href="" class="text-dark">
                                                    <small>Clear All</small>
                                                </a>
                                            </span>Notification
                                </h5>
                            </div>

                            <div class="noti-scroll" data-simplebar>

                                <!-- item-->
                                <a href="javascript:void(0);"
                                   class="dropdown-item notify-item text-muted link-primary active">
                                    <div class="notify-icon">
                                        <img src="assets/images/users/user-12.jpg" class="img-fluid rounded-circle"
                                             alt=""/>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="notify-details">Carl Steadham</p>
                                        <small class="text-muted">5 min ago</small>
                                    </div>
                                    <p class="mb-0 user-msg">
                                        <small class="fs-14">Completed <span class="text-reset">Improve workflow in Figma</span></small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item text-muted link-primary">
                                    <div class="notify-icon">
                                        <img src="assets/images/users/user-2.jpg" class="img-fluid rounded-circle"
                                             alt=""/>
                                    </div>
                                    <div class="notify-content">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p class="notify-details">Olivia McGuire</p>
                                            <small class="text-muted">1 min ago</small>
                                        </div>

                                        <div class="d-flex mt-2 align-items-center">
                                            <div class="notify-sub-icon">
                                                <i class="mdi mdi-download-box text-dark"></i>
                                            </div>

                                            <div>
                                                <p class="notify-details mb-0">dark-themes.zip</p>
                                                <small class="text-muted">2.4 MB</small>
                                            </div>
                                        </div>

                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item text-muted link-primary">
                                    <div class="notify-icon">
                                        <img src="assets/images/users/user-3.jpg" class="img-fluid rounded-circle"
                                             alt=""/>
                                    </div>
                                    <div class="notify-content">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p class="notify-details">Travis Williams</p>
                                            <small class="text-muted">7 min ago</small>
                                        </div>
                                        <p class="noti-mentioned p-2 rounded-2 mb-0 mt-2"><span class="text-primary">@Patryk</span>
                                            Please make sure that you're....</p>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item text-muted link-primary">
                                    <div class="notify-icon">
                                        <img src="assets/images/users/user-8.jpg" class="img-fluid rounded-circle"
                                             alt=""/>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="notify-details">Violette Lasky</p>
                                        <small class="text-muted">5 min ago</small>
                                    </div>
                                    <p class="mb-0 user-msg">
                                        <small class="fs-14">Completed <span
                                                class="text-reset">Create new components</span></small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item text-muted link-primary">
                                    <div class="notify-icon">
                                        <img src="assets/images/users/user-5.jpg" class="img-fluid rounded-circle"
                                             alt=""/>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="notify-details">Ralph Edwards</p>
                                        <small class="text-muted">5 min ago</small>
                                    </div>
                                    <p class="mb-0 user-msg">
                                        <small class="fs-14">Completed <span class="text-reset">Improve workflow in React</span></small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item text-muted link-primary">
                                    <div class="notify-icon">
                                        <img src="assets/images/users/user-6.jpg" class="img-fluid rounded-circle"
                                             alt=""/>
                                    </div>
                                    <div class="notify-content">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p class="notify-details">Jocab jones</p>
                                            <small class="text-muted">7 min ago</small>
                                        </div>
                                        <p class="noti-mentioned p-2 rounded-2 mb-0 mt-2"><span class="text-reset">@Patryk</span>
                                            Please make sure that you're....</p>
                                    </div>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);"
                               class="dropdown-item text-center text-primary notify-item notify-all">
                                View all
                                <i class="fe-arrow-right"></i>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link dropdown-toggle nav-user me-0" data-bs-toggle="dropdown" href="#"
                           role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{ asset('admin/assets/images/users/user-5.jpg') }}" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ms-1">
                                {{ auth()->user()->name }} <i class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="pages-profile.html" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-circle-outline fs-16 align-middle"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="auth-lock-screen.html" class="dropdown-item notify-item">
                                <i class="mdi mdi-lock-outline fs-16 align-middle"></i>
                                <span>Lock Screen</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="{{ route('admin.dashboard.logout') }}" class="dropdown-item notify-item">
                                <i class="mdi mdi-location-exit fs-16 align-middle"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>

                </ul>
            </div>

        </div>

    </div>
    <!-- end Topbar -->

    <!-- Left Sidebar Start -->
    <div class="app-sidebar-menu">
        <div class="h-100" data-simplebar>

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <div class="logo-box">
                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                        <img src="{{ asset('admin/assets/images/logo-sm.png') }}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
<img src="{{ asset('admin/assets/images/logo-light.png') }}" alt="" height="24">
</span>
                    </a>
                    <a href="index.html" class="logo logo-dark">
<span class="logo-sm">
<img src="{{ asset('admin/assets/images/logo-sm.png') }}" alt="" height="22">
</span>
                        <span class="logo-lg">
<img src="{{ asset('admin/assets/images/logo-dark.png') }}" alt="" height="24">
</span>
                    </a>
                </div>

                <ul id="side-menu">

                    <li class="menu-title">Menu</li>

                    <li>
                        <a href="{{ route('admin.dashboard') }}" data-bs-toggle="collapse">
                            <i data-feather="home"></i>
                            <span> Dashboard </span>
                        </a>
                    </li>

                    <li class="menu-title">Pages</li>

                    <li>
                        <a href="#pages" data-bs-toggle="collapse">
                            <i data-feather="file-text"></i>
                            <span> {{ __('Pages') }} </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="pages">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ route('admin.pages.create') }}" class="tp-link">{{ __('Add New') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                @yield('content')
            </div> <!-- container-fluid -->

        </div> <!-- content -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col fs-13 text-muted text-center">
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>
</div>

<!-- Vendor -->
<script src="{{ asset('admin/assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/feather-icons/feather.min.js') }}"></script>

<!-- App js-->
<script src="{{ asset('admin/assets/js/app.js') }}"></script>

@livewireScripts

</body>
</html>