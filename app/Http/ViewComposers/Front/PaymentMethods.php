<?php

namespace App\Http\ViewComposers\Front;

use Illuminate\View\View;
// Se declara el uso del modelo CategoryProduct
use App\Models\PaymentMethod;
//Es el nombre del propio archivo
class PaymentMethods
{
    static $composed;
    //Instanciando el modelo mediante inyección de dependencias
    public function __construct(PaymentMethod $payment_methods)
    {   
        $this->payment_methods = $payment_methods;
    }   

    public function compose(View $view)
    {
        //static es para que cuando se le de un valor a una prpiedad nunca cambiará

        //Como la vista es la misma, solo se carga la primera vez
        //porque static::composed ya tiene su valor
        if(static::$composed)
        {
            return $view->with('payment_methods', static::$composed);
        }

        static::$composed = $this->payment_methods->where('active', 1)->get();

        $view->with('payment_methods', static::$composed);

    }
}
