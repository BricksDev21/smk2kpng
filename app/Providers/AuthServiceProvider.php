<?php
namespace App\Providers;

use App\Contracts\Likeable;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        // your policies...
    ];

    public function boot()
    {
        $this->registerPolicies();
    }
}
