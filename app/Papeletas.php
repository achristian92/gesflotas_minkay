<?php

namespace GestionFlotas;

use Illuminate\Database\Eloquent\Model;

class Papeletas extends Model
{
     protected $table = 'tb_papeletas';

    protected $primarykey = 'idpape';

    public $timestamps = true;

    protected $fillable = [
        'nro_placa',
        'cod_papeleta',
        'monto_papeleta',
        'descrip_papeleta',
        'motivo_mantenimiento',
        'estado_pape',
        'ruta_imagen_papeleta',     
        'idusuario',
        

    ];

    protected $guarded = [];
}
