<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{   
    protected $guarded = [];      

    public function sale()
    {       
        return $this->belongsTo(Sale::class)->where('active',1);        
    }

    public function fingerprint()
    {       
        return $this->belongsTo(Fingerprint::class);        
    }

    public function price()
    {       
        return $this->belongsTo(Price::class)->where('active',1)->where('valid',1);
    }

    public function client()
    {       
        return $this->belongsTo(Client::class);        
    }
}
