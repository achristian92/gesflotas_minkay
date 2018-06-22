<?php

namespace GestionFlotas;

use Illuminate\Database\Eloquent\Model;

class Updatekilometraje extends Model
{
     protected $table = 'tb_new_kilometrajes';

    protected $primarykey = 'idnewkilo';

    public $timestamps = true;

    protected $fillable = [
    	'nro_placa',
    	'new_km',
    	'idusuario',
    	'createad_at',
    ];

    protected $guarded = [ ];
}
