<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fingerprint extends Model
{   
    protected $guarded = [];

    public function client()
    {       
        return $this->belongsTo(Client::class);        
    }

    public function cart()
    {       
        return $this->belongsTo(Cart::class);        
    }

}
