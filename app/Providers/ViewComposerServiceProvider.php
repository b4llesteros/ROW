<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //La primera línea dice en que vista quiero tener disponible el contenido
        //definido en la segunda línea

        //En la segunda línea digo que archivo va a ser el que haga la 
        //consulta a la base de datos

        //Para que esté disponible en todas las vistar se pone 'admin.*' en lugar de la ruta de la vista
        
        view()->composer([
            'admin.pages.products.index'],
            'App\Http\ViewComposers\Admin\CategoriesProduct'
        );        
    

        view()->composer([
            'admin.pages.products.index'],
            'App\Http\ViewComposers\Admin\Taxes'
        );


        view()->composer([
            'front.pages.products.index'],
            'App\Http\ViewComposers\Front\CategoriesProduct'
        );


    }
}
