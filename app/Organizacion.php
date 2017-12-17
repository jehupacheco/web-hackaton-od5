<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizacion extends Model
{
    public function promedioResena() {
        $resenas = $this->resenas()->get();

        if ($resenas->count() == 0) {
            return 5;
        }

        $sum = 0;

        foreach ($resenas as $resena) {
            $sum += $resena->nivel;
        }

        return round($sum / $resenas->count(), 2);
    }

    public function resenas() {
        return $this->hasManyThrough('App\Resena', 'App\Servicio', 'idOrganizacion', 'idServicio');
    }

    public function servicios() {
        return $this->hasMany('App\Servicio', 'idOrganizacion');
    }
}
