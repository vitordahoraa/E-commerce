<?php

namespace App\Providers;

<<<<<<< HEAD
=======

use App\Models\Product;
use App\Policies\ProductPolicy;
>>>>>>> develop
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
<<<<<<< HEAD
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
=======
            Product::class => ProductPolicy::class,
>>>>>>> develop
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
