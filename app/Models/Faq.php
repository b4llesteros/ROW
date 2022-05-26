<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{   //Esta propiedad si o si , siempre tiene que estar, le está diciendo que datos se
    // pueden guardar en la base de datos, si entre los corchetes no hay nada, se 
    //pueden guardar cualquier tipo de datos, si añades algo dentro, eso que añadas 
    //nunca se guardará.
    //Guarded es para decirle al ORM que datos no queremos que se guarden en la base de datos
    protected $guarded = [];
}