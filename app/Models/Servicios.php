<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Servicios extends Model
{
    use HasFactory, Notifiable;

    public $timestamps = true;

    protected $fillable = [
        'nombre',
        'descripcion',
        'ComoTrabajamos',
        'textCT'
    ];

    protected $hidden = [

    ];


    public function caracteristicas()
    {
        return $this->hasMany(CaracteristicasServicio::class, 'servicio_id');
    }

    public function paraQuien()
    {
        return $this->hasMany(ParaQuiensServicio::class, 'servicio_id');
    }
}
