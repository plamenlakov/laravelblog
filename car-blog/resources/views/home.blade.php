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
                <div class="col-8">
                    <h4>{{$post -> title}}</h4>
                    <p>{{$post -> created_at -> format('m/d/Y')}}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
