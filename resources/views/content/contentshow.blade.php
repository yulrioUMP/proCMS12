@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/contents/{{$content->id}}" method="post">
        <div class="mb-3">
            <label class="form-label">Category</label>
            <div>
                {{$content->id_cat}}
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Title</label>
            <div>
                {{$content->title}}
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Content</label>
            <div>
                {{$content->content}}
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Photo</label>
            <div>
                {{$content->photo}}
            </div>
        </div>
        <div class="mb-3">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-primary">DELETE</button>
        </div>
    </form>
</div>
@endsection