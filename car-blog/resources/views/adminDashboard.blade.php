@extends('layouts.app')

@section('content')
    @can('isAdmin')
<div class="container">
    <table class="table table-hover ">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Created Date</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)

            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->user->username }}</td>
                <td>{{ $post->created_at }}</td>
                <td>
                    {{-- <button type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>--}}

                        <a href="/post/{{$post->id}}/edit">
                            <button type="button" class="btn btn-success">Edit</button>
                        </a>

                        <form action="/post/{{$post->id}}" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger">Delete</button>


                        </form>

                </td>
            </tr>

        @endforeach

        </tbody>
    </table>
</div>
@endcan
@endsection