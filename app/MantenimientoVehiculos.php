<?php

namespace GestionFlotas;

use Illuminate\Database\Eloquent\Model;

class MantenimientoVehiculos extends Model
{
    protected $table = 'tb_mantenimiento_vehiculos';

    protected $primarykey = 'idmantenimiento_vehiculo';

    public $timestamps = true;

    protected $fillable = [
        'nro_placa',
        'idtb_tipos_mantenimiento',
        'monto_mantenimiento',
        'idproveedor_mantenimiento',
         'motivo_mantenimiento',
        'fecha_mantenimiento',     
        'idusuario',
        'act_regla_negocio',

    ];

    protected $guarded = [];
}
