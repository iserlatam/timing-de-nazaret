<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeEntrie extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_entrada',
        'hora_inicio',
        'hora_final',
        'total_horas',
        'etiqueta',
        'proyecto',
        'usuario',
        'fecha_creacion',
        'fecha_modificacion'
    ];
}
