<?php

namespace App\Providers;

use App\Store\StoreVisitor;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // put the landing time in session
        \Session::put('start', \Carbon\Carbon::now());
        // initiate saving of visitor data
        $visitor = new StoreVisitor;
        $visitor->setVisitorData();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
