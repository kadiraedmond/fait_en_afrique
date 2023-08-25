<?php

namespace App\Providers;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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
        Gate::define('client', function (User $user) {
            return $user->role === 'client';
        });
        Gate::define('grossiste', function (User $user) {
            return $user->role === 'grossiste';
        });
        Gate::define('logisticien', function (User $user) {
            return $user->role === 'logisticien';
        });
        Gate::define('admin', function (User $user) {
            return $user->role === 'admin';
        });
        //
    }
}
