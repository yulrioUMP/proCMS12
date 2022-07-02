@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/contents" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Category</label>
            <select name="category" class="form-control">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{$category->category}}</option>
                @endforeach
            </select>
            @error ("category")
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" placeholder="title" name="title" value="{{ old('title') }}">
            @error ("title")
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Content</label>
            <input name="content" class="form-control" id="inputContent" value="{{ old('content')}}">
            @error ("content")
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Photo</label>
            <input type="file" class="form-control" placeholder="photo" name="photo">
            @error ("photo")
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            @csrf
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection