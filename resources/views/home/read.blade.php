@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card" style="width: 100%;">
        <img src="{{url('uploads/')}}/{{$content->photo}}" class="card-img-top">
        <div class="card-body">
            <h1 class="card-title">{{ $content->title }}</h1>
            <p class="card-text">{!! nl2br($content->content) !!}</p>
        </div>
    </div>
</div>
@endsection