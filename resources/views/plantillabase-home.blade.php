<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
           DEMO FLOTAS
        </title>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1" name="viewport">
                <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
                    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
                        <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
                            <!-- 3 errores frecuentes-->
                            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" type="text/css">
                                <link href="assets/css/usuario.css" rel="stylesheet" type="text/css">
                                    {{--
                                    <link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css">
                                        --}}
                                        <style>

    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }

   footer {
  position: relative;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  background-color: #efefef;
  text-align: center;
   
}


li.dropdown{margin-top: -10px}

ul.menuflotas
{
list-style-type: none;
margin-top: 10px;


}

li.submenuflo {
 float: left;
 list-style: lower-norwegian;
 font-size: 15px;
 padding-left: 5px;
 padding-right: 10px;

}

                        ul.menuflotas{
   font-family: Calibri;
    margin-left: 60px;
    vertical-align: text-bottoms;
    margin-top: -12px;

      
}

li.submenuflo{
    font-weight: bold;
    font-size: 15px;
    padding: 0;
  
 

  }


a.dropdown-toggle{
     
      color: white;
      padding-top: 20px;
      padding-bottom: 20px;

}

.nav .open>a, .nav .open>a:focus, .nav .open>a:hover{
background-color: transparent;
     
}

.nav>li>a:focus, .nav>li>a:hover{
    background-color: transparent;
}




a.dirmen{
    background: rgba(141, 225, 143, 0.3);
    text-decoration: none;
/*    border-right: 1px solid rgba(0,0,0,0.2);
    border-left: 1px solid rgba(0,0,0,0.2);*/
    border-radius: 2px;
    font-weight: 700;
    color: #337ab7;
    cursor: pointer;
    display: block;
    position: relative;
   /* border: 2px solid #F7CA18;*/
    transition: all 0.7s cubic-bezier(0.215, 0.61, 0.355, 1) 0s;
    padding: 15px 20px;
}
a.dirmen:hover {
    color: #fff !important;
    background-color: #00C8D5;
    text-shadow: 2px 2px rgba(0,0, 255 , 0.1) ;
}
a.dirmen:hover:before {
    bottom: 0%;
    top: auto;
    height: 100%;
}
a.dirmen:before {

    display: block;
    position: absolute;
    left: 0px;
    top: 0px;
    height: 0px;
    width: 100%;
    z-index: -1;
    content: '';
    color: #fff !important;
    background:  #00C8D5;
    transition: all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1) 0s;
}




                                        </style>
                                        <link href="https://minkay.com.pe/img/favicon.ico" rel="shortcut icon">
                                      
                                 
                         
                
             
            
       
    </head>
    <body>
        {!! csrf_field() !!}
        <nav class="navbar" style="background-color: #efefef">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" style="display: inline-block; padding-top: 7px">
                        <img height="30" src="assets/img/demo.png" style="float: left; padding-top: 2px" width="150"/>
                    </a>

                </div>
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


        <script src="assets/js/jquery.min.js">
        </script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript">
        </script>
        @yield('contenido')
        @yield('footer')
        <footer >
            <center>
            <span>Derechos Reservados © 2018 <strong> Proyecto Minkay</strong></span>                
            </center>
        </footer>
    </body>
</html>
