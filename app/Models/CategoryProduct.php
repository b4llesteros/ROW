<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{   
    protected $guarded = [];  
    //Tabla de la base de datos que corresponde a categories
    protected $table = 'categories';

    //Relación de uno a muchos entre productos y categorías, por que una categoria
    //puede tener muchos productos
    //Si es una categoria solo tiene un producto es una relacion de uno a  uno
    //que se llama hasOne en lugar de hasMany
    public function products()
    {  
        return $this->hasMany(Product::class, 'category_id');
    }

}