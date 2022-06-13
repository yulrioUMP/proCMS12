@extends('layouts.app')

@section('content')
<div class="container">
    <form method="post" action="{{url('categories')}}/{{$category['id']}}">
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Category</label>
            <div class="col-sm-10">
                <input type="text" name="category" class="form-control" value="{{$category['category']}}">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-auto">
                @csrf
                @method('PUT')
                <button type="submit" class="btn btn-primary mb-3">
                    <i class="bi bi-pencil"></i> Update
                </button>
            </div>
        </div>
    </form>
</div>
@endsection('content')