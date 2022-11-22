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
                            <li><a href="/dashboard" class="fw-normal"> <strong>ADMIN</strong></a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            


            <div class="col-lg-10 col-xlg-9 col-md-12 mx-auto">
                <div class="card ">
                    <div class="card-body ">
                        <h3 class="box-title text-center"><strong>ADD DRINK LIST</strong> </h3>
                        <form action="{{ '/adddrink' }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"><strong>SELECT CATEGORY</strong></label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="category_id">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"><strong>DRINK-NAME</strong></label>
                                <div class="col-sm-10">
                                    <input type="text" name="drink_name" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"><strong>DRINK-DESCRIPTION</strong></label>
                                <div class="col-sm-10">
                                    <textarea rows="5" name="drink_description" class="form-control p-2 border-2"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"><strong>DRINK-IMAGE</strong></label>
                                <div class="col-sm-10">
                                    <input type="file" name="drink_image" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"><strong>DRINK-PRICE</strong></label>
                                <div class="col-sm-10">
                                    <input type="text" name="drink_price" class="form-control">
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary ">Add Drink</button>
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
