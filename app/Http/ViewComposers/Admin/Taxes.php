<?php

namespace App\Http\ViewComposers\Admin;

use Illuminate\View\View;
// Se declara el uso del modelo CategoryProduct
use App\Models\Tax;
//Es el nombre del propio archivo
use Debugbar;

class Taxes
{
    static $composed;
    //Instanciando el modelo mediante inyección de dependencias
    public function __construct(Tax $tax)
    {   
        $this->tax = $tax;
    }

    public function compose(View $view)
    {
        //static es para que cuando se le de un valor a una prpiedad nunca cambiará

        //Como la vista es la misma, solo se carga la primera vez, porque static::composed ya tiene su valor
        if(static::$composed)
        {
            return $view->with('taxes', static::$composed);
        }
        Debugbar::info(static::$composed);

        static::$composed = $this->tax->where('active', 1)->where('valid', 1)->orderBy('type', 'asc')->get();

        $view->with('taxes', static::$composed);

    }
}
