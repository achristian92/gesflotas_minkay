<!DOCTYPE html>

<html>
<head>
  <link href="https://minkay.com.pe/img/favicon.ico" rel="shortcut icon">

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Starter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="adminlte/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="adminlte/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="adminlte/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="adminlte/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<style type="text/css">

/*div.content-wrapper{
  background: url("public/assets/img/fondopeces.png")
}*/
 
.skin-blue .main-header .navbar .nav>li>a:hover, .skin-blue .main-header .navbar .nav>li>a:active, .skin-blue .main-header .navbar .nav>li>a:focus, .skin-blue .main-header .navbar .nav .open>a, .skin-blue .main-header .navbar .nav .open>a:hover, .skin-blue .main-header .navbar .nav .open>a:focus, .skin-blue .main-header .navbar .nav>.active>a, .skin-blue .main-header .navbar .nav>li>a, .skin-blue .main-header .navbar .sidebar-toggle:hover, .skin-blue .main-header .navbar .sidebar-toggle {
  color: black;
}

.skin-blue .main-header .navbar .sidebar-toggle:hover{
  background-color: transparent;
}



.skin-blue .sidebar a{
  color: #282828
}

.skin-blue .main-header .navbar
{  background-color: #ededed;
}

  .skin-blue .main-header .logo, .logo:hover{
    background-color: #ededed!important;
  }

  .skin-blue .wrapper, .skin-blue .main-sidebar, .skin-blue .left-side{
    background-color: #ededed
  }

  .skin-blue .sidebar-menu>li.header{
    background-color: #70003a;
    color: #fff ;
  }

  .skin-blue .sidebar-menu>li:hover>a, .skin-blue .sidebar-menu>li.active>a, .skin-blue .sidebar-menu>li.menu-open>a{
    background: #0099d0;
  }

  .skin-blue .sidebar-menu>li.active>a{
    border-left-color: rgb(255,255,200);
  }

  .enlace{
    color: #2a6283
  }

  .enlace:hover{
    color: #2a6283
  }

  .skin-blue .main-header li.user-header{
    background-color: #516e7f;
  }

  footer.main-footer{
    padding: 10px 15px
  }

</style>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="{{  route('home')  }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">
                <img height="20" width="20" src="assets/img/montesminkay.png" style="margin-top: -4px; margin-left: -5px" />
        
      </span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"> 
        <img height="35" width="140" src="assets/img/demo.png" style="margin-top: -4px; margin-left: -5px" />
      </span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="http://www.escrituradigital.net/fdypc/wp-content/uploads/2017/03/avatar-blank.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Erick Smith</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="http://www.escrituradigital.net/fdypc/wp-content/uploads/2017/03/avatar-blank.png" class="img-circle" alt="User Image">

                <p>
                  Erick Smith
                
                </p>
              </li>

              <!-- Menu Footer-->
              <li class="user-footer">
<!--                 <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div> -->
                <div align="center">
                  <a href="#" class="btn btn-default btn-flat">Cerrar Sesión</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->




      <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">
      
    <!-- Optionally, you can add icons to the links -->
    <!-- <li class="active"><a href="indexvehiculo"><i class="fa fa-link"></i> <span></span></a></li> -->
    <li class="active">
      <a href={{ route('deparacargo') }}><i class="fa fa-link"></i> <span>Departamento a cargo</span></a>
    </li>
    <li>
      <a href={{ route('index.centrocosto') }}><i class="fa fa-link"></i><span>Centro de Costos</span></a>
        </li>
    <li><a href={{ route('marcas') }}><i class="fa fa-link"></i> <span>Marca</span></a></li>
    <li><a href={{ route('model.index') }}><i class="fa fa-link"></i> <span>Modelo</span></a></li>
    <li><a href={{ route('agen') }}><i class="fa fa-link"></i> <span>Agencia</span></a>
    <li><a href={{ route('provecomb') }} ><i class="fa fa-link"></i> <span>Proveedores de Combustible</span></a></li>
    <li><a href={{ route('provemant') }} ><i class="fa fa-link"></i> <span>Proveedores de Mantenimiento</span></a></li>
    <li><a href={{ route('conductores.index') }} ><i class="fa fa-link"></i> <span>Conductores</span></a></li>
          <!--  <li class="treeview">
                      <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="#">Link in level 2</a></li>
                        <li><a href="#">Link in level 2</a></li>
                      </ul>
                    </li> --> 
  </ul>
    <!--       <ul class="sidebar-menu" data-widget="tree"> -->
        <!-- <li class="header">HEADER2</li> -->
        <!-- Optionally, you can add icons to the links -->

    <!--  <li><a href="#"><i class="fa fa-link"></i> <span>Departamento a cargo</span></a></li>  -->

      <!--         <li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#">Link in level 2</a></li>
                <li><a href="#">Link in level 2</a></li>
              </ul>
            </li> -->
       <!--     </ul>  -->
          <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
<!--       <h1>
        Data Flotas
        <small>Datos de las flotas</small>
      </h1> -->

    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      @yield('contentadmin')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
<!--     <div class="pull-right hidden-xs">
      Todos los derechos reservados
    </div> -->
    <!-- Default to the left -->
    <strong>  &copy; 2018 <a href="https://www.minkay.com.pe/" class="enlace">Proyecto Minkay</a>.</strong> Derechos Reservados.
  </footer>

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="adminlte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="adminlte/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>