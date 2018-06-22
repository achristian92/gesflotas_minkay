@extends('admin.layout')
@section('contentadmin')

<style >
	h2{
		letter-spacing: 1.2px;
		transform: scaleY(0.9);
		padding-bottom: 35px;
		padding-top: 0px;
		margin-top: 5px;
		text-align: center;
		font-weight: bold;
		
	}
</style>
	<h2>
			 MODELO
	</h2>
		<div>
			  <button class="btn btn-info" type="button" data-toggle="modal" data-target="#modnvcencos" >
                        Agregar Modelo
              </button>

              <div id="modnvcencos" class="modal fade" role="dialog">
					    <div class="modal-dialog">

						    <!-- Modal content-->
							<div class="modal-content">
						    <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal">&times;</button>
						        <h3 class="modal-title"> Nuevo modelo</h3>
						    </div>
						    <div class="modal-body">
							  <form class="form-horizontal">
						
								<div class="form-group">
								  <label class="col-md-6 control-label" for="textinput">Nombre del modelo</label>  
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
	                            MODELO
	                        </th>
	                        <TH>
	                        	MARCA
	                        </TH>
	                        <th>
	                            ACCIONES
	                        </th>
	                    </tr>
	                </thead>
	                <tbody>
	                	@foreach ($modelos as $datmol)
	                	<tr>
	                		<td>
	                			{{ $datmol->idtipomodelo}}
	                		</td>
	                		<td>
	                			{{ $datmol->nombre_modelo}}
	                		</td>
	                		<td>
	                			{{ $datmol->nombre_marca}}
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
@stop