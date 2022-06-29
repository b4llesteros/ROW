<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fingerprint;

class FingerprintController extends Controller
{
    
    public function store(Request $request){
        //así se coge una cookie y se captura el contenido en $cookie_fingerprint
        $cookie_fingerprint = $request->cookie('fp');
        //Si no tiene ninguna cookie en el navegador lanza lo siguiente 
        if($cookie_fingerprint == null){

            $fingerprint = Fingerprint::create([
                'fingerprint' => request('fingerprint'),
                'browser' => request('browser'),
                'browser_version' => request('browser_version'),
                'os' => request('os'),
                'os_version' => request('os_version'),
                'resolution' => request('resolution')
            ]);
        //Si ya tiene una cookie en el navegador, se coge el contenido de la cookie y
        //se guarda en $fingerprint
        }else{
            $fingerprint = Fingerprint::where('fingerprint', $cookie_fingerprint)->first();
        }
        //Así se genera la cookie que dure para siempre
        //Salvo que el usuario borre
        $cookie_fingerprint = cookie()->forever('fp', $fingerprint->fingerprint);

        return response()->json([
            'fingerprint' => request('fingerprint'),
        ])->withCookie($cookie_fingerprint);
    }
}