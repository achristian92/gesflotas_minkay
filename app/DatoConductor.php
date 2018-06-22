<?php

namespace GestionFlotas;

use Illuminate\Database\Eloquent\Model;

class DatoConductor extends Model
{
     protected $table = 'tb_datos_conductores';

    protected $primaryKey = 'iddtconductores';

    public $timestamps = true;

    protected $fillable = [
        'nombres_apellidos',
        'nro_dni',
        'codigo_trabajador',
        'nro_serie_casco',      
        'fecha_nacimiento',
        'fecha_ingreso',
        'sexo',
        'idusuario',
        
    ];

    protected $guarded = [ ];
}
