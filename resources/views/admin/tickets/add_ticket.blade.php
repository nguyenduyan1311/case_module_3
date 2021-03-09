@extends('layouts.admin')
@section('title','Thêm vé')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Ticket Add</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('tickets.list')}}">Tickets</a></li>
                        <li class="breadcrumb-item active">Ticket Add</li>
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
                    <h3 class="card-title">Add Ticket</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Mã vé</label>
                        <input type="text" name="ticket_id" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Người đặt vé</label>
                        <select class="form-control custom-select" name="customer_name">
                            @foreach($customers as $customer)
                                <option>{{ $customer->first_name }} {{ $customer->last_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Hành khách</label>
                        <select class="form-control custom-select" name="passenger_name">
                            @foreach($passengers as $passenger)
                                <option>{{ $passenger->first_name }} {{ $passenger->last_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Chuyến bay</label>
                        <select class="form-control custom-select" name="flight_code">
                            @foreach($flights as $flight)
                                <option>{{ $flight->flight_id }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Loại vé</label>
                        <input type="text" name="ticket_type" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Hạng ghế</label>
                        <input type="text" name="seat_class" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Giá vé</label>
                        <input type="text" name="price" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Trạng thái</label>
                        <select class="form-control custom-select" name="status">
                            <option>Received</option>
                            <option>Exchanged</option>
                            <option>Canceled</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="{{route('tickets.list')}}" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Create new Ticket" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
@endsection
