<?php

namespace GestionFlotas;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
   protected $table = 'users';

    protected $primaryKey = 'id';

    // public $timestamps = true;

    protected $fillable = [
    	'name',
    	'apellido',
    	'email',
    	'password',
    	'telefono',
    	'codigo_trabajador',
    	'idrol',
    	'idagencia',
		'estado',
        
    ];

    protected $guarded = [ ];

    
    public function scopeSearchforname($query , $nomusu){
        if(trim($nomusu) !=""){
           return  $query->where('name', 'LIKE' , "%$nomusu%");
        } 
        
    }
}
