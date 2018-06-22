<?php

namespace GestionFlotas;

use Illuminate\Database\Eloquent\Model;

class ProveedorCombustible extends Model
{
    protected $table = 'tb_tipos_proveedor_combustible';

    protected $primarykey = 'idproveedor_combustible';

    public $timestamps = true;

    protected $fillable = [
        'nombre_provee_combus',

    ];

    protected $guarded = [];
}
