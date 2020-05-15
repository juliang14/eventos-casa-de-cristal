<html>
<head>
	<title>
		Eliminar usuario
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../img/icon.ico" />
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<link rel="stylesheet" type="text/css" href="../css/administrador.css">
	<link rel="stylesheet" type="text/css" href="../css/administrador_eliminar_editar.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">


</head>
<body>
	<div class="center">
		<div class="container-fluid" id="pag">
			<div class="row">
				<div class="col-lg-12">
					<div class="container-fluid">
						<div class="row">

							<div class="col-lg-2" STYLE="">
								<a href="administrador.html">
									<IMG SRC="../img/Logo.jpeg" STYLE="width: 90%;"></IMG>
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
											<img src="../img/silueta-de-multiplesusuarios.png">
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
									<h2>Eliminar usuario</h2>
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
												<a href="administrador_usuarios.html">
													<button class="btn rojo">Eliminar</button>
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
											<a href="administrador_usuarios.html">
											<img src="../img/izquierda.png">
										</a>
										</div>
										<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
											<a href="administrador.html">
												<img src="../img/casa.png">
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
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/generales.js"></script>
</body>
</html>