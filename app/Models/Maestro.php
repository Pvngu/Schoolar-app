<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maestro extends Model
{
    protected $table = 'maestros';

    protected $fillable = [
        'apellido_paterno',
        'apellido_materno',
        'nombres',
        'grado_estudios',
        'rfc',
        'curp',
        'tarjeta_recursos_humanos',
        'fecha_nacimiento',
        'area_administrativa',
        'sexo',
        'estado_civil',
        'lugar_nacimiento',
        'fecha_ingreso'
    ];

    protected $casts = [
        'fecha_nacimiento' => 'date',
        'fecha_ingreso' => 'date'
    ];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'area_administrativa');
    }
}