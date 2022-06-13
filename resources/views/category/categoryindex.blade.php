@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Category Data</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category</th>
                <th scope="col">Created At</th>
                <th scope="col">Update At</th>
                <th scope="col"><a href="categories/create"><i class="bi bi-plus-circle"></i></th>
            </tr>
        </thead>
        <tbody>
            @php ($no = 1)
            @foreach ($categories as $category)


            <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{$category->category}}</td>
                <td>{{$category->created_at}}</td>
                <td>{{$category->updated_at}}</td>
                <td>
                    <a href="/categories/{{$category->id}}"><i class="bi bi-pencil"></i></a>
                    |
                    <a href="/categories/{{$category->id}}/edit"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection