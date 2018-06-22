<?php

namespace GestionFlotas;

use Illuminate\Database\Eloquent\Model;

class GastoCombustible extends Model
{
    protected $table = 'tb_gasto_combustible';

    protected $primarykey =  'idgasto_combustible';

    public $timestamps = true;

    protected $fillable = [
        'nro_placa',
        'monto_gasto_combustible',
        'numero_tarjeta',
        'idproveedor_combustible',
        'idusuario',
    ];

    protected $guarded = [ ];
}
