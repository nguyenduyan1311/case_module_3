@extends('layouts.admin')
@section('title','Danh sách chuyến bay')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách chuyến bay</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('passengers.list')}}">Flights</a></li>
                        <li class="breadcrumb-item active">Danh sách</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table style="text-align: center" id="example1" class="table table-bordered table-striped">
                                <a class="btn btn-success" href="{{route('flights.add')}}">Thêm chuyến bay</a>
                                <thead>
                                <tr>
                                    <th>Số hiệu</th>
                                    <th>Hãng bay</th>
                                    <th>Máy bay</th>
                                    <th>Điểm đi</th>
                                    <th>Điểm đến</th>
                                    <th>Ngày đi</th>
                                    <th>Giờ đi</th>
                                    <th>Giờ đến</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($flights as $flight)
                                    <tr>
                                        <td>{{ $flight->flight_id }}</td>
                                        <td>{{ $flight->airline }}</td>
                                        <td>{{ $flight->airplane }}</td>
                                        <td>{{ $flight->starting_place }}</td>
                                        <td>{{ $flight->destination_place }}</td>
                                        <td>{{ $flight->starting_date }}</td>
                                        <td>{{ $flight->scheduled_time }}</td>
                                        <td>{{ $flight->estimated_time }}</td>
                                        <td>
                                            <a class="btn btn-success" href="{{route('flights.edit',$flight->id)}}">Sửa</a>
                                            <a class="btn btn-success" onclick="return confirm('Do you want to delete this flight?')" href="{{route('flights.delete',$flight->id)}}">Xoá</a>
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
    </section>
@endsection
