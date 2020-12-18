<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>inicio</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('datatable/dataTables.bootstrap4.min.css') ?>">
	<script src="<?php echo base_url('js/jquery-3.5.1.min.js') ?>"></script>
	<script src="<?php echo base_url('bootstrap/popper.min.js') ?>"></script>
	<script src="<?php echo base_url('bootstrap/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('datatable/jquery.dataTables.min.js') ?>"></script>
	<script src="<?php echo base_url('datatable/dataTables.bootstrap4.min.js') ?>"></script>
</head>
<body background="blu.jpg">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-primary">
			<a class="navbar-brand" href="#">AGENDA</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#" style="font-size: 19px;">INICIO <span class="sr-only" >(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('/Categorias') ?>" style="font-size: 19px;">CATEGORIA</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('/Contactos') ?>" style="font-size: 19px;">CONTACTO</a>
					</li>
				</ul>
			</div>
		</nav>
		<hr>
		<div class="row">
			<br><div class="col-sm-1"></div>
			<div class="col-sm-4" >
				<center>
					<br><br><br><br><img src="coraline.jpg" alt="" width="350" height="400">
				</center>
			</div>
			<div class="col-sm-6">
				<center>
					<h1>ADMINISTRADOR</h1>
				</center><br>
				<label style="font-size: 19px;">NOMBRE COMPLETO</label>
				<label style="font-size: 15px;"class="form-control">IHTZARI BELEN HERNANDEZ NOGUERON</label>
				<label style="font-size: 19px;">SEMESTRE</label>
				<label style="font-size: 15px;"class="form-control">9</label>
				<label style="font-size: 19px;">EDAD</label>
				<label style="font-size: 15px;"class="form-control">22 AÑOS</label>
				<label style="font-size: 19px;">CARRERA</label>
				<label style="font-size: 15px;"class="form-control">ING. EN SISTEMAS COMPUTACIONALES</label>
				<label style="font-size: 19px;">ESPECIALIDAD</label>
				<label style="font-size: 15px;"class="form-control">ADMINISTRACIÓN DE SERVICIOS WEB</label>
			</div>
		</div>
	</div>
</body>
</html>