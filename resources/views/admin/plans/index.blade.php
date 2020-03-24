@extends('admin.layout.admin-template')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">پلن های همسفران اقیانوس آبی</h1>
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
                            <h3 class="card-title">پلن ها</h3>
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
                                    <th>مدت زمان</th>
                                    <th>قیمت</th>
                                    <th>تعداد محتوای در دسترس</th>
                                    <th>عملیات</th>
                                </tr>
                                @foreach($plans as $plan)
                                    <tr>
                                        <td>{{$plan->id}}</td>
                                        <td>{{$plan->name}}</td>
                                        <td>{{$plan->period}}</td>
                                        <td>{{$plan->price}}</td>
                                        <td>{{$plan->count_of_episodes}}</td>
                                        <td class="flex flex-row">
                                            <a href="{{route('plans.edit',$plan->id)}}"><button class="btn btn-primary">ویرایش</button></a>
                                            <form action="{{ route('plans.destroy', $plan->id) }}" method="POST" class="d-inline">
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
