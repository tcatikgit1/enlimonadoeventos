<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParaQuiensServicio extends Model
{
    
    protected $table = 'servicios_has_para_quien';

    protected $fillable = ['titulo', 'descripcion', 'servicio_id'];
    
    public function servicio()
    {
        return $this->belongsTo(Servicios::class, 'servicio_id');
    }


}
