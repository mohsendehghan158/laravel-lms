@extends('admin.layout.admin-template')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">ویرایش کاربر</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            @include('admin.layout.validation-errors')
            <div class="card card-default">
                <div class="card-body">
                    <div class="row flex-column">
                        <form action="{{route('users.update',$user->id)}}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label>نام</label>
                                <input type="text" class="form-control" name="name" value="{{$user->name}}">
                            </div>
                            <div class="form-group">
                                <label>ایمیل</label>
                                <input type="text" class="form-control" name="email" value="{{$user->email}}">
                            </div>
                            <div class="form-group">
                                <label>شماره تماس</label>
                                <input type="text" class="form-control" name="phone" value="{{$user->phone}}">
                            </div>
                            <div class="form-group">
                                <label>رمز عبور</label>
                                <input type="text" class="form-control" name="password">
                            </div>
                            <button class="btn btn-primary">ایجاد</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection