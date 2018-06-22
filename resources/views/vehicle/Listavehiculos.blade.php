@extends('plantillabase')
@section('contenido')
<style>
    button.BorrarVeh{
    background-color: transparent;
    border-color: transparent;
    padding: 0px;

}

 .glyphicon{
    font-size: 14px
 }

 .btn-info,.btn-info.active, .btn-info.focus, .btn-info:active, .btn-info:focus, .btn-info:hover, .open>.dropdown-toggle.btn-info{
        background-color: #03852d;
    border-color: #1c9142;
    letter-spacing: 0.5px;
 }




div#success-alert.alert.alert-success{
        color: #305e30;
    background-color: #e2f1db;
    border-color: #e2f1db;
    position: absolute;
        max-width: 400px;
        font-size: 13px;
        margin-top: -50px;
        padding: 5px 10px;
}


#bnbsveh{
    background-color: #03852d ;
    padding-top: 9px;
    padding-bottom: 10px;
    margin-top: -0.5px;

}

#bnbsveh > span {
    color: white;
    
}

.table-striped{
    font-size: 14px; 
    width: 104%; 
    max-width:104%;
    margin-left: -20Px

}

#botbusc,#botedit, #btnquit {
    padding: 2px 6px;
}

#botbusc{
    background-color: #2d2d75;
    border-color: #2d2d75;
}

#botedit{
    background-color: #ffb732;
    border-color: #ffb732;
}

.pagination>.active>span, .pagination>.active>span:focus{
    background-color: #0f8f0f;
}
#botonexpor{
    background-color: white;
    border-color: white;
    color: black;
}

</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="{{ url('js/user.js')  }}">
    </script>
    <div class="container">
        <div>
            <div class="row">
                <div class="col-md-6 ">
                    <a class="btn btn-info" href="{{ route('vehiculo.create') }}">
                        Registrar Nuevo Vehiculo
                    </a>
                </div>
                <div class="col-xs-3 col-sm-offset-3">
                    <form action="{{route('vehiculo.index')}}" method="GET" style="display: inline-block">
                        <div class="input-group">
                            <input class="form-control" name="num_placa" placeholder="Ingrese Placa..." type="search">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" id="bnbsveh" type="submit">
                                        <span class="glyphicon glyphicon-search">
                                        </span>
                                    </button>
                                </span>
                           
                        </div>
                    </form>
                </div>
            </div>
            <h2 align="center" >
                Lista de Vehículos
            </h2>
            @if(session('clave'))
            <div class="alert alert-success" id="success-alert">
                {{ session('clave') }}
            </div>
            @endif
            <div style="text-align: right;">
            <form action="{{ route('xls.exportdatavh') }}" method="post">
                {{csrf_field()}}
                <button class="btn btn-success" type="submit" id="botonexpor"> 
                    EXPORTAR A <img src="http://icons.iconarchive.com/icons/dakirby309/simply-styled/256/Microsoft-Excel-2013-icon.png" height="20" width="20"> 
                </button>
            </form>
            </div>
            <table class="table table-striped" >
                <thead>
                    <tr>
                        <th>
                            CODIGO
                        </th>
                        <th >
                         PLACA
                        </th>
                        <th>
                            TIPO
                        </th>
                        <th>
                            MODELO
                        </th>
                        <th>
                            ESTADO
                        </th>
                        <th>
                            NOMBRE CONDUCTOR
                        </th>
                        <th>
                            AGENCIA
                        </th>
                        <th>
                            ACCIONES
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datosvehiculo as $dato)
                    <tr>
                        <td>

                            {{ $dato->iddatosvehiculo }} 
                        </td>
                        <td >
                            {{ $dato->nro_placa }}
                        </td>
                        <td>
                            @if($dato->nombre_tipo_vehiculo == "MOTO")
                            <span class="label label-primary">
                                {{  $dato->nombre_tipo_vehiculo }}
                            </span>
                            @else
                            <span class="label label-default">
                                {{  $dato->nombre_tipo_vehiculo }}
                            </span>
                            @endif
                        </td>
                        <td>
                           
                             {{ $dato->nombre_modelo }} 
                        </td>
                        <td>
                            @if($dato->nombre_estado_vehi == "ACTIVO")
                            <span class="label label-success">
                                {{ $dato->nombre_estado_vehi }}
                            </span>
                            @else
                            <span class="label label-danger">
                                {{ $dato->nombre_estado_vehi }}
                            </span>
                            @endif
                        </td>
                        <td>
                            
                           <a href="{{ route('show.conduc', $dato->nro_placa ) }}"> {{ $dato->nombres_apellidos }} </a>
                            
                        </td>
                        <td >
                           {{ $dato->nombre_agencia }} 
                        </td>
                        <td style="padding-right:0px; padding-left: 2px; padding-top: 2px">
                            <a class="btn btn-info " href="{{ route('vehiculo.show' , $dato->nro_placa) }}" id="botbusc">
                                <span class="glyphicon glyphicon-search">
                                    
                                </span>
                            </a>
                            <a class="btn btn-info" href="{{ route('vehiculo.edit' , $dato->nro_placa) }}" id="botedit">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </a>
                            @if (auth()->user()->candestroy())
                            <form action="{{ route('vehiculo.destroy' , $dato->nro_placa) }}" method="POST" style="display: inline">
                                {!! csrf_field()!!}
                                {!! method_field('DELETE') !!}
                                <button class="BorrarVeh" type="submit">
                                    <a class="btn btn-danger" id="btnquit">
                                        <span class="glyphicon glyphicon-remove"></span>
                                    </a>
                                </button>
                            </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <center>
                {!! $datosvehiculo->render() !!}
            </center>
        </div>
    </div>
    <script>
        $('div#success-alert.alert.alert-success').fadeIn().delay(4000).fadeOut();
    </script>
    @stop
</link>