<?php

namespace App\Providers;

use App\Models\students;
use Illuminate\Support\ServiceProvider;
//use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Gate::define('viewPulse', function (students $students) {
        //     return $students->isAdmin();
        // });
    }
}
