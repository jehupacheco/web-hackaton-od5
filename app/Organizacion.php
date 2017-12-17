<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizacion extends Model
{

    public function promedioResena(){
        $servicios = Servicio::where('idOrganizacion', $this->attributes['id'])->get();

        $suma = 0;
        foreach($servicios as $servicio){
            $suma += $servicio->attributes['nivel'];
        }

        if ($suma!=0){
            return $suma/count($servicios);
        } else {
            return 5;
        }
    }

    public function resenas() {
        return $this->hasManyThrough('App\Resena', 'App\Servicio', 'idOrganizacion', 'idServicio');
    }

    public function servicios() {
        return $this->hasMany('App\Servicio', 'idOrganizacion');
    }
}
