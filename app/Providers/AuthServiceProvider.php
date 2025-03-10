<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define("manage-product",function(User $user){
            return $user->roles === 'magazin'|| $user->roles === 'admin';
        });
        Gate::define("manage-users",function(User $user){
            return $user->roles === 'admin';
        });
        Gate::define("use-product",function(User $user){
            return $user->roles === 'admin' || $user->roles === 'magazin'||$user->roles === 'visiteur';
        });
        Gate::define("manage-commande",function(User $user){
            return $user->roles === 'admin' || $user->roles === 'magazin';
        });
    }
}
