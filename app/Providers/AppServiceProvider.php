<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Lang;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        // Provide AdminCP Menu Composer
        View::composer('admin.*', function($view) {
            $menu = array();
            $result = Event::fire(new \App\Events\AdminMenuRegistration);
            foreach($result as $res) {
                foreach($res as $section => $links) {
                    if(!isset($menu[$section]))
                        $menu[Lang::get($section)] = array();
                        
                    $menu[Lang::get($section)] = array_merge($menu[Lang::get($section)], $links);
                }
            }
            ksort($menu);
            $view->with('menu', $menu);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //For quick scaffolding during local development locally.
        if ($this->app->environment() == 'local') {
            $this->app->register('Appzcoder\CrudGenerator\CrudGeneratorServiceProvider');
        }
    }
}
