<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('duyetphieu', function($User){
            if($User->permission == '0' || $User->permission == '1'){ return true; }
        });
        Gate::define('ql-phong', function($User){
            if($User->permission == '0'){ return true; }
        });
        Gate::define('ql-nv', function($User){
            if($User->permission == '0'){ return true; }
        });
        Gate::define('locphieu', function($User){
            if($User->permission == '0'){ return true; }
        });
    }
}
