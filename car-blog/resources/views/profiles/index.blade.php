@extends('layouts.app')

@section('content')
<div class="container">
    <div id="DashboardImage" class="row d-flex">
        <img src="{{url('/images/ferrari.png')}}" alt="ferrari">
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome back {{ $user->username ?? 'N/A' }}!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

{{--                        <div><a href="/profile/{{$user -> id}}/edit">Edit Profile</a></div>--}}

                        <div>Title:  {{$user->profile->title ?? 'N/A'}}</div>

                        <div>Bio:  {{$user->profile->bio ?? 'N/A'}}</div>

                        <div>{{$user->posts->count()}} Posts</div>

                        <div><a href="/post/create">Add new post</a></div>

                </div>
            </div>
        </div>
    </div>
    <div class="row pt-5 mb-5">

        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/post/{{$post -> id}}">
                    <img src="/storage/{{$post -> image }}" class="w-100 h-100" alt="postImage">
                </a>

            </div>
        @endforeach



    </div>
</div>
@endsection
