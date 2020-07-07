<?php


namespace Pucit\Contactform;


use Illuminate\Foundation\Support\Providers\RouteServiceProvider;

class ContactServiceProvider extends RouteServiceProvider{

    public function boot(){


        $this->loadRoutesFrom(__DIR__.'/routes/web.php');


    }

    public function register(){

    }
}
