<?php

namespace GestionFlotas;

use Illuminate\Database\Eloquent\Model;

class ProveedorMantenimiento extends Model
{
    protected $table = 'tb_tipos_proveedor_mantenimientos';

    protected $primarykey = 'idproveedor_mantenimiento';

    public $timestamps = true;

    protected $fillable = [
        'nombre_provee_mant',

    ];

    protected $guarded = [];
}
