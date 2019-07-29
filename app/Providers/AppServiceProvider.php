<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

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
        //
        \Route::resourceVerbs([ // “\” indica que se debe importar
            'create' => 'crear',
            'edit' => 'editar',
            'update' => 'actualizar',
            'index' => 'inicio',
            'destroy' => 'eliminar',
            'store'=> 'almacenar',
            'show'=>'mostrar'
             
        ]);
 
    }
}
