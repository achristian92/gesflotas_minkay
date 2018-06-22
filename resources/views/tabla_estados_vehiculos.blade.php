@extends('plantillabase')
@section('contenido')
<head>
    <meta charset="utf-8">
        <title>
            Proyecto Minkay
        </title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" type="text/css">
            <link href="https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet" type="text/css">
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
                </script>
                <script src="https://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js" type="text/javascript">
                </script>
                <script src="https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript">
                </script>
                <script src="https://cdn.datatables.net/responsive/1.0.4/js/dataTables.responsive.js" type="text/javascript">
                </script>
            
       
    </meta>
</head>
<script>
    $(document).ready(function(){
    $('#example tbody').empty();    
    var dtble = $('table').DataTable({
      "ajax": {
        "url": "../getVehiculosRegistradosJSON",
        "dataSrc": ""
      },
      "columns": [
      { "data": "cod_registro" , "width": "5%" },  
      { 
        "data": "nro_placa",
        "render": function(data, type, row, meta){
          if(type === 'display'){
            data = '<a href=../Buscar-Vehiculo/'+ data +'/detalleVehiculo>' + data + '</a>';
          }
          return data;
        }
      } ,
      { "data": "fecha_ult_mant"},
      { "data": "km_x_dia" },
       { "data": "prox_fecha_mant" },
      { "data": "estado_mantenimiento", 
       "render": function(data, type, row, meta){    
           if(data){
           if( data.trim() == "SEGURO"){
                data = '<span class="SEGURO">'+data+'</span>';
                console.log($(row));
            }else if (data.trim() == "VENCIDO" ){
                data = '<span class="VENCIDO" >'+data+'</span>';
            }else {
              data = '<span class="PROXIMO">'+data+'</span>';
            }
            }
          return data;
        }},
      { "data": "kilo_ult_mant" , "width": "20%" },
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

  .SEGURO {
    
    font-size: 12px;
    color:#08E700;
    font-style: oblique;
    font-weight: bold;
  }

  .VENCIDO {
    
    font-size: 12px;
    font-style: oblique;
    color:red;
    font-weight: bold;
  }

  .PROXIMO {
    /*font-family: "Arial Black", "Arial Bold", Gadget, sans-serif;*/
    font-size: 12px;
    color:#e5e500;
    font-style: oblique;
    font-weight: bold;
  }



  th { font-size: 12px; }
  td { font-size: 11px; }
</style>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <table cellspacing="0" class="display table table-bordered table-hover dt-responsive" id="example">
                <caption class="text-center">
                </caption>
                <thead>
                    <tr class="dropdown">
                        <th>
                            ID
                        </th>
                        <th>
                            PLACA
                        </th>
                        <th>
                            FECHA ULT.MANT
                        </th>
                        <th>
                            KM X DIA
                        </th>
                        <th>
                            FECHA PROX MANT
                        </th>
                        <th>
                            ESTADO MANTENIMIENTO    
                        </th>
                        <th>
                            KILO ULT.MANT
                        </th>
                        <th>
                            KM RECORRIDO
                        </th>
                        <th>
                            KM TOTAL
                        </th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop
