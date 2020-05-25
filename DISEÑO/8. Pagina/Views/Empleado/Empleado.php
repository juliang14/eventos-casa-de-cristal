<html>
<head>
	<title>
		Empleados
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="Assets/img/icon.ico" />

	<!--link rel="stylesheet" type="text/css" href="Assets/Utilitarios/bootstrap-4.0.0/css/bootstrap.min.css"-->
	<link rel="stylesheet" type="text/css" href="Assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/Utilitarios/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/Utilitarios/css/responsive.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/Utilitarios/fontawesome-5.13.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="Assets/css/styles.css">
	<link rel="stylesheet" type="text/css" href="Assets/css/empleados.css">

</head>
<body>
<?php $resultado = parent::getEmpleado($_GET['Id_empleado']); ?>
	<div class="center">
		<div class="container-fluid" id="pag">
			<div class="row">
				<div class="col-lg-12">

					<div class="container-fluid">
						<div class="row">

							<div class="col-lg-2" STYLE="">
								<IMG SRC="Assets/img/Logo.jpeg" STYLE="width: 90%;"></IMG>
							</div>

							<div class="col-lg-10" STYLE="background-color: WHITE;">
								<div class="row" id="busc">
									<div class="col-lg-3" STYLE="margin:auto;text-align:center;">
									</div>
									<div class="col-lg-4" STYLE="margin:auto;text-align:center;">
										<div class="input-group" id="bus">
											<input type="text" class="form-control" placeholder="BUSCADOR">
											<div class="input-group-append">
												<button class="btn btn-outline-secondary" type="button">IR</button>
											</div>
										</div>
									</div>
									<div class="col-lg-1" id="inicio-personal">

									</div>
									<div class="col-lg-4" id="inicio-usuarios">
										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="usuario-arriba">
											<p><?php echo $_SESSION['UserAutenticate']->NOMBRE; ?></p>
											<img src="Assets/img/emple.png">
										</div>
										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="usuario-arriba1">
											<p>cerrar sesion</p>
											<label class="switch">
												<input type="checkbox" onclick="cerrarSesion();">
												<span class="slider round"></span>
											</label>
										</div>
									</div>
								</div>
								<div class="row" style="height: 15%;">
								</div>
								<div id="div-menu" onclick="menu();">
									<img src="Assets/img/menu.png">
								</div>
								<nav class="men" id="men">
									<ul class="menu-pincipal">
										<li class="active">
											<a href="?class=empleado&method=empleado&Id_empleado=<?php echo $resultado->ID_EMPLEADO; ?>">Inicio</a>
										</li>
										<li class="">
											<a href="?class=EmpleadoTurno&method=index&Id_turno=<?php echo $resultado->Id_turno; ?>">Turnos</a>
										</li>
									</ul>
								</nav>

							</div>
						</div>
					</div>
				</div>
			</div>
			<main>
				<div class="row">
					<div class="col-lg-12">
						<div class="row" id="event">
							<div class="col-sm-12 col-md-5 col-lg-5 col-xl-5" style="padding: 10%;text-align: center;">
								<img src="Assets/img/Despedida.jpg" width="300px">
							</div>
							<div class="col-sm-12 col-md-1 col-lg-1 col-xl-1">
							</div>
							<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
								<div class="row sombra" style="text-align: left;">

									<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 margen-abajo" >
										 <label>
											NOMBRE
										</label>
										<br>
										<input type="text" name="" placeholder=
										"<?php echo $resultado ->PRIMER_NOMBRE ?>" disabled="disabled">
									</div>
									<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 margen-abajo" >
										<label>
											APELLIDO
										</label>
										<br>
										<input type="text" name="" placeholder=
										"<?php echo $resultado ->PRIMER_APELLIDO ?>" disabled="disabled">
									</div>
									<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 margen-abajo" >
										<label>
											DOCUMENTO
										</label>
										<br>
										<input type="text" name="" placeholder=
										"<?php echo $resultado ->NUMERO_DOCUMENTO?>" disabled="disabled"" disabled="disabled">
									</div>
									<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 margen-abajo" >
										<label>
											EDAD
										</label>
										<br>
										<input type="number" name="" placeholder=
										"<?php echo $resultado ->EDAD?>" disabled="disabled"" disabled="disabled">
									</div>
									<br>
									<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 margen-abajo" >
										<label>
											CORREO ELECTRONICO
										</label>
										<br>
										<input type="email" name="" placeholder=
										"<?php echo $resultado ->EMAIL?>" disabled="disabled"" disabled="disabled">
									</div>
									<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 margen-abajo" >
										<label>
											CARGO
										</label>
										<br>
										<input type="text" name="" placeholder=
										"<?php echo $resultado ->CARGO ?>" disabled="disabled"" disabled="disabled">
									</div>						
								</div>						
							</div>
							<div class="col-sm-12 col-md-2 col-lg-2 col-xl-2"> </div> 
						</div>

							
                      	
							
						
					</div>
					
				</div>

			</main>
		</div>

	</div>
	<script type="text/javascript" src="Assets/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="Assets/Utilitarios/Utilitarios/jquery.dataTables.min.js" ></script>
    <script type="text/javascript" src="Assets/Utilitarios/Utilitarios/dataTables.responsive.min.js" ></script>	
	<script type="text/javascript" src="Assets/Utilitarios/Utilitarios/tether.min.js"></script>
	<script type="text/javascript" src="Assets/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="Assets/js/generales.js"></script>
</body>
</html>