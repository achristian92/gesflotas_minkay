<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
           DEMO FLOTAS
        </title>
        <meta charset="utf-8">
            
            <meta content="width=device-width, initial-scale=1" name="viewport">
            <link href="https://minkay.com.pe/img/favicon.ico" rel="shortcut icon">

                <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

                    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">

                        <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
                            
                            <!-- 3 errores frecuentes-->
                            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" type="text/css">
                                <link href="../assets/css/usuario.css" rel="stylesheet" type="text/css">
                                    <link href="../assets/css/font-awesome.css" rel="stylesheet" type="text/css">
                                        <style>


    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }


li.dropdown{margin-top: -10px}

ul.menuflotas
{
list-style-type: none;
font-family: Calibri;
margin-left: 20px;
vertical-align: text-bottoms;
margin-top: -15px;


}

li.submenuflo {
 float: left;
 list-style: lower-norwegian;
 font-size: 15px;
padding: 0;

  


}

a.dropdown-toggle{

      color: white;

}

.nav .open>a, .nav .open>a:focus, .nav .open>a:hover{
background-color: transparent;
     
}

.nav>li>a:focus, .nav>li>a:hover{
    background-color: transparent;
}

a.dirmen{
    background: rgba(141, 225, 143, 0.1);
    text-decoration: none;
/*    border-right: 1px solid rgba(0,0,0,0.2);
    border-left: 1px solid rgba(0,0,0,0.2);*/
    border-radius: 2px;
    font-weight: 700;
    color: #5d5d5d;
    cursor: pointer;
    display: block;
    position: relative;
   /* border: 2px solid #F7CA18;*/
    transition: text-decoration 5s;
    padding: 15px 20px;
    transition: text-shadow 0.7s;
    

}

a.dirmen:hover {
    color: #5d5d5d ;    
    text-shadow: 1.5px 1.5px rgba(0,0, 0 , 0.2) ;
    text-decoration: underline;

}



</style>

<link href="https://minkay.com.pe/img/favicon.ico" rel="shortcut icon">
                                    
                           
                     

            </meta>
        </meta>
    </head>
    <body >
        {!! csrf_field() !!}
        <nav class="navbar" style="background-color: #efefef">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" style="display: inline-block; padding-top: 7px">
                        <img height="30" src="../assets/img/demo.png" width="150" style="float: left; padding-top: 2px" />
                    </a>
                </div>
                <ul class="menuflotas">
                    <li class="submenuflo" style="margin-left: 145px; ">
                        <a class="dirmen" href="{{  route('home')  }}" style="">

                            Inicio
                        </a>
                    </li>
                    <li class="submenuflo">
                        <a class="dirmen" href="{{  route('vehiculo.index')  }}">

                            Vehículos
                        </a>
                    </li>
                    <li class="submenuflo">
                        <a class="dirmen" href="{{  route('estadovehiculo')  }}">

                            Consulta
                        </a>
                    </li>
                    <li class="submenuflo">
                        <a class="dirmen" href="{{  route('generarreportes')  }}">

                            Reportes
                        </a>
                    </li>
                    <li class="submenuflo">
                        <a class="dirmen" href="{{ route('indicadores') }}">

                            Indicadores
                        </a>
                    </li>
                    <li class="submenuflo">
                        <a class="dirmen" href="{{route('usuario.index')}}">

                            Usuarios
                        </a>
                    </li>
                    <div class="underbar">
                    </div>
                </ul>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="margin-top: 10px; color: #6f6f6f">
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
                                                    <a class="btn btn-danger btn-block" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        Cerrar Sesión
                                                    </a>
                                                    <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                    </form>
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

        <script src="../assets/js/jquery.min.js">
        </script>
        <script src="../assets/js/bootstrap.min.js" type="text/javascript">
        </script>
        @yield('contenido')
        @yield('footer')


    </body>
</html>
