@extends('admin.layout')
@section('contentadmin')


<style type="text/css">
	h2{
		letter-spacing: 1.2px;
		transform: scaleY(0.9);
		padding-bottom: 35px;
		padding-top: 0px;
		margin-top: 5px;
		
	}

	table.table-striped{
		width: 95%;
		max-width: 95%;
	}

	.table-striped>tbody>tr:nth-of-type(odd){
		background-color: rgba(255,255,255,0.1);
	
	}

	.btn-sm{
		padding: 1px 9px;
	}

	.btn-info{
		background-color: #33834b;
		border-color: #33834b;
	}
	
</style>


<center>
	<h2>
		<strong>
		 AGENCIAS
		</strong> 
	</h2>
</center>



<div class="container-fluid">
	<div class="row">

		<div >

			<button class="btn btn-info" type="button" data-toggle="modal" data-target="#modagncs" >
                       Agregar Agencia
            </button>
            <h1></h1>
            
            <div id="modagncs" class="modal fade" role="dialog">
					    <div class="modal-dialog">

						    <!-- Modal content-->
							<div class="modal-content">
						    <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal">&times;</button>
						        <h3 class="modal-title"> Nueva Agencia </h3>
						    </div>
						    <div class="modal-body">
							  <form class="form-horizontal">

								<div class="form-group">
								  <label class="col-md-6 control-label" for="textinput">Departamento</label>  
									  <div class="col-md-5">
                                        <select class="form-control" id="depagenc" name="depagenc">
                                            <option value="Lima">Lima</option>
  											<option value="Piura">Piura</option>
                                        </select>
									    
									  </div>
								</div>

								<div class="form-group">
								  <label class="col-md-6 control-label" for="textinput">Provincia</label>  
									  <div class="col-md-5">
                                        <select class="form-control" id="depagenc" name="depagenc">
                                            <option value="Lima1">Lima</option>
  											<option value="Huaral">Huaral</option>
                                        </select>
									    
									  </div>
								</div>

								<div class="form-group">
								  <label class="col-md-6 control-label" for="textinput">Distrito</label>  
									  <div class="col-md-5">
                                        <select class="form-control" id="depagenc" name="depagenc">
                                            <option value="ancon">Ancón</option>
  											<option value="ventanilla">Ventanilla</option>
                                        </select>
									    
									  </div>
								</div>
						
								<div class="form-group">
								  <label class="col-md-6 control-label" for="textinput">Nombre de la Agencia</label>  
									  <div class="col-md-5">
									  <input id="textinput" name="textinput" type="text" class="form-control input-md" style="border-radius: 3px; ">
									    
									  </div>
								</div>

							  </form>
						    </div>
						    <div class="modal-footer">
						       <button type="submit" class="btn btn-info" data-dismiss="modal">Agregar</button>

						        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
							</div>
							</div>

							</div>
			</div>



							<table class="table table-striped">
	                <thead>
	                    <tr>
	                        <th>
	                            ID
	                        </th>
	                        <th>
	                            NOMBRE
	                        </th>
	                        <th>
	                            DISTRITO
	                        </th>
	                        <th>
	                        	ID DISTRITO
	                        </th>
	                        <th>
	                        	PROVINCIA
	                        </th>
	                        <th>
	                        	DEPARTAMENTO
	                        </th>
	                        <th>
	                        	ACCIONES
	                        </th>
	                    </tr>
	                </thead>
	                <tbody>
	                	 @foreach ($agencias as $datosagen)
	                	<tr>
	                		<td>
	                		{{ $datosagen->idagencia }}
	                		</td>
	                		<td>
	                		{{ $datosagen->nombre_agencia }}	
	                		</td>
	                		<td>
	                		{{ $datosagen->direccion }}
	                		</td>
	                		<td>
	                		{{ $datosagen->nom_distrito }}
	                		</td>
	                		<td>
	                		{{ $datosagen->nom_provincia }}
	                		</td>
	                		<td>
	                		{{ $datosagen->nom_departamento }}
	                		</td>

	                		<td>

	                            <a class="btn btn-warning btn-sm" href="#">
	                                <i class="fa fa-pencil-square-o" style="font-size: 16px">
	                                </i>
	                            </a>
                                <a class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash" style="font-size: 16px">
                                        </i>
                                </a>
	                		</td>
	                	</tr>
						@endforeach
	                </tbody>
	            </table>
		
	</div>
</div>
</div>
@stop