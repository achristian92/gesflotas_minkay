@extends('plantillabase')
@section('contenido')
  <style>
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    table.dataTable th,
    table.dataTable td {
        white-space: nowrap;
    }
    </style>

<body>
    <div class="container">
      <div class="row">
<style type="text/css">
    th, td{
        text-align: center;
    }
</style>
        {!! csrf_field() !!}  
        <div class="col-xs-12 ">
        <div class="card-body">
           <table class="table" cellspacing="0" id="example" class="display table table-bordered table-hover dt-responsive" >
            <caption><h3>  Top 10 agencias que más gastaron en mantenimiento </h3></caption>
                <thead>
                    <tr class="dropdown" >
                        <th>
                            Zona
                        </th>
                        <th>
                            Agencia
                        </th>
                        <th>
                            Monto
                        </th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            </div>
          </div>
      </div>
      <div class="row">
      </div>
      <div class="row">
          <div class="col-xs-offset-3">
             {!! $chart2->html() !!}  
          </div>
      </div>
    </div>
{!! Charts::scripts() !!}
{!! $chart2->script() !!}


<script type="text/javascript" src='https://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js'></script>
<script src="{{ url('js/indicator.js')  }}"></script>

@stop

