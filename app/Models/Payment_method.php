<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment_method extends Model
{   
    protected $guarded = [];

    public function client()
    {       
        return $this->hasOne(Client::class, 'client_id');        
    }

    public function sales()
    {        
        return $this->belongsTo(Sale::class);
    }
}
