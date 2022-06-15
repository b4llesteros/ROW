<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{   
    protected $guarded = [];    

    public function fingerprints()
    {       
        return $this->hasMany(Fingerprint::class, 'customer_id');
    }  

    public function sales()
    {       
        return $this->hasMany(Sale::class, 'customer_id')->where('active',1);
    }

}
