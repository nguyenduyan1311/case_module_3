@extends('layouts.guest')
@section('title','Danh sách các chuyến bay')
@section('content')
    <section class="content">
        <div class="container-fluid">
            @foreach($flights as $flight)
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>{{$flight->airline}}</th>
                                        <th>{{$flight->scheduled_time}}</th>
                                        <th><i class="fas fa-plane"></i></th>
                                        <th>{{$flight->estimated_time}}</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>{{$flight->starting_airport}}</td>
                                            <td></td>
                                            <td>{{$flight->destination_airport}}</td>
                                            <td><a class="btn btn-danger" href="{{route('prebooking')}}">Chọn</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
