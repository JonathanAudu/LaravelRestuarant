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
            


            <div class="col-lg-10 col-xlg-9 col-md-12 mx-auto">
                <div class="card ">
                    <div class="card-body ">
                        <h3 class="box-title text-center"><strong>UPDATE CATEGORY</strong><a href="../Category"
                            class="btn btn-primary float-end pt-1">Go Back</a></h3>
                        <form action="{{ '/updatecategory' }}" method="POST">
                            @csrf

                            <div class="form-group row">
                                <input type="text" name="id" class="form-control"
                                    value="{{ $category->id }}" hidden>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"><strong>CATEGORY_NAME</strong></label>
                                <div class="col-sm-10">
                                    <input type="text" name="category_name" class="form-control"
                                        value="{{ $category->category_name }}" placeholder="{{ $category->category_name }}">
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary ">Update Menu</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer text-center">2021 © JonLee Admin</footer>
    </div>
    @endsection

