@extends('layouts.main')

@section('content')
<div class="row">
    @foreach($episodes as $episode)
        @include('layouts.components.episode-cart')
    @endforeach
</div>
@endsection
