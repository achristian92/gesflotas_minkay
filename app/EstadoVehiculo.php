<?php

namespace GestionFlotas;

use Illuminate\Database\Eloquent\Model;

class EstadoVehiculo extends Model
{
       protected $table = 'tb_estado_vehiculo';

    protected $primarykey = 'idestadovehi';

    public $timestamps = true;

    protected $fillable = [
        'nro_placa',
        'idestado_vehiculo',
        'descripcion_estadov',
        'gasto_oca_est',
        'idusuario',
        'estadoact_vehi',
    ];

    protected $guarded = [];
}