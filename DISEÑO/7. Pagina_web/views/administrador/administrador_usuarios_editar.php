<html>
<head>
	<title>
		Editar usuario
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
				<?php
					$Response = parent::getCliente($_GET['ID_USUARIO']);
				?>
				<div class="row">
					<div class="col-lg-12">
						<div class="row" id="event_2">
							<div class="col-lg-12" STYLE="">
								<div style="text-align: center; margin-top: 5%;">
									<section class="" id="section_forms">
										<?php
											$Response = parent::getCliente($_GET['ID_USUARIO']);
										?>
										<div class="contenedorFormularioVerUsuario" id="contenedorFormularioVerUsuario">
											<h2 class="text-center" id="tituloCrearUsuario">Ver usuario <?php echo $Response->ID_USUARIO ?></h2>
											<form mane="" action="?class=indexConection&method=updateUsuario" method="POST">
												<div class="row">
													<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center ocultar" >
														<input type="number" class="form-control" name="Id_usuario" id="Id_usuario" value="<?php echo $Response->ID_USUARIO ?>">
													</div>
												    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center" >
														<label for="Primer_nombre">Primer Nombre</label><br>
														<input type="text" class="form-control" name="Primer_nombre" id="Primer_nombre" value="<?php echo $Response->PRIMER_NOMBRE ?>">
													</div>
													<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center" >
														<label for="Segundo_nombre">Segundo Nombre</label><br>
														<input type="text" class="form-control" name="Segundo_nombre" id="Segundo_nombre" value="<?php echo $Response->SEGUNDO_NOMBRE ?>">
													</div>
													<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center" >
														<label for="Primer_apellido">Primer Apellido</label><br>
														<input type="text" class="form-control" name="Primer_apellido" id="Primer_apellido" value="<?php echo $Response->PRIMER_APELLIDO ?>">
													</div>
													<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center" >
														<label for="Segundo_apellido">Segundo Apellido</label><br>
														<input type="text" class="form-control" name="Segundo_apellido" id="Segundo_apellido" value="<?php echo $Response->SEGUNDO_APELLIDO ?>">
													</div>
													<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center" >
														<label for="Tipo_documentoId_documento">Tipo de documento</label><br>
														<!--input type="text" class="form-control" name="Tipo_documentoId_documento" id="Tipo_documentoId_documento" value="<?php echo $Response->DOCUMENTO ?>" -->
														<select class="form-control" name="Tipo_documentoId_documento" id="Tipo_documentoId_documento" >
															<option value="<?php echo $Response->DOCUMENTO ?>"><?php echo $Response->DOCUMENTO ?></option>
															<?php foreach (parent::getTipoDocumento() as $responseGetTipoDocumento){ ?>
																<option value="<?php echo $responseGetTipoDocumento->Siglas ?>"><?php echo $responseGetTipoDocumento->Siglas ?></option>
															<?php } ?>
														</select>
													</div>
													<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center" >
														<label for="Numero_documento">Numero de documento</label><br>
														<input type="number" class="form-control" name="Numero_documento" id="Numero_documento" value="<?php echo $Response->NUMERO_DOCUMENTO ?>">
														
													</div>
													<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center" >
														<label for="Edad">EDAD</label><br>
														<input type="number" class="form-control" name="Edad" id="Edad" value="<?php echo $Response->EDAD ?>">
													</div>
													<br>
													<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center" >
														<label for="Telefono">Telefono</label><br>
														<input type="number" class="form-control" name="Telefono" id="Telefono" value="<?php echo $Response->TELEFONO ?>" >
													</div>
													<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
														<label for="Direccion">Direccion</label><br>
														<input type="text" class="form-control" name="Direccion" id="Direccion" value="<?php echo $Response->DIRECCION ?>" >
													</div>
													<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
														<label for="Email">Correo</label><br>
														<input type="email" class="form-control" name="Email" id="Email" value="<?php echo $Response->EMAIL ?>" >
													</div>
													<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5">
														<div class="row">
															<div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">
															</div>
															<div class="col-sm-12 col-md-2 col-lg-2 col-xl-2">
																<button class="btn azul" type="submit">Actualizar</button>
															</div>
															<div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">
															</div>
														</div>
													</div>
												</div>
											</form>
										</div>
									</section>
									<div cla
									ss="col-sm-12 col-md-12 col-lg-12 col-xl-12" style="margin-top: 5%;">
									<div class="row">
										<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
											<a href="?class=IndexHome&method=administradorUsuarios">
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