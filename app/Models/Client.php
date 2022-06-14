<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{   
    protected $guarded = [];    

    public function fingerprint()
    {       
        return $this->hasOne(Fingerprint::class, 'fingerprint_id');
    }

    public function payment_method()
    {       
        return $this->belongsTo(Payment_method::class);   
    }

}
