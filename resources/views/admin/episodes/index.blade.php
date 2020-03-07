@extends('admin.layout.admin-template')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">داشبورد</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">جدول ریسپانسیو</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                       placeholder="جستجو">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th>شماره</th>
                                <th>کاربر</th>
                                <th>تاریخ</th>
                                <th>وضعیت</th>
                                <th>دلیل</th>
                            </tr>
                            <tr>
                                <td>۱۸۳</td>
                                <td>محمد</td>
                                <td>۱۱-۷-۲۰۱۴</td>
                                <td><span class="badge badge-success">تایید شده</span></td>
                                <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</td>
                            </tr>
                            <tr>
                                <td>۲۱۹</td>
                                <td>حسام</td>
                                <td>۱۱-۷-۲۰۱۴</td>
                                <td><span class="badge bg-danger">در حال بررسی</span></td>
                                <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</td>
                            </tr>
                            <tr>
                                <td>۶۵۷</td>
                                <td>رضا</td>
                                <td>۱۱-۷-۲۰۱۴</td>
                                <td><span class="badge badge-primary">تایید شده</span></td>
                                <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</td>
                            </tr>
                            <tr>
                                <td>۱۷۵</td>
                                <td>پرهام</td>
                                <td>۱۱-۷-۲۰۱۴</td>
                                <td><span class="badge badge-danger">رد شده</span></td>
                                <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </section>
@endsection
