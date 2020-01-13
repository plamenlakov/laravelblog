<?php

namespace App\Providers;

use App\Policies\PostPolicy;
use App\Post;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Post::class => PostPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // define a admin user role
        // returns true if user role is set to admin
        Gate::define('isAdmin', function($user) {
            return $user->role == 'admin';
        });

        // define a editor user role
        // returns true if user role is set to editor
        Gate::define('isEditor', function($user) {
            return $user->role == 'editor';
        });

        // define a author user role
        // returns true if user role is set to author
        Gate::define('isRegistered', function($user) {
            return $user->role == 'registered';
        });

    }
}
