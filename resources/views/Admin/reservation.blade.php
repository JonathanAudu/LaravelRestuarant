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
                            <h3 class="box-title">
                                CUSTOMER RESERVATIONS
                            </h3>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0 ">No.</th>
                                            <th class="border-top-0 text-center">Names</th>
                                            <th class="border-top-0 text-center">Email</th>
                                            <th class="border-top-0 text-center">Phone Number</th>
                                            <th class="border-top-0 text-center">Date</th>
                                            <th class="border-top-0 text-center">Time</th>
                                            <th class="border-top-0 text-center">No. of Guest</th>
                                            <th class="border-top-0 text-center">Message</th>
                                            <th class="border-top-0 text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($reservations as $reservation)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td class="text-center">{{ $reservation->name }}</td>
                                                <td class="text-center">{{ $reservation->email }}</td>
                                                <td class="text-center">{{ $reservation->phone_number }}</td>
                                                <td class="text-center">{{ $reservation->date }}</td>
                                                <td class="text-center">{{ $reservation->time }}</td>
                                                <td class="text-center">{{ $reservation->guest }}</td>
                                                <td class="text-center">{{ $reservation->message }}</td>
                                                <td class="text-end">
                                                    <button type="button" class="btn btn-light"><a>ongoing</a></button>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-secondary"><a>DONE</a></button>

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
