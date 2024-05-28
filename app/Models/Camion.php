<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camion extends Model
{
    use HasFactory;

    protected $table = 'camions'; // Nombre de la tabla en la base de datos

    protected $fillable = [ // Columnas que se pueden asignar masivamente
        'placa',
        'marca',
        'modelo',
        'capacidad',
        'id_transportista',
        // Agrega aquí otras columnas si es necesario
    ];
}
