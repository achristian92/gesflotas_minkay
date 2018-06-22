<?php

namespace GestionFlotas;

use Illuminate\Database\Eloquent\Model;

class TipoZona extends Model
{
    protected $table = 'tb_tipos_zonas';

    protected $primarykey = 'idtipo_zona';

    protected $fillable = [
    	'nombre_zona'
    ];

   	public $timestamps = false;

   	protected $guarded = [ ];
}
