@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/post/{{$post -> id}}" enctype="multipart/form-data" method="post">

        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>EDIT POST</h1>
                </div>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label ">Post Caption</label>

                    <input id="caption" type="username" class="form-control @error('caption') is-invalid @enderror"
                           name="caption" value="{{ old('caption') ?? $post->caption}}" required autocomplete="caption">

                    @error('caption')

                    <strong>{{ $message }}</strong>

                    @enderror
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label ">Post Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">

                    @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row pt-5">
                    <button class="btn btn-primary">Update Post</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
