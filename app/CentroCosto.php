<?php

namespace GestionFlotas;

use Illuminate\Database\Eloquent\Model;

class CentroCosto extends Model
{
    	protected $table = 'tb_tipos_centro_costos';

	protected $primaryKey = 'idcentro_costo';

	public $timestamps = false;

	protected $fillable = [
		'nombre_centro_costo'
	];

	protected $guarded = [ ];
}
