<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <title>
                MINKAY | Proyectos y Servicios
            </title>
            <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" rel="stylesheet">
                <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" type="text/css">
                    <link href="https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet" type="text/css">
                        <link href="https://cdn.datatables.net/responsive/1.0.4/css/dataTables.responsive.css" rel="stylesheet" type="text/css">
                            <link href="assets/css/usuario.css" rel="stylesheet" type="text/css">
                                <link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css">
                                    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
                                        {{--  cargar zona y la agencia cuando se agrega nuevo usuario --}}
                                        <script src="assets/js/pruebauser.js" type="text/javascript">
                                        </script>
                                        <!-- fin -->
                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
                                        </script>
                                        <script src="assets/js/bootstrap.min.js" type="text/javascript">
                                        </script>
                                        <script src="https://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js" type="text/javascript">
                                        </script>
                                        <script src="https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript">
                                        </script>
                                        <script src="https://cdn.datatables.net/responsive/1.0.4/js/dataTables.responsive.js" type="text/javascript">
                                        </script>
                                        <script src="{{ url('js/user.js')  }}">
                                        </script>
                                    </link>
                                </link>
                            </link>
                        </link>
                    </link>
                </link>
            </link>
        </meta>
    </head>
    <body>
        {!! csrf_field() !!}
        <nav class="navbar" style="background-color: rgba(100, 100, 133,0.5 );">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{  route('panelprincipal')  }}">
                        <img src="assets/img/logo.png" style="width:50%"/>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <span class="glyphicon glyphicon-user">
                                </span>
                                <strong>
                                    {{ auth()->user()->email }}
                                </strong>
                                <span class="glyphicon glyphicon-chevron-down">
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="navbar-login">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <p class="text-center">
                                                    <span class="glyphicon glyphicon-user fa-4x">
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="col-lg-8">
                                                <p class="text-left">
                                                    <strong>
                                                        {{ auth()->user()->name }}
                                                    </strong>
                                                </p>
                                                <p class="text-left">
                                                    <strong>
                                                        {{ auth()->user()->apellido }}
                                                    </strong>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider">
                                </li>
                                <li>
                                    <div class="navbar-login navbar-login-session">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <p>
                                                    <a class="btn btn-danger btn-block" href="{{  route('logout')  }}">
                                                        <strong>
                                                            Cerrar Sesión
                                                        </strong>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- agregando modal -->
        @include('user_modal')
        <style type="text/css">
            body { 
        font-size: 140%; 
    }

    h2 {
        text-align: center;
        padding: 20px 0;
    }

    table caption {
        padding: .5em 0;
    }

    table.dataTable th,
    table.dataTable td {
        white-space: nowrap;
    }

    .p {
        text-align: center;
        padding-top: 140px;
        font-size: 14px;
    }

    th { font-size: 12px; }
    td { font-size: 11px; }
        </style>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <button class="btn btn-default" data-target="#modalNuevo" data-toggle="modal" id="abrirModal">
                        <i class="glyphicon glyphicon-exclamation-sign">
                        </i>
                        Registrar Nuevo Usuario
                    </button>
                    <br/>
                    <br/>
                    <div class="alert alert-success" hidden="true" id="success-alert">
                        Usuario Agregado Correctamente
                    </div>
                    <div class="alert alert-success" hidden="true" id="success-edit">
                        Usuario Editado Correctamente
                    </div>
                    <div class="alert alert-success" hidden="true" id="success-delete">
                        Usuario Eliminado Correctamente
                    </div>
                </div>
                <br/>
                <br/>
                <br/>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <table cellspacing="0" class="display table table-bordered table-hover dt-responsive" id="example">
                        <caption class="text-center">
                        </caption>
                        <thead>
                            <tr class="dropdown">
                                <th>
                                    IDS
                                </th>
                                <th>
                                    Nombre y Apellido
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Telefono
                                </th>
                                <th>
                                    Tipo de Usuario
                                </th>
                                <th>
                                    Agencia
                                </th>
                                <th>
                                    Cod. Trabajador
                                </th>
                                {{--
                                <th>
                                    Accion
                                </th>
                                --}}
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function(){       
            ObtenerTipoZona();
            ObtenerAgencia();
                              //cargar la zona cuando se edita
                        $('#editzona').empty();
                        $.ajax({
                            type: 'GET',
                            url: 'getTipoZonasJSON',
                            data: {},
                            dataType: 'json',
                            success: function(data){
                                $('#editzona').append('<option value="">::Seleccionar::</option>');         
                                $.each(data, function(i, value) {
                                    $('#editzona').append('<option value="' + value.idtipo_zona + '">' + value.nombre_zona  + '</option>');
                                });
                    
                            },
                            error: function (jqXHR, status, err) {
                                alert("Local error callback.");
                            }
                        });
                        // fin 

        $('#example tbody').empty();
        
        var table = $('table').DataTable({


            "ajax": {
                "url": "getUsuariosJSON",
                "dataSrc": ""
            },
            "columns": [
            { "data" : "idusuario" , "width" : "20%"},
            { "data": "nombres" , "width": "20%" }, 
            { "data": "correo_electronico" , "width": "20%" },  
            { "data": "telefono" , "width": "20%" },    
            { "data": "rol" , "width": "20%" },
            { "data": "agencia" , "width": "20%" },     
            { "data": "codigo_trabajador" , "width": "20%" },   
                                
            // { 
            //     "data": "idusuario",
            //     "render": function(data, type, row, meta){
            //         if(type === 'display'){
            //             console.log(row);
            //             data = '<a class="btn btn-info btn-xs" id="btn-editar" data-id=' + data + '>' + '<i class="fa fa-pencil"></i>' + '</a> ';

            //             data += '<a class="btn btn-danger btn-xs" id="btn-eliminar" data-id='+row.idusuario+'> <i class="fa fa-times"></i> </a>';
            //         }

            //         return data;
            //     }
            // } 
            ],


            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "No se encuentra vehículo alguno con los parámetros que ha indicado",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }    
            }
            


        } );

    });
        </script>
    </body>
</html>
