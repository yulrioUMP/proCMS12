@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Photo</th>
                <th scope="col">Update At</th>
                <th scope="col" width="80"><a href="contents/create"><i class="bi bi-plus-square-fill"></i></a></th>
            </tr>
        <tbody>
            @php ($no = 1)
            @foreach ($contents as $content )
            <tr>
                <td scope="row">{{ $no++ }}</td>
                <td>{{$content->get_category['category']}}</td>
                <td>{{$content['title']}}</td>
                <td>{{ substr($content->content,0,150)."..." }}</td>
                <td>
                    <img src="uploads/{{$content['photo']}}" width="120px">
                </td>
                <td>{{$content['updated_at']}}</td>
                <td>
                    <a href="/contents/{{$content['id']}}/edit"><i class="bi bi-pencil-fill"></i></a>
                    <a href="/contents/{{$content['id']}}"><i class="bi bi-trash-fill"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </thead>
    </table>
</div>
@endsection