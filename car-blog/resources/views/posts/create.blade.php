@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/post" enctype="multipart/form-data" method="post">
            @csrf

            <div class="row">
                <div class="col-8 offset-2">
                    <h1 class="text-center">Add a new post.</h1>
                    <div class="form-group row">
                        <div class="col-lg-6 offset-lg-3 pb-2">
                            <input id="title" type="text"
                                   class="form-control @error('title') is-invalid @enderror" name="title"
                                   value="{{ old('title') }}" autocomplete="title" autofocus placeholder="Title">

                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="col-lg-8 offset-lg-2 pb-2">
                        <textarea id="text" class="form-control @error('text') is-invalid @enderror"
                                  name="text"
                                  value="{{ old('text') }}" autocomplete="text" autofocus rows="5"
                                  placeholder="Post Text"></textarea>
                            @error('text')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="col-lg-6 offset-lg-3 input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Choose a image</label>
                            </div>
                        </div>
                        @error('image')
                        <div class="w-100 text-center text-danger"><strong >{{ $message }}</strong></div>
                        @enderror

                        <div class="col-lg-12 d-flex justify-content-center pt-2">
                            <button type="submit" class="btn btn-dark left">Add Post</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
