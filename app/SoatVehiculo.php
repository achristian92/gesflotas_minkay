<?php

namespace GestionFlotas;

use Illuminate\Database\Eloquent\Model;

class SoatVehiculo extends Model
{
     protected $table = 'tb_soat_vehiculo';

    protected $primarykey = 'idsoatvehi';

    public $timestamps = true;

    protected $fillable = [
        'nro_placa',
        'idprosoat',
        'nro_poliza',
        'monto_soat',
        'fecha_vencimiento_soat',
        'ruta_imagen_soat',
        'estado_soat',     
        'idusuario',
        

    ];

    protected $guarded = [];
}
