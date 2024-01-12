<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach (glob(app_path('Helpers') . '/*.php') as $file) {
            require_once $file;
        }
    }
    
    protected function loadHelpers()
    {
        foreach (glob(__DIR__.'/../Helpers/*.php') as $filename)
        {
            require_once $filename;
        }
    }
    
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
