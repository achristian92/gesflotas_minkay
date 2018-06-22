<?php

namespace GestionFlotas;

use Illuminate\Database\Eloquent\Model;

class TipoVehiculo extends Model
{
     protected $table = 'tb_tipos_vehiculos';

     protected $primarykey = 'idtipovehiculo';

     public $timestamps = false;

     protected $fillable =  [		
     	'nombre_tipo_vehiculo'
	 ];

     protected $guarded = [  ];

}
