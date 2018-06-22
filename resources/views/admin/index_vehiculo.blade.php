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
		 PROVEEDORES 
		</strong> 
	</h2>
</center>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">

				<button class="btn btn-info" type="button" data-toggle="modal" data-target="#modnvprman" >
                        Agregar prov. mante.
                </button>
					<div id="modnvprman" class="modal fade" role="dialog">
					  <div class="modal-dialog">

					    <!-- Modal content-->
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        <h3 class="modal-title"> Nuevo Proveedor de Mantenimiento </h3>
					      </div>
					      <div class="modal-body">
							<form class="form-horizontal">

													
							<div class="form-group">
							  <label class="col-md-6 control-label" for="textinput">Nombre proveedor de mantenimiento</label>  
							  <div class="col-md-5">
							  <input id="textinput" name="textinput" type="text" class="form-control input-md">
							    
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
			<h3> Proveedores de Mantenimiento </h3>


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
	                            ACCIONES
	                        </th>
	                    </tr>
	                </thead>
	                <tbody>
	                	<tr>
	                		<td>
	                			123456
	                		</td>
	                		<td>
	                			Corporacion Miyasato
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
	                	<tr>
	                		<td>
	                			123456
	                		</td>
	                		<td>
	                			Corporacion Miyasato
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
	                </tbody>
	            </table>

		</div>
		<div class="col-md-6">
			<button class="btn btn-info" type="button" data-toggle="modal" data-target="#modnvprcomb" >
                        Agregar prov. combustible
            </button>
					<div id="modnvprcomb" class="modal fade" role="dialog">
					  <div class="modal-dialog">

					    <!-- Modal content-->
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        <h3 class="modal-title"> Nuevo Proveedor de Combustible </h3>
					      </div>
					      <div class="modal-body">
							<form class="form-horizontal">

													
							<div class="form-group">
							  <label class="col-md-6 control-label" for="textinput">Nombre proveedor de combustible</label>  
							  <div class="col-md-5">
							  <input id="textinput" name="textinput" type="text" class="form-control input-md">
							    
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
			<h3>  Proveedores de Combustible </h3>



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
	                            ACCIONES
	                        </th>
	                    </tr>
	                </thead>
	                <tbody>
	                	<tr>
	                		<td>
	                			123456
	                		</td>
	                		<td>
	                			Corporacion Miyasato
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
	                	<tr>
	                		<td>
	                			123456
	                		</td>
	                		<td>
	                			Corporacion Miyasato
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
	                </tbody>
	            </table>
		</div>
	</div>
</div>


    @stop
