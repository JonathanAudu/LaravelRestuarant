<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="robots" content="noindex,nofollow" />
    <title>Merilyn Restaurant Admin Dashboard</title>
    <link rel="" href="" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./admin/plugins/images/favicon.png" />
    <!-- Custom CSS -->
    <link href="./admin/plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="./admin/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" />
    <!-- Custom CSS -->
    <link href="./admin/css/style.min.css" rel="stylesheet" />
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">


                    <a class="navbar-brand" href="dashboard.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="./admin/plugins/images/logo-icon.png" alt="homepage" />
                        </b>

                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="./admin/plugins/images/logo-text.png" alt="homepage" />
                        </span>
                    </a>

                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>

                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <li class="in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-1" />
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.html"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">DASHBOARD</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="basic-table.html"
                                aria-expanded="false">
                                <i class="far fa-address-book" aria-hidden="true"></i>
                                <span class="hide-menu">USERS</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="basic-table.html"
                                aria-expanded="false">
                                <i class="fas fa-list-ul" aria-hidden="true"></i>
                                <span class="hide-menu">MENU</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="basic-table.html"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">CATEGORIES</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="basic-table.html"
                                aria-expanded="false">
                                <i class="fas fa-beer" aria-hidden="true"></i>
                                <span class="hide-menu">DRINKS</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/logout"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">LOGOUT</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><strong>MERILYN RESTAURANT</strong></h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="{{ '/' }}" class="fw-normal"> <strong>HOME</strong> </a></li>
                            </ol>
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal"> <strong>ADMIN</strong></a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info bg-success">
                            <h3 class="box-title">USERS</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div>
                                        <i class="far fa-address-book   " aria-hidden="true"> ALL USERS</i>
                                    </div>
                                </li>
                                <li class="ms-auto">
                                    <span class="counter text-dark">659</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info bg-primary">
                            <h3 class="box-title">MENUS</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div>
                                        <i class="fas fa-list-ul  " aria-hidden="true"> MENU ITEMS</i>
                                    </div>
                                </li>
                                <li class="ms-auto">
                                    <span class="counter text-dark">869</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info bg-warning">
                            <h3 class="box-title">DRINKS</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                <li>
                                    <div>
                                        <i class="fas fa-coffee " aria-hidden="true"> COCKTAILS $ WINES</i>
                                    </div>
                                </li>
                                </li>
                                <li class="ms-auto">
                                    <span class="counter text-dark">911</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title"><strong>Menu Table</strong></h3>
                            <button><a href="addmenu">Add Menu</a></button>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">No.</th>
                                            <th class="border-top-0"> Menu_item</th>
                                            <th class="border-top-0"> Menu_image</th>
                                            <th class="border-top-0">Description</th>
                                            <th class="border-top-0">Price</th>
                                            <th class="border-top-0">ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($menus as $menu)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $menu->menu_item }}</td>
                                                <td><img src=".\uploads\menu_images\{{ $menu->menu_image }}"
                                                        alt="" width="100px"></td>
                                                <td>{{ $menu->item_description }}</td>
                                                <td>{{ $menu->price }}</td>
                                                <td>
                                                    <p><a href="">Edit</a></p>
                                                    <p><a href="">Delete</a></p>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer text-center">2021 © JonLee Admin</footer>
        </div>
    </div>
    <script src="./admin/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="./admin/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./admin/js/app-style-switcher.js"></script>
    <script src="./admin/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="./admin/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="./admin/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="./admin/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="./admin/plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="./admin/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="./admin/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>
