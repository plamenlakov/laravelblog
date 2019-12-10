@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user-> id }}" enctype="multipart/form-data" method="post">

        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>EDIT ACCOUNT</h1>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label ">Title</label>

                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                           name="title" value="{{ '' ?? $user->profile->title }}" required autocomplete="title">

                    @error('title')

                    <strong>{{ $message }}</strong>

                    @enderror
                </div>

                <div class="form-group row">
                    <label for="bio" class="col-md-4 col-form-label ">Bio</label>

                    <input id="bio" type="text" class="form-control @error('bio') is-invalid @enderror"
                           name="bio" value="{{ '' ?? $user->profile->bio }}" required autocomplete="bio">

                    @error('bio')

                    <strong>{{ $message }}</strong>

                    @enderror
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label pb-5">Profile Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">

                    @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row pt-5">
                    <button class="btn btn-primary">Save Changes</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
