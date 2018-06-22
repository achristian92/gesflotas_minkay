@extends('plantillabase')
@section('contenido')


<style >
 .form-horizontal .form-group{
    margin-left: 0px;
  }

  hr{
    margin-top: 1rem;
    margin-bottom: 1rem;
  }
  .col-sm-6{
    padding-right: 50px;
  }

.btn:focus, .btn:active:focus{
  outline: 0px;
  outline-offset: 0px;
}

p, .lisvh{
  letter-spacing: 0.5px;
  font-family: Calibri;
  font-size: 16px;
}

.btn-success{
  padding: 3px 10px;
  margin-bottom: 5px;
  background-color: #959595;
  border-color: #959595;
  font-size: 13px
}

.btn-success:hover, .btn-success:active, .btn-success:focus{
    background-color: #959595;
  border-color: #959595;
}
div#success-alert.alert.alert-success{
        color: #305e30;
        background-color: #e2f1db;
        border-color: #e2f1db;
        max-width: 400px;
        position: absolute;
        margin-top: 10px;
        padding: 5px 10px;

</style>
 @if(session('clave_detalle'))
    <div class="alert alert-success" id="success-alert">
        {{ session('clave_detalle') }}
    </div>
    <script>
        $('div#success-alert.alert.alert-success').fadeIn().delay(4000).fadeOut();
    </script>
    @endif
<h1 align="center">
   <span class="glyphicon glyphicon-cloud-upload"></span>  Importar Excel
</h1>

<div class="container" style="margin-top: 1.5em"  >
    <div class="col-sm-6" style="padding-left: 105px">
      <h4>CARGAR CSV</h4>
      <hr>
      <form class="form-horizontal" method="post" action={{ route('importarexcel') }} enctype="multipart/form-data">
        {{ csrf_field() }}
        <fieldset>
          <div class="form-group">
            <label class="control-label" for="textinput" >SELECCIONE INFORMACIÓN A CARGAR </label>  
                       
                        <select id="tipo_tb_importar" name="tipo_tb_importar" class="form-control" required="">
                            <option value="">.::Seleccionar::.</option>
                            <option value="1" >Cargar Gastos de Combustible</option>
                            <option value="2">Cargar Conductores</option>
                            
                        </select>
          </div>
          <div class="form-group">
            <label class="control-label" for="textinput" >SELECCIONE ARCHIVO</label> 
            <input type="file" name="importcsv" id="importcsv" class="form-control" required="">
          </div>
        </fieldset>
      <button type="submit" class="btn btn-primary ">Importar</button>
      </form>
     

<h4 style="padding-top: 20px">Plantillas</h4>
<hr>
<div>
   <form action="{{ route('plant.conductores') }}" method="post">
                {{csrf_field()}}
                <button class="btn btn-success" type="submit"> 
                   Descargar plantillas excel de Conductores
                </button>
   </form>
   <form action="{{ route('plant.combu') }}" method="post">
                {{csrf_field()}}
                <button class="btn btn-success" type="submit"> 
                  Descargar plantillas excel de Gastos Combustible
                </button>
   </form>
</div>
     </div>
      <div class="col-sm-6" style="padding-left: 40px">
      <h4>INSTRUCCIONES</h4>
      <hr>
      <p>
        Esta función te permitirá importar, de una manera muy cómoda, varios registros directamente a tu base de datos de flotas.
      </p>
      <p>
        El tipo de información que actualmente puedes importar es:
        <ul>
         <li  class="lisvh"> Conductores </li>
         <li  class="lisvh"> Gastos de Combustible </li>
         </ul>
      </p>
      <p>
        Puede usar las plantillas para adaptar su información
      </p>
    </div>
</div>
     
    
</form>


@endsection