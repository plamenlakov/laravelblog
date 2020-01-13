@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-4">
            <img src="/storage/{{$post -> image}}" class="w-75">
        </div>
        <div class="col-8">
            <div>
                <h3 class="font-weight-bold">{{$post -> title}}</h3>
                <p class="text-justify">{{$post -> text}}</p>
            </div>

            <form method="post" action="/post/{{$post->id}}/">
                @csrf
                @method('DELETE')
                @can('update', $post)
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                        <button type="button" class="btn btn-secondary"><a href="/post/{{$post->id}}/edit" class="btn text-white">Edit</a></button>
                        @can('delete', $post)
                            <button type="submit" class="btn btn-danger">Delete</button>
                        @endcan
                    </div>
                </div>
                @endcan
            </form>

        </div>
    </div>
</div>
@endsection
