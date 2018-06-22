<?php

namespace GestionFlotas\Http\Controllers;

use GestionFlotas\AnexoVehiculo;
use GestionFlotas\EstadoVehiculo;
use GestionFlotas\GastoCombustible;
use GestionFlotas\HistoricoKilometraje;
use GestionFlotas\MantenimientoVehiculos;
use GestionFlotas\Papeletas;
use GestionFlotas\SoatVehiculo;
use GestionFlotas\Updatekilometraje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetalleController extends Controller
{
    public function newkilometraje(Request $request, $id)
    { 

        $updatekilo = new Updatekilometraje;
        $updatekilo->nro_placa                     = $id;
        $updatekilo->new_km                        = $request->new_km;      
        $updatekilo->idusuario                     = auth()->user()->id;
        $updatekilo->created_at                    = $request->fechaupdatekilo;
        $updatekilo->save();
        return redirect()->route('vehiculo.show' , $id)->with('clave_detalle','Se actualizo nuevo kilometraje con exito');
    }
      public function registrarmant(Request $request, $id)
    { 
       
        $actualnewkilo = DB::table('tb_new_kilometrajes')->where('nro_placa', $id)->max('new_km');
        $recalcular =$request->recalproxmant;

        if($recalcular == '1'){
       	$mantvehi                  = new MantenimientoVehiculos($request->all());
        $mantvehi->nro_placa                     = $id;
        $mantvehi->idusuario                     = auth()->user()->id;
        $mantvehi->act_regla_negocio             = $recalcular;
        $mantvehi->save();

            // Insertando Tabla TB_HISTORICO_KILOMETRAJE
        $HistoricoKilometraje                        = new HistoricoKilometraje();
        $HistoricoKilometraje->nro_placa             = $id;
        $HistoricoKilometraje->kilometraje_recorrido = $request->input('txtnewkilo');        
        $HistoricoKilometraje->fecha_registro        = $request->fecha_mantenimiento;
        $HistoricoKilometraje->estado                =1;
        $HistoricoKilometraje->idusuario             = auth()->user()->id;
        $HistoricoKilometraje->save();
        
        if($request->input('txtnewkilo') > $actualnewkilo){
        
          $updatekilo = new Updatekilometraje($request->all());
        $updatekilo->nro_placa                     = $id;
        $updatekilo->nro_placa                     = $request->txtnewkilo;
        $updatekilo->idusuario                     = auth()->user()->id;
                                                        
        $updatekilo->save();

        }
        return redirect()->route('vehiculo.show' , $id)->with('clave_detalle','Se Registro nuevo mantenimiento con exito , revisar su proxima fecha de manteninmiento (cada 5000 km)');

        }else{
        $mantvehi                  = new MantenimientoVehiculos($request->all());
        $mantvehi->nro_placa                     = $id;
        $mantvehi->idusuario                     = auth()->user()->id;
        $mantvehi->act_regla_negocio             = 0;
        $mantvehi->save();
        return redirect()->route('vehiculo.show' , $id)->with('clave_detalle','Se Registro nuevo mantenimiento con exito');

        }

}
    public function registrargastocombust(Request $request, $id)
    { 

        $gascombu = new GastoCombustible($request->all());
        $gascombu->nro_placa                    = $id;
        $gascombu->idusuario                    = auth()->user()->id;        
        $gascombu->created_at                   = $request->fechagastocombus;
        $gascombu->save();
        return redirect()->route('vehiculo.show' , $id)->with('clave_detalle','Se Registro gasto combustible con exito');
    }
        public function regpapeleta(Request $request, $id)
    { 
        

        $regpapeleta                               = new Papeletas($request->all());
        $regpapeleta->nro_placa                    = $id;
        $regpapeleta->idusuario                    = auth()->user()->id;    
        if($request->hasFile('ruta_imagen_papeleta')) {
        $regpapeleta->ruta_imagen_papeleta         = $request->file('ruta_imagen_papeleta')->store('img_papeletas');
        }
        $regpapeleta->created_at                   = $request->fecha_papeletas;
        $regpapeleta->save();
        return redirect()->route('vehiculo.show' , $id)->with('clave_detalle','Se Registro la nueva papeleta');
    }

       public function regsoat(Request $request, $id)
    { 
      $cambiarestado=  DB::table('tb_soat_vehiculo')->where('nro_placa', $id)->update([
            "estado_soat"                 => 0,
           
        ]);
        $regsoatvehi = new SoatVehiculo($request->all());
        $regsoatvehi->nro_placa                    = $id;
        $regsoatvehi->idusuario                    = auth()->user()->id;    
        if($request->hasFile('ruta_imagen_soat')) {  
        $regsoatvehi->ruta_imagen_soat              = $request->file('ruta_imagen_soat')->store('img_soat');
        }
        $regsoatvehi->estado_soat                  = 1;
        $regsoatvehi->save();
        return redirect()->route('vehiculo.show' , $id)->with('clave_detalle','Se Registro el nuevo SOAT');
    }
       public function reganexos(Request $request, $id)
    {      
        $reganexos = new AnexoVehiculo($request->all());
        $reganexos->nro_placa                    = $id;
        if($request->hasFile('ruta_imagen_anexo')) {  
        $reganexos->ruta_imagen_anexo              = $request->file('ruta_imagen_anexo')->store('img_anexos');}
        $reganexos->save();
        return redirect()->route('vehiculo.show' , $id)->with('clave_detalle','Se Registro nuevo anexo');
    }
    public function cambiarestadovehicle(Request $request, $id)
    {
        $cambiarestado=  DB::table('tb_estado_vehiculo')->where('nro_placa', $id)->update([
            "estadoact_vehi"                 => 0,           
        ]);
         
        $regnewestado = new EstadoVehiculo($request->all());
        $regnewestado->nro_placa                    = $id;
        $regnewestado->idusuario                    = auth()->user()->id;    
        $regnewestado->estadoact_vehi               = 1;
        $regnewestado->created_at                   = $request->fechacambioestado;
        $regnewestado->save();

       return redirect()->route('vehiculo.show' , $id)->with('clave_detalle','Se Actualizó estado del vehículo con éxito');
    }


}
