<?php

namespace GestionFlotas;

use Illuminate\Database\Eloquent\Model;

class TipoCombustible extends Model
{
        protected $table = "tb_tipos_combustibles";

    protected $primarykey = 'idtipo_combustible';

    public $timestamps = false;

    protected $fillable = [
    	'nombre_combustible'
    ];

    protected $guarded = [ ];
}
