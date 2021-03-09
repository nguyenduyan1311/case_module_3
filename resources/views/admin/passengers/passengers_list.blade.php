@extends('layouts.admin')
@section('title','Danh sách hành khách')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách hành khách</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('customers.list')}}">Passengers</a></li>
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
                                <a class="btn btn-success" href="{{route('passengers.add')}}">Thêm hành khách</a>
                                <thead>
                                <tr>
                                    <th>Mã hành khách</th>
                                    <th>Họ</th>
                                    <th>Tên</th>
                                    <th>Giới tính</th>
                                    <th>Ngày sinh</th>
                                    <th>Quốc gia</th>
                                    <th>Người đặt vé</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($passengers as $passenger)
                                    <tr>
                                        <td>{{ $passenger->passenger_id }}</td>
                                        <td>{{ $passenger->first_name }}</td>
                                        <td>{{ $passenger->last_name }}</td>
                                        <td>{{ $passenger->gender }}</td>
                                        <td>{{ $passenger->birthday }}</td>
                                        <td>{{ $passenger->country }}</td>
                                        <td>{{ $passenger->customer_name }}</td>
                                        <td>
                                            <a class="btn btn-success" href="{{route('passengers.edit',$passenger->id)}}">Sửa</a>
                                            <a class="btn btn-success" onclick="return confirm('Do you want to delete this passenger?')" href="{{route('passengers.delete',$passenger->id)}}">Xoá</a>
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
