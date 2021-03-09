@extends('layouts.admin')
@section('title','Danh sách khách hàng')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách khách hàng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('customers.list')}}">Customers</a></li>
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
                            <table id="example1" class="table table-bordered table-striped" style="text-align: center">
                                <a class="btn btn-success" href="{{route('customers.add')}}">Thêm khách hàng</a>
                                <thead>
                                <tr>
                                    <th>Mã khách hàng</th>
                                    <th>Họ</th>
                                    <th>Tên</th>
                                    <th>Điện thoại di động</th>
                                    <th>Email</th>
                                    <th>Số vé</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($customers as $customer)
                                    <tr>
                                        <td>{{ $customer->customer_id }}</td>
                                        <td>{{ $customer->first_name }}</td>
                                        <td>{{ $customer->last_name }}</td>
                                        <td>{{ $customer->phone }}</td>
                                        <td>{{ $customer->email }}</td>
                                        <td>{{ $customer->tickets_number }}</td>
                                        <td>
                                            <a class="btn btn-success" href="{{route('customers.edit',$customer->id)}}">Sửa</a>
                                            <a class="btn btn-success" onclick="return confirm('Do you want to delete this customer?')" href="{{route('customers.delete',$customer->id)}}">Xoá</a>
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
