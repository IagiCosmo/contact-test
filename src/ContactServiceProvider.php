<?php

namespace Cosmo\Contact; 

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php'); //Carica le rotte NON del progetto, ma del pacchetto
        $this->loadViewsFrom(__DIR__.'/views', 'contact'); //Carica le viste NON del progetto, ma del pacchetto
        $this->loadMigrationsFrom(__DIR__.'/database/migrations'); //Carica le migration NON del progetto, ma del pacchetto
        $this->publishes([
            __DIR__.'/config/contact.php' => config_path('contact.php'),
        ]); //Per pubblicare il pacchetto
    }

    public function register()
    {

    }
}