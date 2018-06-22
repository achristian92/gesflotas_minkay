<?php

namespace GestionFlotas;

use Illuminate\Database\Eloquent\Model;

class TiposMantenimiento extends Model
{
     protected $table = 'tb_tipos_mantenimiento';

    protected $primarykey = 'idtb_tipos_mantenimiento';

    //public $timestamps = false;

    protected $fillable = [
    	'nombre_tipo_mant'
    ];

    protected $guarded = [ ];
}
