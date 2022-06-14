<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{   
    protected $guarded = [];

    public function product()
    {       
        return $this->belongsTo(Product::class);
    }

    public function cart()
    {       
        return $this->belongsTo(Cart::class);
    }

    public function product()
    {   
       return $this->hasMany(Price::class, 'product_id');
    }


}
