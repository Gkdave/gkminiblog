<?php

namespace App\Providers;

use App\Gates\AdminGate;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
    //   'App\Models\Post' =>'App\Policies\PostPolicy',
            Post::class =>PostPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        // $this->registerPolicies();
    //    Gate::define('isAdmin',function($user){
    //     if($user->email === 'admin@gmail.com'){
    //         return true;
    //     } else {
    //         return false;
    //     }
    //    });
    
    }
}
