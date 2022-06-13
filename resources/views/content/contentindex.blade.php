@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Content Data</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col" width="200px">Category</th>
                <th scope="col">Title</th>
                <th scope="col" width="500px">Content</th>
                <th scope="col">Photo</th>
                <th scope="col">Updated At</th>
                <th scope="col"><a href="contents/create"><i class="bi bi-plus-circle"></i></th>
            </tr>
        </thead>
        <tbody>
            @php ($no = 1)
            @foreach ($contents as $content)


            <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{$content->get_category->category}}</td>
                <td>{{$content->title}}</td>
                <td>{{$content->content}}</td>
                <td>{{$content->photo}}</td>
                <td>{{$content->updated_at}}</td>
                <td>
                    <a href="/contents/{{$content->id}}"><i class="bi bi-pencil"></i></a>
                    |
                    <a href="/contents/{{$content->id}}/edit"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection