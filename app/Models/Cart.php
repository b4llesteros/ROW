<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{   
    protected $guarded = [];
   

    public function client()
    {       
        return $this->hasOne(Client::class, 'client_id');        
    }

    public function sale()
    {       
        return $this->hasOne(Sale::class, 'sale_id');        
    }

    public function fingerprint()
    {       
        return $this->hasOne(Fingerprint::class, 'fingerprint_id');        
    }

    public function price()
    {       
        return $this->hasMany(Price::class, 'price_id');        
    }

}
