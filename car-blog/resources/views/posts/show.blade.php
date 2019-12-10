@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post -> image}}" class="w-75">
        </div>
        <div class="col-4">
            <div>
                <h3>{{$post -> user -> username}}</h3>
                <p>Caption: {{$post -> caption}}</p>
            </div>
            <a href="/post/{{$post->id}}/edit" class="btn">Edit Post</a>
        </div>
    </div>
</div>
@endsection
