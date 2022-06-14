<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{   
    protected $guarded = [];

    public function cart()
    {        
        return $this->belongsTo(Cart::class);
    }

    public function payment_method()
    {       
        return $this->hasOne(Payment_method::class, 'payment_method_id');        
    }
}
