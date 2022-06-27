@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Home</h1>
    <hr>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($contents as $content )
        <div class="col">
            <div class="card h-100">
                <img src="{{url('uploads/')}}/{{$content->photo}}" height="100%" class="card-img-top" alt="{{$content->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{$content->title}}</h5>
                    <p class="card-text">{{ substr($content->content,0,150)."..." }}</p>
                    <a href="{{url('/')}}/read/{{$content->id}}" class="card-link">Read more</a>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated: {{ $content->updated_at }}</small>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection