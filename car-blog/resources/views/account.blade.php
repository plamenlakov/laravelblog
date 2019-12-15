
@extends('layouts.account')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="margin-top: 15px;">
            <div class="card">
                <div class="card-header">
                    <h1>Welcome to your account page, {{ Auth::user()-> username }}!</h1>
                </div>
                <div class="card-body">

                    <h3>User Info</h3>
                    <p>Username:  {{ Auth::user()-> username }}</p>
                    <p>Email:  {{ Auth::user()-> email }}</p>

                    <h3>Profile Info</h3>
                    <p>Title of your account:  {{ Auth::user()->profile->title }}</p>
                    <p>Bio of your account:  {{ Auth::user()->profile->bio }}</p>

                    <a href="/profile/{{ Auth::user()-> id }}/edit" class="btn btn-primary">Change profile info</a>
                </div>
            </div>
        </div>
    </div>
</div>

