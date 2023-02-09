<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
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

        // Post authorizations
        Gate::define('post:view', function() {
            return auth()->user()->is_active && in_array('post:view', auth()->user()->permissions);
        });
        Gate::define('post:create', function() {
            return auth()->user()->is_active && in_array('post:create', auth()->user()->permissions);
        });
        Gate::define('post:update', function() {
            return auth()->user()->is_active && in_array('post:update', auth()->user()->permissions);
        });
        Gate::define('post:delete', function() {
            return auth()->user()->is_active && in_array('post:delete', auth()->user()->permissions);
        });

        // Event authorizations
        Gate::define('event:view', function() {
            return auth()->user()->is_active && in_array('event:view', auth()->user()->permissions);
        });
        Gate::define('event:create', function() {
            return auth()->user()->is_active && in_array('event:create', auth()->user()->permissions);
        });
        Gate::define('event:update', function() {
            return auth()->user()->is_active && in_array('event:update', auth()->user()->permissions);
        });
        Gate::define('event:delete', function() {
            return auth()->user()->is_active && in_array('event:delete', auth()->user()->permissions);
        });

        // Page authorizations
        Gate::define('page:view', function() {
            return auth()->user()->is_active && in_array('page:view', auth()->user()->permissions);
        });
        Gate::define('page:create', function() {
            return auth()->user()->is_active && in_array('page:create', auth()->user()->permissions);
        });
        Gate::define('page:update', function() {
            return auth()->user()->is_active && in_array('page:update', auth()->user()->permissions);
        });
        Gate::define('page:delete', function() {
            return auth()->user()->is_active && in_array('page:delete', auth()->user()->permissions);
        });

        // Menu authorizations
        Gate::define('menu:view', function() {
            return auth()->user()->is_active && in_array('menu:view', auth()->user()->permissions);
        });
        Gate::define('menu:create', function() {
            return auth()->user()->is_active && in_array('menu:create', auth()->user()->permissions);
        });
        Gate::define('menu:update', function() {
            return auth()->user()->is_active && in_array('menu:update', auth()->user()->permissions);
        });
        Gate::define('menu:delete', function() {
            return auth()->user()->is_active && in_array('menu:delete', auth()->user()->permissions);
        });

        // SEO authorizations
        Gate::define('seo:view', function() {
            return auth()->user()->is_active && in_array('seo:view', auth()->user()->permissions);
        });
        Gate::define('seo:create', function() {
            return auth()->user()->is_active && in_array('seo:create', auth()->user()->permissions);
        });
        Gate::define('seo:update', function() {
            return auth()->user()->is_active && in_array('seo:update', auth()->user()->permissions);
        });
        Gate::define('seo:delete', function() {
            return auth()->user()->is_active && in_array('seo:delete', auth()->user()->permissions);
        });

        // User management authorizations
        Gate::define('user:view', function() {
            return auth()->user()->is_active && in_array('user:view', auth()->user()->permissions);
        });
        Gate::define('user:create', function() {
            return auth()->user()->is_active && in_array('user:create', auth()->user()->permissions);
        });
        Gate::define('user:update', function() {
            return auth()->user()->is_active && in_array('user:update', auth()->user()->permissions);
        });
        Gate::define('user:delete', function() {
            return auth()->user()->is_active && in_array('user:delete', auth()->user()->permissions);
        });

    }
}
