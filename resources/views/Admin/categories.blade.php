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
                            <li><a href="#" class="fw-normal"><strong>ADMIN</strong></a></li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="container-fluid">

                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title"><strong>CATEGORY DETAILS</strong>
                                <a href="/addcategory" class="btn btn-primary float-end">Add Categories</a>
                            </h3>

                            @if (session('message'))
                                <div class="alert alert-success">{{ session('message') }}</div>
                            @endif

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0 ">No.</th>
                                            <th class="border-top-0 text-center">Category Name</th>
                                            <th class="border-top-0 text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($categorys as $category)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td class="text-center">{{ $category->category_name }}</td>
                                                <td class="text-end">
                                                    <button type="button" class="btn btn-light"><a
                                                            href="editcategory/{{ $category->id }}"> EDIT </a></button>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger"><a
                                                            href="category/delete/{{ $category->id }}">DELETE</a></button>

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
