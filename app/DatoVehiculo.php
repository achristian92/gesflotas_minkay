<?php

namespace GestionFlotas;

use GestionFlotas\DatoConductor;
use Illuminate\Database\Eloquent\Model;

class DatoVehiculo extends Model
{
    //
    protected $table = 'tb_datos_vehiculo';

    // protected $primarykey = 'iddatosvehiculo';

    public $timestamps = true;

    protected $fillable = [
        'iddatosvehiculo',
        'nro_placa',        
        'idagencia',
        'iddepartamento_cargo',     
        'idcentro_costo',
        'idtipovehiculo', 
        'anio_fabricacion_vehiculo',
        'idtipomodelo',
        'anio_modelo_vehiculo',
        'color',
        'nro_serie_motor',
        'idtipo_carroceria',
        'nro_chasis',
        'fuerza_vehiculo',
        'idtipo_combustible',
        'ruta_imagen',
        'nombre_imagen',
        'idusuario',
        'estado',        
    ];

    protected $guarded = [];

    public function scopeSearchfornroplaca($query , $num_placa){
        if(trim($num_placa) !=""){
           return  $query->where('tb_datos_vehiculo.nro_placa', 'LIKE' , "%$num_placa%");
        }    
    }

    public function conductores()
    {
        return $this->hasMany(DatoConductor::class);
    }
}
