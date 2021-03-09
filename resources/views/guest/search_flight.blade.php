@extends('layouts.guest')
@section('title','Tìm kiếm chuyến bay')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Search Flight</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <form action="{{route('search_flight')}}" method="post">
            @csrf
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Search</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <select name="ticket_type">
                        <option>Một chiều</option>
                        <option>Khứ hồi</option>
                    </select>
                    <div class="form-group">
                        <label>Điểm khởi hành</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-plane-departure"></i></span>
                            </div>
                            <input type="text" name="starting_airport" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Điểm đến</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-plane-arrival"></i></span>
                            </div>
                            <input type="text" name="destination_airport" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Số hành khách</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-users"></i></span>
                            </div>
                            <input type="number" name="passengers_number" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Ngày đi</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            </div>
                            <input type="date" name="starting_date" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Hạng ghế</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-wheelchair"></i></span>
                            </div>
                            <select class="form-control custom-select" name="seat_class">
                                <option>Phổ thông</option>
                                <option>Phổ thông đặc biệt</option>
                                <option>Thương gia</option>
                                <option>Hạng nhất</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="submit" value="Tìm chuyến bay" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
@endsection
