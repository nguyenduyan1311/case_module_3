@extends('layouts.admin')
@section('title','Chỉnh sửa thông tin hành khách')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Passenger Edit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('passengers.list')}}">Passengers</a></li>
                        <li class="breadcrumb-item active">Passenger Edit</li>
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
                    <h3 class="card-title">Edit Passenger</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Mã hành khách</label>
                        <input type="text" value="{{$passenger->passenger_id}}" name="passenger_id" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Họ</label>
                        <input type="text" value="{{$passenger->first_name}}" name="surname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" value="{{$passenger->last_name}}" name="middle_first_name" class="form-control">
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
                        <input type="date" value="{{$passenger->birthday}}" name="birthday" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Quốc gia</label>
                        <input type="text" value="{{$passenger->country}}" name="country" class="form-control">
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
                    <input type="submit" value="Save" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
@endsection
