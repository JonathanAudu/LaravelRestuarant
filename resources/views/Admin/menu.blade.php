@extends('components.admin-layout')

@section('content')
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
                        <h3 class="box-title"><strong>MENU DETAILS</strong>
                            <a href="addmenu" class="btn btn-primary float-end">Add Menu</a>
                        </h3>

                        @if (session('message'))
                            <div class="alert alert-success">{{ session('message') }}</div>
                        @endif
                        @if (session('denger'))
                            <div class="alert alert-danger">{{ session('denger') }}</div>
                        @endif

                        <div class="table-responsive">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">No.</th>
                                        <th class="border-top-0 text-center">Category</th>
                                        <th class="border-top-0 text-center"> Name</th>
                                        <th class="border-top-0 text-center"> Image</th>
                                        <th class="border-top-0 text-center">Description</th>
                                        <th class="border-top-0 text-center">Price</th>
                                        <th class="border-top-0 text-end">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($menus as $menu)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $menu->category->category_name }}</td>
                                            <td>{{ $menu->menu_item }}</td>
                                            <td><img src="..\uploads\menu_images\{{ $menu->menu_image }}" alt=""
                                                    width="100px"></td>
                                            <td>{{ $menu->item_description }}</td>
                                            <td>${{ $menu->price }}</td>
                                            <td>
                                                <a href="editmenu/{{ $menu->id }}"
                                                    class="btn btn-primary">Edit</a></button>
                                            </td>
                                            <td>
                                                <a href="/menu/delete/{{ $menu->id }}" class="btn btn-danger">Delete</a></button>
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
@endsection
