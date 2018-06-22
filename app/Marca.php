<?php

namespace GestionFlotas;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'tb_tipos_marca_vehiculo';

    protected $primarykey =  'idtipomarca';

    public $timestamps = true;

    protected $fillable = [
        'nombre_marca',
        'idtipovehiculo',
    ];

    protected $guarded = [ ];
}