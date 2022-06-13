@extends('layouts.app')

@section('content')
<div class="container">
    <form method="post" action="{{url('categories')}}">
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Category</label>
            <div class="col-sm-10">
                <input type="text" name="category" class="form-control">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-auto">
                @csrf
                <button type="submit" class="btn btn-primary mb-3">
                    <i class="bi bi-plus-circle"></i> Submit
                </button>
            </div>
        </div>
    </form>
</div>
@endsection('content')