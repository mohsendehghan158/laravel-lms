@extends('layouts.main')

@section('content')
    {{--    header--}}
    <div class="alert alert-success">
        {{$episode->title}}
    </div>
    {{--end header--}}
    <div class="row">
        {{--    sidebar--}}
        <div class="col-md-3">
            <div class="alert alert-info">
                مدت زمان:
                {{$episode->time}}
            </div>
            <div class="alert alert-info">
                دسته بندی:
                {{$episode->category->name}}
            </div>
        </div>
        {{--    end sidebar--}}
        {{--    content--}}
        <div class="col-md-9">
            <div class="row">
                <video poster="{{$episode->image}}" id="player" playsinline controls>
                    <source src="{{$episode->full_video}}" type="video/mp4"/>
                    <source src="/path/to/video.webm" type="video/webm"/>

                    <!-- Captions are optional -->
                    <track kind="captions" label="English captions" src="/path/to/captions.vtt" srclang="en" default/>
                </video>
            </div>
            <div class="row mt-3">
                <div class="card w-100">
                    <div class="card-header">
                        توضیحات
                    </div>
                    <div class="card-body">
                        {{$episode->description}}
                    </div>
                </div>
            </div>
        </div>
        {{--    end content--}}
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" href="https://cdn.plyr.io/3.5.10/plyr.css"/>
@endpush
@push('scripts')
    <script src="https://cdn.plyr.io/3.5.10/plyr.js"></script>
@endpush
