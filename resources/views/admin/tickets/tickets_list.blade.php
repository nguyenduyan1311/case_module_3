@extends('layouts.admin')
@section('title','Danh sách vé')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách vé</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('tickets.list')}}">Tickets</a></li>
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
                                <a class="btn btn-success" href="{{route('tickets.add')}}">Thêm vé</a>
                                <thead>
                                <tr>
                                    <th>Mã vé</th>
                                    <th>Tên hành khách</th>
                                    <th>Người đặt vé</th>
                                    <th>Số hiệu chuyến bay</th>
                                    <th>Loại vé</th>
                                    <th>Hạng ghế</th>
                                    <th>Giá vé</th>
                                    <th>Trạng thái</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tickets as $ticket)
                                    <tr>
                                        <td>{{ $ticket->ticket_id }}</td>
                                        <td>{{ $ticket->passenger_name }}</td>
                                        <td>{{ $ticket->customer_name }}</td>
                                        <td>{{ $ticket->flight_code }}</td>
                                        <td>{{ $ticket->ticket_type }}</td>
                                        <td>{{ $ticket->seat_class }}</td>
                                        <td>{{ $ticket->price }}</td>
                                        <td>{{ $ticket->status }}</td>
                                        <td>
                                            <a class="btn btn-success" href="{{route('tickets.edit',$ticket->id)}}">Sửa</a>
                                            <a class="btn btn-success" onclick="return confirm('Do you want to delete this ticket?')" href="{{route('tickets.delete',$ticket->id)}}">Xoá</a>
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
