    @extends('components.admin-layout')


    @section('content')
        <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
            data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            @yield('admin.nav')

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
                                    <li><a href="{{ '/' }}" class="fw-normal"> <strong>ADMIN</strong></a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row justify-content-between">
                        <div class="col-lg-4 col-md-12 ">
                            <div class="white-box analytics-info bg-success">
                                <h3 class="box-title">USERS</h3>
                                <ul class="list-inline two-part d-flex align-items-center mb-0">
                                    <li>
                                        <div>
                                            <i class="far fa-address-book  " aria-hidden="true"> TOTAL USERS </i>
                                        </div>
                                    </li>
                                    <li class="ms-auto">
                                        <span class="counter text-dark">{{$users}}</span>
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
                                            <i class="fas fa-list-ul  " aria-hidden="true"> TOTAL MENU ITEMS </i>
                                        </div>
                                    </li>
                                    <li class="ms-auto">
                                        <span class="counter text-dark">{{$menus}}</span>
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
                                            <i class="fas fa-coffee " aria-hidden="true"> TOTAL DRINKS </i>
                                        </div>
                                    </li>
                                    </li>
                                    <li class="ms-auto">
                                        <span class="counter text-dark">{{$drinks}}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="white-box analytics-info bg-secondary">
                                <h3 class="box-title">CATEGORIES</h3>
                                <ul class="list-inline two-part d-flex align-items-center mb-0">
                                    <li>
                                    <li>
                                        <div>
                                            <i class="fa fa-table " aria-hidden="true"> TOTAL CATEGORIES </i>
                                        </div>
                                    </li>
                                    </li>
                                    <li class="ms-auto">
                                        <span class="counter text-dark">{{$categories}}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="white-box">
                                <h3 class="box-title"><strong>Users Table</strong></h3>
                                <button><a href="users">View</a></button>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">No.</th>
                                                <th class="border-top-0">Username</th>
                                                <th class="border-top-0">Emails</th>
                                                <th class="border-top-0">Phone Numbers</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i = 1;
                                            @endphp
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $user->username }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->phone_number }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="white-box">
                                <h3 class="box-title"><strong>Menu Table</strong></h3>
                                <button><a href="addmenu">Add Menu</a></button>
                                <div class="table-responsive">
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">No.</th>
                                                <th class="border-top-0"> Menu_item</th>
                                                <th class="border-top-0"> Menu_image</th>
                                                <th class="border-top-0">Description</th>
                                                <th class="border-top-0">Price</th>
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
                                                    <td>{{ $menu->item_description }} </td>
                                                    <td>{{ $menu->price }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="white-box">
                                <h3 class="box-title"><strong>Drinks Table</strong></h3>
                                <button><a href="adddrink">Add Drinks</a></button>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">No.</th>
                                                <th class="border-top-0"> Drink-Name</th>
                                                <th class="border-top-0"> Drink-image</th>
                                                <th class="border-top-0">Drink-Description</th>
                                                <th class="border-top-0">Drink-Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i = 1;
                                            @endphp
                                            @foreach ($drinks as $drink)
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $drink->drink_name }}</td>
                                                    <td><img src=".\uploads\drink_images\{{ $drink->drink_image }}"
                                                            alt="" width="100px"></td>
                                                    <td>{{ $drink->drink_description }}</td>
                                                    <td>{{ $drink->drink_price }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="white-box">
                                <h3 class="box-title"><strong>Categories Table</strong></h3>
                                <button><a href="addcategory">Add Categories</a></button>
                                <div class="table-responsive">
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">No.</th>
                                                <th class="border-top-0">Item categories</th>
                                                <th class="border-top-0">Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i = 1;
                                            @endphp
                                            @foreach ($categorys as $category)
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $category->category_name }}</td>
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
    @endsection
