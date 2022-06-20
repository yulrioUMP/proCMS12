@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/contents/{{$content->id}}" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Category</label>
            <select name="category" class="form-control">
                @foreach ($categories as $category)
                <option value="{{$category->id}}" {{ $category->id == $content->cat_id ? "selected" : ""}}>
                    {{$category->category}}
                </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" placeholder="title" name="title" value="{{$content->title}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Content</label>
            <input type="text" class="form-control" placeholder="content" name="content" value="{{$content->content}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Photo</label>
            <input type="file" class="form-control" placeholder="photo" name="photo">
            <div>
                <br>
                <img src="{{url('uploads')}}/{{$content->photo}}" width="120px">
            </div>
        </div>
        <div class="mb-3">
            @csrf
            @method('PUT')
            <input type="hidden" name="photo_old" value="{{$content->photo}}">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
@endsection