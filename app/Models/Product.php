<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{   
    protected $guarded = [];  

    //Son las relaciones que quieres que estén precargadas en la memoria
    //Se pueden usar las que más se utilicen para optimizar el rendimiento de la consulta
    protected $with = ['category'];


    //Para decir que un producto pertence a una categoría uno a uno 
    //se escrbir BelongTo 

    public function category()
    {
        return $this->belongsTo(CategoryProduct::class);
    }


}