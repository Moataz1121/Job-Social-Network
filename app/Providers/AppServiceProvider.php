<?php

namespace App\Providers;

use App\Models\Comment;
use App\Models\Employer;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('delete-comment', function (User $user, Comment $comment) {
            return $user->id === $comment->user->id;});
            Gate::define('show-post', function (Employer $employer, Post $post) {
                return $employer->id === $post->emp_id;});
        Paginator::useBootstrap();
        
    }
}
