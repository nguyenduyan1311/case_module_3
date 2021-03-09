@extends('layouts.admin')
@section('title','Chỉnh sửa thông tin chuyến bay')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Flight Edit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('flights.list')}}">Flights</a></li>
                        <li class="breadcrumb-item active">Flight Edit</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <form method="post">
            @csrf
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Flight</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Số hiệu</label>
                        <input type="text" value="{{$flight->flight_id}}" name="flight_id" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Hãng bay</label>
                        <input type="text" value="{{$flight->airline}}" name="airline" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Máy bay</label>
                        <input type="text" value="{{$flight->airplane}}" name="airplane" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Điểm đến</label>
                        <input type="text" value="{{$flight->starting_place}}" name="starting_place" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Điểm đi</label>
                        <input type="text" value="{{$flight->destination_place}}" name="destination_place" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Ngày đi</label>
                        <input type="date" value="{{$flight->starting_date}}" name="starting_date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Giờ đi</label>
                        <input type="time" value="{{$flight->scheduled_time}}" name="scheduled_time" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Giờ đến</label>
                        <input type="time" value="{{$flight->estimated_time}}" name="estimated_time" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="{{route('flights.list')}}" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Save" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
@endsection
