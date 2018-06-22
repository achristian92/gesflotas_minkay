<?php

namespace GestionFlotas;

use Illuminate\Database\Eloquent\Model;

class ConducyVehi extends Model
{
     protected $table = 'tb_conducyvehi';

    protected $primaryKey = 'idconducyvehi';

    public $timestamps = false;

    protected $fillable = [
    	'nro_placa',
        'iddtconductores',
        'estadoact',
        'created_at',
        'updated_at',
        
    ];

    protected $guarded = [ ];
}
