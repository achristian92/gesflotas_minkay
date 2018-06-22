<!DOCTYPE doctype html>
<html lang="{{ app()->getLocale() }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <head>
            <meta charset="utf-8">
                <meta content="IE=edge" http-equiv="X-UA-Compatible">
                    <meta content="width=device-width, initial-scale=1" name="viewport">
                        <title>
                            Proyecto Minkay
                        </title>
                        <!-- Fonts -->
                        <!-- Styles -->
        <style>

                    .body{
                        background-color: none;
                    }
                        .presentacion {
                            background:url(img/dibujoflota.png);
                            padding-bottom: 50px;
                            background-attachment: fixed;
                            

                        }

                        .comentarios{
                            padding-bottom: 35px;
                        }

                    @-webkit-keyframes fadeInDownBig {
                      from {
                        opacity: 0;
                        -webkit-transform: translate3d(0, -200px, 0);
                        transform: translate3d(0, -200px, 0);
                      }

                      to {
                        opacity: 1;
                        -webkit-transform: translate3d(0, 0, 0);
                        transform: translate3d(0, 0, 0);
                      }
                    }
                                h1{
                                    font-size: 55px;
                                    color: rgba(255,255,255, 0.8);
                                    font-weight: bold;
                                    letter-spacing: 4px;
                                    animation: fadeInDownBig 1.5s;
                                }


                                .subpor {
                                    font-weight: bold;
                                    font-size: 30px;
                                    letter-spacing: 5px;
                                    color: white;
                                    padding-top: 45px;
                                    padding-bottom: 25px;
                                    
                                }

                                .inicio{
                                    font-family: verdana;
                                    font-size: 18px;
                                    padding: 25px;
                                    color: white

                                }

                                .referlog
                                {
                                    color: white;

                                }

                                .referlog:hover, .referlog:focus
                                {
                                    color: white;
                                    text-decoration: none
                                }

                                button{
                                    border-radius: 3px;
                                    background-color: #008ed6;
                                    border-color: #008ed6;
                                    border-bottom: #008ed6;
                                    border-right: #008ed6;
                                    padding-top: 6px;
                                    padding-bottom: 6px;
                                    

                                }

                                .parrafo{
                                    color: white;
                                    font-family: calibri;
                                    font-size: 20px;
                                    padding-bottom: 25px;
                                    letter-spacing: 0.5px
                                }

                                .parrafdes{
                                    letter-spacing: 0.7px;
                                    font-family: calibri;
                                    font-size: 18px;
                                    line-height: 1.5; 
                                    color: #747474 ;
                                }

                                .imagenlte{

                                    animation: fadeInDownBig 1.5s
                                    
                                    padding-top: 50px;

                                }

                                .funciones{
                                    background-color: #efeff2;
                                    margin-top: -20px;

                                }

                                .linea{
                                    height: 1px;
                                    width: 50px;
                                    background: blue;

                                }

                                .tfun{
                                    text-align: center;
                                    letter-spacing: 1px;
                                }


                    @keyframes slideInRight {
                      from {
                        -webkit-transform: translate3d(100%, 0, 0);
                        transform: translate3d(100%, 0, 0);
                        visibility: visible;
                      }

                      to {
                        -webkit-transform: translate3d(0, 0, 0);
                        transform: translate3d(0, 0, 0);
                      }
                    }

                                .sub{
                                    color: #666666;
                                    animation: slideInRight 1.5s 
                                }

                                .descf{
                                    line-height: 1.6;
                                    text-align: center;
                                    color: #676767;
                                    letter-spacing: 0.7px
                                }

                                .glyphicon {
                                   font-size: 55px;
                                   color: rgba(100,100,255);
                                   padding-bottom: 15px;

                                    }


                    @keyframes slideInLeft {
                      from {
                        -webkit-transform: translate3d(-100%, 0, 0);
                        transform: translate3d(-100%, 0, 0);
                        visibility: visible;
                        opacity: 0
                      }

                      to {
                        -webkit-transform: translate3d(0, 0, 0);
                        transform: translate3d(0, 0, 0);
                        opacity: 1
                      }
                    }


                                    .tifunc{
                                        padding-top: 50px; 
                                        padding-bottom: 10px; 
                                        color: #525252; 
                                        letter-spacing: 1.5px;
                                        animation: slideInLeft  1.5s;
                                    }

                                    .linea{
                                        animation: slideInLeft 1.5s;
                                    }

                    @keyframes zoomInRight {
                      from {
                        opacity: 0;
                        -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
                        transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
                        -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
                        animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
                      }

                      60% {
                        opacity: 1;
                        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
                        transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
                        -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
                        animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
                      }
                    }

                                .col-md-4{
                                    padding-top: 30px;
                                    padding-bottom: 15px;
                                    animation: zoomInRight 1.5s;
                                }


                    @keyframes zoomIn {
                      from {
                        opacity: 0;
                        -webkit-transform: scale3d(0.3, 0.3, 0.3);
                        transform: scale3d(0.3, 0.3, 0.3);
                      }

                      50% {
                        opacity: 1;
                      }
                    }


                    @keyframes fadeInRightBig {
                      from {
                        opacity: 0;
                        -webkit-transform: translate3d(2000px, 0, 0);
                        transform: translate3d(2000px, 0, 0);
                      }

                      to {
                        opacity: 1;
                        -webkit-transform: translate3d(0, 0, 0);
                        transform: translate3d(0, 0, 0);
                      }
                    }
                                .col-md-6
                                {
                                    animation: zoomIn 1.5s;
                                }

                    @keyframes fadeInLeftBig {
                      from {
                        opacity: 0;
                        -webkit-transform: translate3d(-2000px, 0, 0);
                        transform: translate3d(-2000px, 0, 0);
                      }

                      to {
                        opacity: 1;
                        -webkit-transform: translate3d(0, 0, 0);
                        transform: translate3d(0, 0, 0);
                      }
                    }

                                #imagen123{
                                    animation: fadeInLeftBig 1.5s
                                }


                                .col-sm-offset-1.col-sm-5{
                                    animation: fadeInRightBig 1.5s;

                                }
                            

        </style>

        </head>
        <body>
            <section class="presentacion">
                <div class="container">
                    <div class="row">
                        <center>
                            <h1>
                                Gestión de flotas
                            </h1>
                        </center>
                        <div class="col-md-6" id="imagen123" style="padding-right: 30px">
                            <img src="img/imagenportada.png" style="margin-top: 30px; max-width: 100%" >
                            
                        </div>
                        <div class="col-md-6" style="padding-left: 15px">
                            <h2 class="subpor">
                                Administra tus flotas de manera eficiente
                            </h2>
                            <h4 class="parrafo" >
                               Olvídate de las hojas de cálculo y utiliza este sistema para un manejo eficiente y eficaz de tus flotas
                            </h4>
                            <center>
                                <button>
                                    <span class="inicio">
                                        <a href="{{ route('login') }}" class="referlog">
                                            INICIAR SESIÓN
                                        </a>
                                    </span>
                                </button>
                            </center>
                        </div>
                    </div>
                </div>
            </section>
            <section class="comentarios" style="background: #fafafa">
                
                     <div class="container">
                         <div class="row" style="padding-top: 25px">
                             
                             <div class="col-md-6" >
                                 <center>
                                     <h3 style="font-weight: bold; padding-bottom: 25px">¿Qué es?</h3>
                                 </center>

                                 <h5 class="parrafdes">
                                     Es una plataforma en línea (software como servicio) que facilita la administración de flotas vehículares, maquinaría o cualquier motor de tu empresa.
                                 </h5>   
                                 <h5 class="parrafdes">
                                     Puedes crear un inventario de tus vehículos (o cualquier motor) para llevar un mejor control de sus gastos de combustible y mantenimientos, así como reportar y administrar incidentes que necesitan reparación, prever vencimientos de licencias y seguros vehículares, entre muchas otras cosas.
                                 </h5>
                                 
                             </div>
                             <div class="col-sm-offset-1 col-sm-5">
                                <div class="imagenlte" >
                                <img src="img/imagenflotalte.png" style="max-width: 100%" >
                                    
                                </div>
                                 
                             </div>
                         </div>
                     </div>
                

              
            </section>

            <section class="funciones">

                <center>
                    
                        <h3 class="tifunc" >
                            FUNCIONES
                        </h3>
                 
                        <div class="linea">

                        </div>
                        <h5 class="sub">
                            Amigable, funcional 
                        </h5>
                </center>

                <div class="container" style="padding-top: 35px">
                    
                    <div class="row" >
                        
                        <div class="col-md-12">
                            <div class="col-md-4">

                                <center>
                                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                                </center>
                                
                                <h4 class="tfun">
                                    Cálculo de Mantenimientos
                                </h4>  

                                <h5 class="descf">
                                    Realiza cálculos precisos para los mantenimientos de tus vehículos, para así medir de manera seguida el rendimiento de tu flota
                                </h5>  
                            </div>
                            <div class="col-md-4">
                                <center>
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                </center>
                                <h4 class="tfun">
                                    Registro de Inventarios
                                </h4>
                                <h5 class="descf">
                                    Registre los vehículos de su flota al detalle y la información estará a tu disponibilidad de manera rápida y segura
                                </h5>    
                            </div>
                             <div class="col-md-4">
                                    <center>
                                        <span class="glyphicon glyphicon-file" aria-hidden="true"></span>
                                    </center>
                                    <h4 class="tfun">
                                        Generación de reportes
                                    </h4>
                                    <h5 class="descf">
                                        Genera tus reportes de manera fácil, sencilla y cómoda para transferir su información como crea conveniente
                                    </h5>  
                                </div>
                                                        
                              
                                <div class="col-md-4">
                                    <center>
                                        <span class="glyphicon glyphicon-stats" aria-hidden="true"></span>
                                    </center>
                                    <h4 class="tfun">
                                        Gestión de indicadores
                                    </h4>
                                    <h5 class="descf">
                                        Observa los indicadores para poder analizar las estadísticas con respecto a tus flotas y de esa manera facilitar los datos.    
                                    </h5>  
                                </div>

                                <div class="col-md-4">
                                    <center>
                                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                    </center>
                                    <h4 class="tfun">
                                        Administración de usuarios  
                                    </h4>
                                    <h5 class="descf">
                                        Priorizando la seguridad, usted podrá gestionar los accesos y la información permitida por el tipo de usuario que usted le asigne
                                    </h5>  
                                </div>

                                <div class="col-md-4">
                                    <center>
                                        <span class="glyphicon glyphicon-alert" aria-hidden="true"></span>
                                    </center>
                                    <h4 class="tfun">
                                        Control de Vehículos
                                    </h4>
                                    <h5 class="descf">
                                        Usted tendrá acceso a información detallada de toda su flota. De esta manera el control de los vehículos será eficaz y continua.
                                    </h5>  
                                </div>
                            
                        </div>


                    </div>


                </div>

                
            </section>
        </body>
    
</html>
