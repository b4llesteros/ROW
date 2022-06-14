<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{   
    protected $guarded = [];  

    //Son las relaciones que quieres que estén precargadas en la memoria
    //$with se pueden usar las que más se utilicen para optimizar el rendimiento de la consulta
    //$with para que cargue más rápido las relaciones
    protected $with = ['category'];

    //Para decir que un producto pertence a una categoría uno a uno 
    //se escrbir BelongTo, un producto pertenece a una categoría

    public function category()
    {
        //Un producto pertenece a una categoría y solo hay que poner el modelo
        //al que conecta en este caso CategoryProduct
        return $this->belongsTo(CategoryProduct::class);
    }

    public function price()
    {       
        return $this->belongsTo(Price::class);
    }

    public function tax()
    {       
        return $this->belongsTo(Tax::class);
    }

   
   

}