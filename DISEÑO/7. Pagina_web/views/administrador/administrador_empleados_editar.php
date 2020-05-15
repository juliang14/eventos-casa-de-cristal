<html>
<head>
	<title>
		Eliminar usuario empleado
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="views/img/icon.ico" />

	<!--link rel="stylesheet" type="text/css" href="views/Utilitarios/bootstrap-4.0.0/css/bootstrap.min.css"-->
	<link rel="stylesheet" type="text/css" href="views/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="views/Utilitarios/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="views/Utilitarios/css/responsive.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="views/Utilitarios/fontawesome-5.13.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="views/css/styles.css">
	<link rel="stylesheet" type="text/css" href="views/css/administrador.css">
	<link rel="stylesheet" type="text/css" href="views/css/administrador_eliminar_editar.css">

</head>
<body>
	<div class="center">
		<div class="container-fluid" id="pag">
			<div class="row">
				<div class="col-lg-12">
					<div class="container-fluid">
						<div class="row">

							<div class="col-lg-2" STYLE="">
								<a href="?class=IndexHome&method=administrador">
									<IMG SRC="views/img/Logo.jpeg" STYLE="width: 90%;"></IMG>
								</a>
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
											<p>Admin Eventos</p>
											<img src="views/img/silueta-de-multiplesusuarios.png">
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
							</div>
						</div>
					</div>
				</div>
			</div>
			<main>
				<div class="row">
					<div class="col-lg-12">
						<div class="row" id="event_2">
							<div class="col-lg-12" STYLE="">
								<div style="text-align: center; margin-top: 5%;">
									<h2>Editar usuario empleado</h2>
									<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="eliminar">
										<label>
											Nombres
										</label>
										<br>
										<input type="text" name="" disabled="disabled" value="Javier andres">
										<br>
										<label>
											Apellidos
										</label>
										<br>
										<input type="text" name="" disabled="disabled" value=" Lopez Avella">
										<br>
										<label>
											Tipo de documento
										</label>
										<br>
										<input type="text" name="" disabled="disabled" value=" C.C">
										<br>
										<label>
											Numero de documento
										</label>
										<br>
										<input type="text" name="" disabled="disabled" value="1012364803">
									</div>
									<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
										<div class="row">
											<div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">
											</div>
											<div class="col-sm-12 col-md-2 col-lg-2 col-xl-2">
												<a href="?class=IndexHome&method=administradorEmpleados">
													<button class="btn azul">Actualizar</button>
												</a>
											</div>
											<div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">
											</div>
										</div>
									</div>
									<div cla
									ss="col-sm-12 col-md-12 col-lg-12 col-xl-12" style="margin-top: 5%;">
									<div class="row">
										<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
											<a href="?class=IndexHome&method=administradorEmpleados">
											<img src="views/img/izquierda.png">
										</a>
										</div>
										<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
											<a href="?class=IndexHome&method=administrador">
												<img src="views/img/casa.png">
											</a>
										</div>
										<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
											
										</div>

									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
</div>
<script type="text/javascript" src="views/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="views/Utilitarios/Utilitarios/jquery.dataTables.min.js" ></script>
<script type="text/javascript" src="views/Utilitarios/Utilitarios/dataTables.responsive.min.js" ></script>	
<script type="text/javascript" src="views/Utilitarios/Utilitarios/tether.min.js"></script>
<script type="text/javascript" src="views/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="views/js/generales.js"></script>
</body>
</html>