<?php

namespace GestionFlotas\Http\Controllers;

use Illuminate\Support\Facades\DB;

class cargarCombosVehiculo extends Controller
{
    public function getZona()
    {
        $TipoZona = DB::table('tb_tipos_zonas')->select('idtipo_zona', 'nombre_zona')->get();
        echo json_encode($TipoZona);
    }
    public function getTipoDepartamentosJson()
    {

        $TipoDepart = DB::table('tb_ubi_a_departamento')->select('iddepa', 'nom_departamento')->get();
        echo json_encode($TipoDepart);
    }
    public function getTipoProvinciasJSON($iddepar)
    {
        $Provincias = DB::table('tb_ubi_b_provincia')->select('idprov', 'nom_provincia')->where('iddepa', '=', $iddepar)->get();
        echo json_encode($Provincias);
    }
    public function getTipoDistritosJSON($idprov)
    {
        $Distritos = DB::table('tb_ubi_c_distrito')->select('iddist', 'nom_distrito')->where('idprov', '=', $idprov)->get();
        echo json_encode($Distritos);
    }
    public function getAgenciasJSON($idprov)
    {

        $Agencias = DB::table('tb_tipos_agencias')->select('idagencia', 'nombre_agencia')->where('iddist', '=', $idprov)->get();
        echo json_encode($Agencias);
    }
    public function soloxreporte($idprov)
    {

        $Agencias = DB::table('tb_tipos_agencias')->select('idagencia', 'nombre_agencia')->where('id_departamento', '=', $idprov)->get();
        echo json_encode($Agencias);
    }
    public function getDepartamentoCargosJSON()
    {
        $DepartamentoCargo = DB::table('tb_tipos_departamento_cargos')->select('iddepartamento_cargo', 'nombre_depar_cargo')->get();
        echo json_encode($DepartamentoCargo);
    }
    public function getCentroCostosJSON()
    {
        $CentroCosto = DB::table('tb_tipos_centro_costos')->select('idcentro_costo', 'nombre_centro_costo')->get();
        echo json_encode($CentroCosto);
    }
    public function getTipoVehiculosJSON()
    {
        $tipovehiculo = DB::table('tb_tipos_vehiculos')->select('idtipovehiculo', 'nombre_tipo_vehiculo')->get();
        echo json_encode($tipovehiculo);
    }

    public function getMarcaVehiculoJSON($tipovehiculo)
    {
        $MarcaVehiculo = DB::table('tb_tipos_marca_vehiculo')->select('idtipomarca', 'nombre_marca')->where('idtipovehiculo', '=', $tipovehiculo)->get();
        echo json_encode($MarcaVehiculo);

    }
    public function getModeloVehiculoJSON($tipovehiculo)
    {
        $MarcaVehiculo = DB::table('tb_tipos_modelo_vehiculos')->select('idtipomodelo', 'nombre_modelo')->where('idtipomarca', '=', $tipovehiculo)->get();
        echo json_encode($MarcaVehiculo);

    }
    public function getTipoCarroceriasJSON($idtipovehiculo)
    {
        $TipoCarroceria = DB::table('tb_tipos_carrocerias')->select('idtipo_carroceria', 'nombre_carroceria')->where('idtipovehiculo', '=', $idtipovehiculo)->get();
        echo json_encode($TipoCarroceria);
    }
    public function getTipoCombustiblesJSON()
    {
        $TipoCombustible = DB::table('tb_tipos_combustibles')->select('idtipo_combustible', 'nombre_combustible')->get();
        echo json_encode($TipoCombustible);
    }
    public function getEstadoVehiculosJSON()
    {
        $EstadoVehiculo = DB::table('tb_tipos_estados_vehiculos')->select('idestado_vehiculo', 'nombre_estado_vehi')->get();
        echo json_encode($EstadoVehiculo);
    }
    public function getProveedorMantVehiculosJSON()
    {
        $ProveedorMant = DB::table('tb_tipos_proveedor_mantenimientos')->select('idproveedor_mantenimiento', 'nombre_provee_mant')->get();
        echo json_encode($ProveedorMant);
    }
    public function getTipoMantenimientoSON()
    {
        $TipoMant = DB::table('tb_tipos_mantenimiento')->select('idtb_tipos_mantenimiento', 'nombre_tipo_mant')->get();
        echo json_encode($TipoMant);
    }
    public function getProveedorCombustibleJSON()
    {
        $ProveCombust = DB::table('tb_tipos_proveedor_combustible')->select('idproveedor_combustible', 'nombre_provee_combus')->get();
        echo json_encode($ProveCombust);
    }
    public function getTipoUsuario()
    {
        $TipoUsuario = DB::table('tb_tipos_roles')->select('idrol', 'nombre_roles')->get();
        echo json_encode($TipoUsuario);
    }
      public function sologetAgenciasJSON()
    {

        $TipoDepart = DB::table('tb_tipos_agencias')->select('idagencia', 'nombre_agencia')->get();
        echo json_encode($TipoDepart);
    }
      public function getProveedorSoatJSON()
    {
        $Tipoproveesoat = DB::table('tb_tipos_proveedor_soat')->select('idprosoat', 'nombre_soat')->get();
        echo json_encode($Tipoproveesoat);
    }
     public function getconductoresJson()
    {
        $comboconductores = DB::table('tb_datos_conductores')->select('iddtconductores', 'nombres_apellidos')->get();
        echo json_encode($comboconductores);
    }
}
