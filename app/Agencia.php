<?php

namespace GestionFlotas;

use Illuminate\Database\Eloquent\Model;

class Agencia extends Model
{
 protected $table = 'tb_tipos_agencias';

    protected $primaryKey = 'idagencia';

    public $timestamps = false;

    protected $fillable = [    	
    	'nombre_agencia',
    	'id_distrito',
    ];

    protected $guarded = [ ];
}
