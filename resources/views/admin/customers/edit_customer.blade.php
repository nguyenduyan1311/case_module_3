@extends('layouts.admin')
@section('title','Chỉnh sửa thông tin khách hàng')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Customer Edit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('customers.list')}}">Customers</a></li>
                        <li class="breadcrumb-item active">Customer Edit</li>
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
                    <h3 class="card-title">Edit Customer</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Mã khách hàng</label>
                        <input type="text" value="{{$customer->customer_id}}" name="customer_id" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Họ</label>
                        <input type="text" value="{{$customer->first_name}}" name="surname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" value="{{$customer->last_name}}" name="middle_first_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Điện thoại di động</label>
                        <input type="text" value="{{$customer->phone}}" name="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" value="{{$customer->email}}" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Số vé</label>
                        <input type="number" value="{{$customer->tickets_number}}" name="tickets_number" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="{{route('customers.list')}}" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Save" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
@endsection
