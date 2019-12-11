@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-4">
            <img src="/storage/{{$post -> image}}" class="w-75">
        </div>
        <div class="col-8">
            <div>
                <h3>{{$post -> title}}</h3>
                <p>{{$post -> text}}</p>
            </div>

            <form method="post" action="/post/{{$post->id}}/">
                @csrf
                @method('DELETE')
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                        <button type="button" class="btn btn-secondary"><a href="/post/{{$post->id}}/edit" class="btn text-white">Edit</a></button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
