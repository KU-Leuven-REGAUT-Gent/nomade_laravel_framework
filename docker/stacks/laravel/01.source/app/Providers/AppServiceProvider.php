<?php

namespace App\Providers;

use Illuminate\Database\Schema\Builder; // Import Builder where defaultStringLength method is defined
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    function boot()
    {
        /**
         * Fix for MySQL exception:
         * PDOException::("SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes")
         * /app/vendor/laravel/framework/src/Illuminate/Database/Connection.php:463
         *
         * Solution found:
         * https://stackoverflow.com/questions/42244541/laravel-migration-error-syntax-error-or-access-violation-1071-specified-key-wa
         */
        Builder::defaultStringLength(191); // Update defaultStringLength


        URL::forceScheme('https'); // Force HTTPS
    }
}
