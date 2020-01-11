@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-4 pb-4">
                    <a href="/post/{{$post -> id}}">
                        <img src="/storage/{{$post -> image }}" class="w-100 pb-1" alt="postImage">
                    </a>
                </div>
                <div class="col-8 d-flex justify-content-center flex-column">
                    <h4 class="font-weight-bold m-0">{{$post -> title}}</h4>
                    <p class="font-weight-light">by <a href="/profile/{{$post->user->id}}">{{$post->user->username}}</a> on {{$post -> created_at -> format('M d, Y - H:i')}}</p>
                    <p>
                        {{ Str::limit(strip_tags($post->text), 500) }}
                        @if (strlen(strip_tags($post->text)) > 500)
                            <a href="/post/{{$post -> id}}" class="btn btn-info btn-sm">Read More</a>
                        @endif
                    </p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
