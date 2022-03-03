<?php

namespace App\Providers;

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
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // 「最強」だけに適用
        Gate::define('saikyou_only', function ($user) {
            return ($user->permission_id == 1);
        });

        // 「最強」と「普通」に適用
        Gate::define('saikyou_and_futsuu', function ($user) {
            return ($user->permission_id <= 2);
        });

        // 「最強」と「普通」と「最弱」全てに適用
        Gate::define('all', function ($user) {
            return ($user->permission_id <= 3);
        });
    }
}
