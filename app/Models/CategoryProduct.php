<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{   
    //Lo que metas dentro son los campos que no se guarden en la base de datos al contrario de 
    //$fillable que son los campos que se pueden guardar
    //$hidden es para no devolver los campos que no quiero que se muestren en la respuesta
    protected $guarded = [];  
    //Tabla de la base de datos que corresponde a categories
    //Laravel busca el plural del modelo para buscar la tabla
    //En el siguiente protected $table = 'categories'; se le está diciendo con que tabla 
    //queremos trabajar, ya que si el nombre no coincide con el plural del modelo, hay que decirselo
    //Como en este caso que el modelo es Category, y el plural es categories, y no es un plural de Laravel
    protected $table = 'categories';

    //Relación de uno a muchos entre productos y categorías, por que una categoria
    //puede tener muchos productos
    //Si es una categoria solo tiene un producto es una relacion de uno a  uno
    //que se llama hasOne en lugar de hasMany
    public function products()
    {   
        //Esto es para hacer un innerjoin entre las tablas
        //Una categoría tiene muchos productos, por eso se usa hasMany
        //where active = 1 para que solo se muestren los productos activos
        //La foreign key es 'category_id' dentro de la tabla Product
        return $this->hasMany(Product::class, 'category_id')->where('active',1);
    }

}