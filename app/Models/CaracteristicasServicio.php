<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CaracteristicasServicio extends Model
{
    protected $table = 'servicios_has_caracteristicas';

    protected $fillable = ['caracteristica', 'servicio_id'];

    public function servicio()
    {
        return $this->belongsTo(Servicios::class, 'servicio_id');
    }
}
