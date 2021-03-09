@extends('layouts.admin')
@section('title','Thêm hành khách')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Passenger Add</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('passengers.list')}}">Passengers</a></li>
                        <li class="breadcrumb-item active">Passenger Add</li>
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
                    <h3 class="card-title">Add Passenger</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Mã hành khách</label>
                        <input type="text" name="passenger_id" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Họ</label>
                        <input type="text" name="first_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" name="last_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Giới tính</label>
                        <select class="form-control custom-select" name="gender">
                            <option>Nam</option>
                            <option>Nữ</option>
                            <option>Khác</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Ngày sinh</label>
                        <input type="date" name="birthday" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Quốc gia</label>
                        <select name="country">
                            @foreach($countries as $country)
                                <option>{{ $country->Name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Người đặt vé</label>
                        <select class="form-control custom-select" name="customer_name">
                            @foreach($customers as $customer)
                                <option>{{ $customer->first_name }} {{ $customer->last_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="{{route('passengers.list')}}" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Create new Passenger" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
@endsection
