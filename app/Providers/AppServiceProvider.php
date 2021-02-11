<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; 
use App\models\menu;
use App\models\partinars;
use App\models\contact;
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
    public function boot()
    {
        Schema::defaultStringLength(191);
            view()->composer('userViewInc.navbar', function ($view) {
                if(session('locale') == 'fa' || session('locale') == 'ps' ){
                $view->with('menus', menu::where('status','=',1)->orderBy('id', 'desc')->get());
                }else{
                $view->with('menus', menu::where('status','=',1)->orderBy('id', 'Asc')->get());
                }
            });
        view()->composer('userViewInc.footer', function ($view) {
            $view->with('menus', menu::where('status','=',1)->get());
        });
        view()->composer('userViewInc.footer', function ($view) {
            $view->with('partinars', partinars::where('status','=',1)->get());
        });
        view()->composer('userViewInc.footer', function ($view) {
            $view->with('contactus', contact::get()->take(1));
        });
      
    }
}
