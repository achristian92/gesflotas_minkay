<?php

namespace GestionFlotas;

use Illuminate\Database\Eloquent\Model;

class DepartamentoCargo extends Model
{
   protected $table = 'tb_tipos_departamento_cargos';

    protected $primarykey = 'iddepartamento_cargo';

    public $timestamps = false;

    protected $fillable = [
    	'nombre_depar_cargo'
    ];

    protected $guarded = [ ];
}
