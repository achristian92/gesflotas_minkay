<?php

namespace GestionFlotas;

use Illuminate\Database\Eloquent\Model;

class TipoCarroceria extends Model
{
    protected $table = 'tb_tipos_carrocerias';

    protected $primarykey = 'idtipo_carroceria';

    public $timestamps = false;

    protected $fillable = [
    	'nombre_carroceria'
    ];

    protected $guarded = [ ];
}
