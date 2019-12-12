<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\ContactModel;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
		view()->composer('layouts.master', function ($view){ // loads contants to master
			$view->with('contacts', ContactModel::whereIn("email", ["juri.benc@gmail.com","typ2@ukf.com"])->take(2)->get());
		});
		*/
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
