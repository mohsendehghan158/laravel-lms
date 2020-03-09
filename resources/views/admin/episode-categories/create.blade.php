@extends('admin.layout.admin-template')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">افزودن دسته جدید</h1>
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
                        <form action="{{route('episode-categories.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>نام</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group">
                                <label>تصویر</label>
                                <input type="text" class="form-control" name="image">
                            </div>
                            <div class="form-group">
                                <label>آیکون</label>
                                <input type="text" class="form-control" name="icon">
                            </div>
                            <div class="form-group">
                                <label>ترتیب</label>
                                <input type="text" class="form-control" name="order">
                            </div>
                            <button class="btn btn-primary">ایجاد</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection