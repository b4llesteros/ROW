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
        return $this->belongsTo(CategoryProduct::class)->where('active', 1);
    }

    public function prices()
    {       //Solo devuelve los que son valid = 1
        return $this->hasMany(Price::class, 'product_id')->where('valid', '1')->where('valid', '1');
    }
}