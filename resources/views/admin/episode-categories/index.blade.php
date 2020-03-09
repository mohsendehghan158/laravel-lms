@extends('admin.layout.admin-template')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">دسته بندی ویدیوها</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @include('admin.layout.success')
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">دسته ها</h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                           placeholder="جستجو">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <th>شناسه</th>
                                    <th>نام</th>
                                    <th>تصویر</th>
                                    <th>آیکون</th>
                                    <th>ترتیب</th>
                                    <th>عملیات</th>
                                </tr>
                                @foreach($episode_categories as $episode_category)
                                    <tr>
                                        <td>{{$episode_category->id}}</td>
                                        <td>{{$episode_category->name}}</td>
                                        <td>{{$episode_category->image}}</td>
                                        <td>{{$episode_category->icon}}</td>
                                        <td>{{$episode_category->order}}</td>
                                        <td class="flex flex-row">
                                            <a href="{{route('episode-categories.edit',$episode_category->id)}}"><button class="btn btn-primary">ویرایش</button></a>
                                            <form action="{{ route('episode-categories.destroy', $episode_category->id) }}" method="POST" class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger">حذف</button>
                                            </form>
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
