<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
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
        return $this->hasMany('App\Resena', 'idServicio');
    }

    public function organizacion() {
        return $this->belongsTo('App\Organizacion', 'idOrganizacion');
    }

    public function tipoAtencion() {
        return $this->belongsToMany('App\TipoAtencion', 'servicio_tipo', 'idServicio', 'idTipo');
    }
}
