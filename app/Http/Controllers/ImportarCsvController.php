<?php

namespace GestionFlotas\Http\Controllers;
use Excel;
use GestionFlotas\DatoConductor;
use GestionFlotas\DatoVehiculo;
use GestionFlotas\GastoCombustible;
use GestionFlotas\ProveedorCombustible;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImportarCsvController extends Controller
{
   public function importarexcel(Request $request)
    {
      // dd($request->all());
      if($request->tipo_tb_importar == 1){
        Excel::load($request->importcsv, function($reader){
        $excel = $reader->get();
        $reader->each(function($row) {
          $search = DatoVehiculo::where('nro_placa', $row->nro_placa)->first();
          if($search)
          {
            $gastcombu = new  GastoCombustible();
            $gastcombu->nro_placa                   = $row->nro_placa;
            $gastcombu->monto_gasto_combustible     = $row->gasto_combustible;
            $gastcombu->numero_tarjeta              = $row->numero_tarjeta;
            $gastcombu->idproveedor_combustible     = $this->getProveeCombustibleId($row->nombre_proveedor);
            $gastcombu->created_at                  = $row->fecha;
            $gastcombu->save();
          }    
        }); 
      });
       return redirect()->route('import.index')->with('clave_detalle','Se Registro con éxitos los gastos de combustible');

      }else{
        Excel::load($request->importcsv, function($reader){
        $excel = $reader->get();
        $reader->each(function($row) {
             $search = DatoConductor::where('nro_dni', $row->dni)->first();
            if(is_null($search))
            { 
            $newconductor = new  DatoConductor();
            $newconductor->nombres_apellidos                   = $row->nombres_apellidos;
            $newconductor->nro_dni                             = $row->dni;
            $newconductor->codigo_trabajador                   = $row->cod_trabajador;
            $newconductor->nro_serie_casco                     = $row->nro_serie_casco;
            $newconductor->fecha_nacimiento                    = $row->fecha_nacimiento;
            $newconductor->fecha_ingreso                       = $row->fecha_ingreso_trabajar;
            $newconductor->sexo                                = $row->sexo;
            $newconductor->save();  
            }
        }); 
      });
       return redirect()->route('import.index')->with('clave_detalle','Se Registro con éxitos nuevos conductores');
      }
    }
    
    public function plantillaconductores()
    {
          Excel::create('Plantillaconductores', function ($excel){
          $excel->sheet('Plantillaconductores', function ($sheet)
          {
          $sheet->rows(array(
              array('nombres_apellidos', 'dni', 'cod_trabajador', 'nro_serie_casco', 'fecha_nacimiento','fecha_ingreso_trabajar','sexo'),
              array('JUAN PEREZ FLORES', '47586958','COD_J_01','NULL','1993-02-17','2017-12-12','M'))); 
                                 
          });
        })->export('xlsx');
    }

    public function plantillacombustible(){      
          Excel::create('Plantillacombustible', function ($excel){
            $excel->sheet('Plantillacombustible', function ($sheet){
            $sheet->rows(array(
              array('nro_placa','gasto_combustible','numero_tarjeta','nombre_proveedor','fecha'),
              array('f8v004', '100','123456789','Repsol','2018-05-17')));           
              });
          })->export('xlsx');
    }

    public function getProveeCombustibleId($PROVEEDOR)
    {
          $newproveedorcomb = ProveedorCombustible::where('nombre_provee_combus', $PROVEEDOR)->first();
          if($newproveedorcomb)
          {
            return $newproveedorcomb->idproveedor_combustible;        
          }else
          {
          $newproveedorcomb = ProveedorCombustible::create([
          'nombre_provee_combus' => $PROVEEDOR
          ]);
            return $newproveedorcomb->id;        
          }
    }
}



