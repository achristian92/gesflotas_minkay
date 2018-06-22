@extends('plantillabase-home')
@section('contenido')
<link href="assets/css/usuario.css" rel="stylesheet" type="text/css">
    <style>
        h2.bb {
      margin-top: -0.5cm;
      padding-bottom: 15px;
        }

   div.panel-footer {
      background-color:  transparent;
      padding-top: 1px;
      padding-bottom: 1px;
      border-top-color: transparent;
    }

    button.btn.btn-default{
       background-color:  #049004 ;
       border-color:  #049004;
       color: white;
       font-weight: bold;

       }

    div.panel.panel-danger{
      border-color: transparent;
      
    }

.btn-default:active:hover, .btn-default.active:hover, .open > .dropdown-toggle.btn-default:hover, .btn-default:active:focus, .btn-default.active:focus, .open > .dropdown-toggle.btn-default:focus, .btn-default:active.focus, .btn-default.active.focus, .open > .dropdown-toggle.btn-default.focus
{
  background-color: #049004;
  border-color:  #049004;
  color: white;
  font-weight: bold;
}
    </style>

    <h2 align="center" class="bb">
        <strong>
            Sistema en Línea de Gestión de Flotas
        </strong>
    </h2>
   
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-danger">
                        <div align="center" class="panel-body">
                            <img src="assets/img/registrovehiculo.png"/>
                        </div>
                        <div align="center" class="panel-footer">
                            <a href="{{  route('vehiculo.create')  }}">
                                <button class="btn btn-default" type="button">
                                   
                                        Registro de vehículos
                                    
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-danger">
                        <div align="center" class="panel-body">
                            <img src="assets/img/buscarcarro.png"/>
                        </div>
                        <div align="center" class="panel-footer">
                            <a href="{{  route('vehiculo.index')  }}">
                                <button class="btn btn-default" type="button">
                                   
                                        Lista de vehículos
                                    
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-danger">
                        <div align="center" class="panel-body">
                            <img src="assets/img/mantenimiento.png"/>
                        </div>
                        <div align="center" class="panel-footer">
                            <a href="{{  route('estadovehiculo')  }}">
                                <button class="btn btn-default" type="button">
                                    
                                        Consulta y Mantenimiento
                                    
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="panel panel-danger">
                            <div align="center" class="panel-body">
                                <img src="assets/img/reportes.png">
                                
                            </div>
                            <div align="center" class="panel-footer">
                                <a href="{{  route('generarreportes')  }}">
                                    <button class="btn btn-default" type="button">
                                      
                                         Reportes
                                        
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-danger">
                            <div align="center" class="panel-body">
                                <img src="assets/img/indicadores.png">
                                
                            </div>
                            <div align="center" class="panel-footer">
                                <a href="{{  route('indicadores')  }}">
                                    <button class="btn btn-default" type="button">
                                      
                                            Indicadores
                                       
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-danger">
                            <div align="center" class="panel-body">
                                <img src="assets/img/configusuario.png"/>
                            </div>
                            <div align="center" class="panel-footer">
                                <a href="{{route('usuario.index')}}">
                                    <button class="btn btn-default" type="button">
                                    
                                            Configuración de usuario
                                        
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="panel panel-danger">
                            <div align="center" class="panel-body">
                                <img src="assets/img/importcsv.png">
                                
                            </div>
                            <div align="center" class="panel-footer">
                                 <a href="{{route('import.index')}}">
                                    <button class="btn btn-default" type="button">
                                        <strong>
                                         Importar CSV
                                        </strong>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-danger">
                            <div align="center" class="panel-body">
                                <img src="assets/img/dashplan.png" height="120" width="200">
                                
                            </div>
                            <div align="center" class="panel-footer">
                                 <a href="admin">
                                    <button class="btn btn-default" type="button">
                                        <strong>
                                         Cambiar a Plantilla Admin
                                        </strong>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>





    @endsection
