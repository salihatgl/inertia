<?php
 
namespace App\Providers;
 
use App\Models\User;
use App\Policies\UserPolicy;
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
        User::class => UserPolicy::class,
    ];
 
    /**
     * Register any application authentication / authorization services.
     */
    public function boot()
    {
        $this->registerPolicies();
    
        Gate::define('createUser', 'App\Policies\UserPolicy@create');
    }
}