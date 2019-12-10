
@extends('layouts.account')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="margin-top: 15px;">
            <div class="card">
                <div class="card-header">
                    <h1 style="font-family: Roboto">Welcome to your account page, {{ Auth::user()-> username }}!</h1>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Account details</h5>
                    <p>Title of your account: {{ $user->profile->title ?? 'N/A'}}</p>
                    <p>Bio of your account: {{ $user->profile->bio ?? 'N/A' }}</p>
                    <a href="/profile/{{ Auth::user()-> id }}/edit" class="btn btn-primary">Change account info</a>
                </div>
            </div>
        </div>
    </div>
</div>

