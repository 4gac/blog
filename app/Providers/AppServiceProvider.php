<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\ContactModel;
use App\Models\UniversityModel;
use App\Models\Post;
use App\Models\Country;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
		view()->composer('layouts.master', function ($view){ // loads contants to master
			$view->with('unis', UniversityModel::all())->with('posts', Post::all())->with('countries', Country::all());
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
