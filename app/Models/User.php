<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // $fillable es para decirle al ORM que datos queremos que se guarden en la base de datos
    // es lo contrario a guarded, si no escribes nada, no se guardará nada.

    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */

     // $hidden es para decirle al ORM estos datos nunca serán devueltos cuando se pidan datos 
     // a la base de datos, nunca se guarda una contraseña en texto plano
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    // $casts es para convertir los datos que se guardan en la base de datos, a otro tipo de dato
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
