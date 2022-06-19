<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{   
    protected $guarded = []; 
    protected $table = 'taxes'; 


    public function prices()
    {        
        return $this->belongTo(Price::class)->where('active', 1)->where('valid', 1);
    }
}
