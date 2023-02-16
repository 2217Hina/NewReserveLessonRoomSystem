<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
       $this->registerPolicies();

        Gate::define('manage1', function (User $user) {
        return $user->admin_flag === 0;
    });
    
        

        Gate::define('manage2', function (User $user) {
        return $user->admin_flag === 1;
    });
    
    

        Gate::define('general', function (User $user) {
        return $user->admin_flag === 2;
    });
    
    }
}
