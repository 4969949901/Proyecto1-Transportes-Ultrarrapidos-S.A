<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportista extends Model
{
    use HasFactory;
    protected $table = 'transportistas';
    protected $primaryKey = 'id_transportistas';
    public $timestamps = true;

    protected $keyType = 'int';


    protected $fillable = [
        'id_transportistas',
        'nombre',
        'direccion',
        'telefono',
        'correo_electronico',
        // otros campos...
    ];


}
