@extends('plantillabase')
@section('contenido')
<style>

btn-info.active, .btn-info.focus, .btn-info:active, .btn-info:focus, .btn-info:hover, .open>.dropdown-toggle.btn-info, .btn-info{
        background-color: #5bc0de;
        border-color: #5bc0de;
        font-weight: bold}

.glyphicon{
    top: 2px
}

  button.btneliminaruser{
        background-color: transparent;
        border-color: transparent;
        padding: 0;
  }

#btbscus{
    background-color: #5bc0de;
}

#btbscus:focus{
    outline-style: 0px;
    outline: 0px;
}

#btbscus > span {
    color: white;
}

</style>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div>
                <a class="btn btn-info" href="{{ route('usuario.create') }}">
                    Registrar Nuevo Usuario
                </a>
                @if(session('mensajeuser'))
                <div class="alert alert-success" id="success-alert">
                    {{ session('mensajeuser') }}
                </div>
                @endif
            </div>
        </div>
                <div class="col-xs-3 col-sm-offset-3">
                    <form action="{{route('usuario.index')}}" method="GET" style="display: inline-block">
                        <div class="input-group">
                    
                            <input type="search" name="nomusu" class="form-control" placeholder="Ingrese Usuario..." >                     
                            
                            <span class="input-group-btn" >
                                <button class="btn btn-default" id="btbscus" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                            </span>
                                            
                         </div>
                    </form>
                </div>
    </div>
    <h2 align="center" style="margin-bottom: 15px">
        LISTA DE USUARIOS
    </h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>
                    IDUSUARIO
                </th>
                <th>
                    NOMBRES Y APELLIDOS
                </th>
                <th>
                    EMAIL
                </th>
                <th>
                    TELEFONO
                </th>
                <th>
                    TIPO DE USUARIO
                </th>
                <th>
                    AGENCIA
                </th>
                <th>
                    ACCION
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $dato)
            <tr>
                <td>
                    {{ $dato->id }}
                </td>
                <td>
                    {{ $dato->name }} {{ $dato->apellido }}
                </td>
                <td>
                    {{ $dato->email }}
                </td>
                <td>
                    {{ $dato->telefono }}
                </td>
                <td>
                    @if($dato->nombre_roles == "ADMINISTRADOR")
                    <span class="label label-primary">
                        {{ $dato->nombre_roles }}
                    </span>
                    @else
                    <span class="label label-default">
                        {{  $dato->nombre_roles }}
                    </span>
                    @endif
                </td>
                <td>
                    {{ $dato->nombre_agencia }}
                </td>
                <td>
                    <a class="btn btn-warning btn-sm" href="{{ route('usuario.edit' , $dato->id) }}" style="padding: 0px 4px">
                      <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                    @if (auth()->user()->candestroy())
                    <form action="{{ route('usuario.destroy' , $dato->id) }}" method="POST" style="display: inline">
                        {!! csrf_field()!!}
                                {!! method_field('DELETE') !!}
                        <button class="btneliminaruser" type="submit">
                            <a class="btn btn-danger btn-sm" style="padding: 0px 4px">
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
        {!! $user->render() !!}
    </center>
</div>
<style>

div#success-alert.alert.alert-success{
        color: #305e30;
    background-color: #e2f1db;
    border-color: #e2f1db;
    max-width: 400px;
    position: absolute;
    margin-top: 10px;
    padding: 5px 10px
}
</style>
<script>
    $('div#success-alert.alert.alert-success').fadeIn().delay(4000).fadeOut();
</script>
@stop
