<?php

namespace GestionFlotas;

use Illuminate\Database\Eloquent\Model;

class AnexoVehiculo extends Model
{
    Protected $table = 'tb_anexos_vehiculos';

	protected $primaryKey = 'idanexov';

	public $timestamps = true;

	protected $fillable = [
		'nro_placa',
		'tipo_doc_anexo',
		'ruta_imagen_anexo',
		'observaciones_anexos',
	];

	protected $guarded = [ ];
}
