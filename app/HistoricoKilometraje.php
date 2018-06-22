<?php

namespace GestionFlotas;

use Illuminate\Database\Eloquent\Model;

class HistoricoKilometraje extends Model
{
     protected $table = 'tb_historico_kilometraje';

    protected $primarykey = 'idhistorico_kilometraje';

    public $timestamps = true;

    protected $fillable = [
        'nro_placa',
        'kilometraje_recorrido',
        'idusuario',
        'fecha_registro',
    ];

    protected $guarded = [ ];
}
