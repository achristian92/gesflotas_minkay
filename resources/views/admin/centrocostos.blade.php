@extends('admin.layout')
@section('contentadmin')

<style type="text/css">
	h2{
		letter-spacing: 1.2px;
		transform: scaleY(0.9);
		padding-bottom: 35px;
		padding-top: 0px;
		margin-top: 5px;
		text-align: center;
		font-weight: bold;
		
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
		background-color: #0099d0;
		border-color: #0099d0;
	}
	
</style>

	<h2>
			 CENTRO DE COSTOS
	</h2>

<div class="container-fluid">
	<div class="row">



		<div>
			  <button class="btn btn-info" type="button" data-toggle="modal" data-target="#modnvcencos" >
                        Agregar centro de costo
              </button>

              <div id="modnvcencos" class="modal fade" role="dialog">
					    <div class="modal-dialog">

						    <!-- Modal content-->
							<div class="modal-content">
						    <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal">&times;</button>
						        <h3 class="modal-title"> Nuevo centro de costo</h3>
						    </div>
						    <div class="modal-body">
							  <form class="form-horizontal">
						
								<div class="form-group">
								  <label class="col-md-6 control-label" for="textinput">Nombre centro de costo</label>  
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

              <h3>Centros de Costo</h3>
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
	                	@foreach($datoscen as $datacc)
	                	<tr>
	                		<td>
	                		{{ $datacc->idcentro_costo }}
	                		</td>
	                		<td>
	                		{{ $datacc->nombre_centro_costo }}
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