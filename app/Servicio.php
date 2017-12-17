<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    public function promedioResena(){
        $resenas = Resena::where('idServicio', $this->attributes['id'])->get();

        $suma = 0;
        foreach($resenas as $resena){
            $suma += $resena->attributes['nivel'];
        }

        if ($suma != 0){
            return $suma/count($resenas);
        }

    }

    public function resenas() {
        return $this->hasMany('App\Resena', 'idServicio');
    }
}
