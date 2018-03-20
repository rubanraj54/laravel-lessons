<?php

namespace App\Providers;

use App\Customer;
use App\Observers\CustomerObserver;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Customer::observe(CustomerObserver::class);
        Validator::extend('usa',function($attribute,$value,$parameter,$validator){
            if (strcmp($value,'usa')==0) {
                return true;
            }

            return false;
        });

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
