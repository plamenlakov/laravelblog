@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="/storage/{{$user->profile->image}}"
                 class="rounded-circle p-3 w-100">
        </div>
        <div class="col-9 pt-5">
            <h1><strong>{{$user->name}}</strong></h1>

            <h4>{{$user->profile->title}}</h4>
            <p>{{$user->profile->bio}}</p>
        </div>
    </div>
    <div class="container">
        @if(auth()->check() && auth()->user()->id == $user->id)
        <div class="row p-3 mb-2 mt-5 flex-row-reverse">
            <a href="/post/create"><button type="button" class="btn btn-dark left">Add Post</button></a>
        </div>
        @endif
    </div>
    <div class="row pt-5 mb-5">

        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/post/{{$post -> id}}">
                    <img src="/storage/{{$post -> image }}" class="w-100 pb-1" alt="postImage">
                </a>
                <h4>{{$post -> title}}</h4>
            </div>
        @endforeach

    </div>
</div>
@endsection
