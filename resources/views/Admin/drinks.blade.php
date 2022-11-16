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
                        <h3 class="box-title"><strong>Drinks Table</strong></h3>
                        <button><a href="adddrink">Add Drink</a></button>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">No.</th>
                                        <th class="border-top-0"> Drink-Name</th>
                                        <th class="border-top-0"> Drink-image</th>
                                        <th class="border-top-0">Drink-Description</th>
                                        <th class="border-top-0">Drink-Price</th>
                                        <th class="border-top-0">ACTION</th>
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
                                            <td><img src=".\uploads\drink_images\{{ $drink->drink_image }}" alt=""
                                                    width="100px"></td>
                                            <td>{{ $drink->drink_description }}</td>
                                            <td>{{ $drink->drink_price }}</td>
                                            <td>
                                                <p><button type="button" class="btn btn-light"><a
                                                            href="">Edit</a></button></p>
                                                <p><button type="button" class="btn btn-danger"><a
                                                            href="">Delete</a></button></p>
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
