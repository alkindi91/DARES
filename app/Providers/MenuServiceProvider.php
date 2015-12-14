<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Menu;
class MenuServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Menu::make('SidebarMenu' , function($menu){
          $menu->add('الرئيسية' ,['route'=>'welcome'])->data('order' ,1)->prepend('<i class="fa fa-home"></i>');
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
