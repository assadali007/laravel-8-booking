<?php

namespace App\Providers;

use App\Libraries\Notifications;
use App\Libraries\NotificationsInterface;
use Illuminate\Notifications\Notification;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Register is used to register those classes that you want to make available inside of your laravel application that
        // are not dependent upon any other classes.

    /*   $this->app->bind(Notifications::class,function ($app){
          return new Notifications();
        });
        */
       
     # there are two way to define interface in the example;
      /*  $this->app->bind('App\Libraries\NotificationsInterface', function($app) {
            return new \App\Libraries\Notifications();
        });
        */
        $this->app->bind(NotificationsInterface::class, Notifications::class);

    
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // allow to define classess and make those class available accross your laravel application that do depend 
        // on other classess for information
    }
}
