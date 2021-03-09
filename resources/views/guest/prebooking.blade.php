@extends('layouts.guest')
@section('title','Nhập thông tin cần dùng')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Thông tin liên hệ</h3>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>
                                        <label>Họ</label>
                                        <input type="text" class="form-control" name="surname">
                                    </th>
                                    <th>
                                        <label>Tên đệm & Tên</label>
                                        <input type="text" class="form-control" name="middle_first_name">
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <label>Điện thoại di động</label>
                                        <input type="text" class="form-control" name="phone">
                                    </td>
                                    <td>
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <h4>Thông tin hành khách</h4>
    @for($i=1;$i<=$passengers_number;$i++)
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Hành khách $i</h3>
                            </div>
                            <div class="card-body">
                                <label>Giới tính</label>
                                <select name="gender">
                                    <option>Nam</option>
                                    <option>Nữ</option>
                                </select><br>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>
                                            <label>Họ</label>
                                            <input type="text" class="form-control" name="surname">
                                        </th>
                                        <th>
                                            <label>Tên đệm & Tên</label>
                                            <input type="text" class="form-control" name="middle_first_name">
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <label>Ngày sinh</label>
                                            <input type="date" class="form-control" name="birthday">
                                        </td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endfor
@endsection
