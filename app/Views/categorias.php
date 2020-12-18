<!DOCTYPE html>
<html>
<head>
	<title>Datatable</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('datatable/dataTables.bootstrap4.min.css') ?>">
	<script src="<?php echo base_url('js/jquery-3.5.1.min.js') ?>"></script>
	<script src="<?php echo base_url('bootstrap/popper.min.js') ?>"></script>
	<script src="<?php echo base_url('bootstrap/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('datatable/jquery.dataTables.min.js') ?>"></script>
	<script src="<?php echo base_url('datatable/dataTables.bootstrap4.min.js') ?>"></script>	
</head>
<body background="azul.jpg">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-primary">
			<a class="navbar-brand" href="#">AGENDA</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo base_url('/') ?>">INICIO <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('/Categorias') ?>">CATEGORIA</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('/Contactos') ?>">CONTACTOS</a>
					</li>
				</ul>
			</div>
		</nav>
		<hr>
		
				<div class="card-body">
					<center><b><h2> TABLA DE CATEGORIAS</h2></b></center><br>
					<br>
					<center><button class="btn btn-primary" data-toggle="modal" data-target="#modalInsertar" <input type="color" name="agregar" value="agregar" style="color: #000000">
						AGREGAR CONTACTO
					</button></center>
					<hr>
					<div class="table-responsive">
						<table class="table table-hover" id="tablaload">
							<thead>
								<tr><br>
									<td align="center" style="font-size: 19px;">CATEGORIA</td>
									<td align="center" style="font-size: 19px;">DESCRIPCION</td>
									<td align="center" style="font-size: 19px;">FECHA</td>
									<td align="center" style="font-size: 19px;">EDITAR</td>
									<td align="center" style="font-size: 19px;">ELIMINAR</td>
								</tr>
							</thead>
							<tbody>
								<?php foreach($datos as $key): ?>
									<tr>

										<td align="center"><?php echo $key->categoria ?></td>
										<td align="center"><?php echo $key->descripcion ?></td>
										<td align="center"><?php echo $key->fecha ?></td>
										<td style="text-align: center">
											<a href="<?php echo base_url().'/obtenerCategoria/'.$key->id_categoria?>" class="btn btn-warning btn-sm">EDITAR</a>
										</td>
										<td style="text-align: center">
											<a href="<?php echo base_url().'/eliminar/'.$key->id_categoria?>" class="btn btn-danger btn-sm">ELIMINAR</a>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="modalInsertar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"> Agregar Categoria </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="<?php echo base_url().'/crear' ?>">
						<label> Categoria </label>
						<input type="text" name="categoria" id="categoria" class="form-control input-sm" >
						<label> Descripcion </label>
						<input type="text" name="descripcion" id="descripcion" class="form-control input-sm">
						<label> Fecha </label>
						<input type="DATE" name="fecha" id="fecha" class="form-control input-sm">
						<hr>
						<button type="button" class="btn btn-danger" data-dismiss="modal" >
							Cerrar
						</button>
						<button class="btn btn-primary">Guardar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#tablaload').DataTable();
		} );
	</script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script type="text/javascript">
		let mensaje = '<?php echo $mensaje ?>';

		if (mensaje =='1'){
			swal(':D','Agregado con exito','success');

		}else if(mensaje == '0'){
			swal(':(','Fallo al agregar','error');  
		}else if(mensaje == '2'){
			swal(':D','Actualizado con exito','success');  
		}else if(mensaje == '3'){
			swal(':D','Fallo al actualizar','error');  
		} else if(mensaje == '4'){
			swal(':D','Eliminado con exito','success');  
		}else if(mensaje == '5'){
			swal(':D','Fallo al eliminar','error');  
		}
	</script>
</body>
</html>