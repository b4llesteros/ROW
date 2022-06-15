<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{   
    protected $guarded = [];

    public function product()
    {   //Un precio pertenece a un producto y solo hay que poner el modelo al que conecta
       return $this->belongsTo(Product::class)->where('active', 1);
    }

    public function tax()
    {     //Un precio pertence a un tipo de IVA  y solo hay que poner el modelo al que conecta
        return $this->belongsTo(Tax::class)->where('active', 1)->where('valid', 1);
    }


}
