<?php

namespace App\Http\ViewComposers\Front;

use Illuminate\View\View;
// Se declara el uso del modelo CategoryProduct
use App\Models\CategoryProduct;
//Es el nombre del propio archivo
class CategoriesProduct
{
    static $composed;
    //Instanciando el modelo mediante inyección de dependencias
    public function __construct(CategoryProduct $product_categories)
    {   
        $this->product_categories = $product_categories;
    }

    public function compose(View $view)
    {
        //static es para que cuando se le de un valor a una prpiedad nunca cambiará

        //Como la vista es la misma, solo se carga la primera vez, porque static::composed ya tiene su valor
        if(static::$composed)
        {
            return $view->with('product_categories', static::$composed);
        }

        static::$composed = $this->product_categories->where('active', 1)->orderBy('title', 'asc')->get();

        $view->with('product_categories', static::$composed);

    }
}
