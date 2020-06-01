<html>
<head>
	<title>
		Administrador crear pedido
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="Assets/img/icon.ico" />

	<link rel="stylesheet" type="text/css" href="Assets/Utilitarios/bootstrap-4.0.0/css/bootstrap.min.css">
	<!--link rel="stylesheet" type="text/css" href="Assets/bootstrap/css/bootstrap.min.css"-->
	<link rel="stylesheet" type="text/css" href="Assets/Utilitarios/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/Utilitarios/css/responsive.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/Utilitarios/fontawesome-5.13.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="Assets/css/styles.css">
	<link rel="stylesheet" type="text/css" href="Assets/css/administrador.css">
	<link rel="stylesheet" type="text/css" href="Assets/css/facturas.css">
	<link rel="stylesheet" type="text/css" href="Assets/css/formularios.css">
	<link rel="stylesheet" type="text/css" href="Assets/css/fuentes.css">

</head>
<body>
	<div class="center">
		<div class="container-fluid" id="pag">
			<div class="row">
				<div class="col-lg-12">

					<div class="container-fluid">
						<div class="row">

							<div class="col-lg-2" STYLE="">
								<a href="?class=administrador&method=Index">
									<IMG SRC="Assets/img/Logo.jpeg" STYLE="width: 90%;"></IMG>
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
											<p><?php echo $_SESSION['UserAutenticate']->NOMBRE; ?></p>
											<img src="Assets/img/silueta-de-multiplesusuarios.png">
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
				<h1>GENERAR PEDIDO</h1>
				<br>
				<form class="formulario-genial">
					<section class="" id="">
						<div class="row paso">
							<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 text-left">
								SELECCIONAR EVENTO
							</div>
							<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 text-right m-auto">
								<i class="fas fa-chevron-up formulario_genial" data-seccion="seleccionEvento" control-paso="1" id="p1"></i>
							</div>
						</div>
						<!------------------------ Menu con Bootstrap  ---------------------------->
						<div class="body-seccion" id="seleccionEvento">
							<nav class="navbar navbar-inverse bg-inverse navbar-toggleable-sm">
								<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarNav">
									<div class="navbar-nav text-center mr-auto ml-auto">
									<?php foreach(Eventos::getEventos() AS $ResponseGetEventos){ ?>
										<a class="nav-item nav-link seleccionarEvento" evento="<?php echo $ResponseGetEventos->TIPO_DE_EVENTO; ?>" idevento="idEvento<?php echo $ResponseGetEventos->ID_EVENTO; ?>"><?php echo $ResponseGetEventos->TIPO_DE_EVENTO; ?> <i class="fas fa-angle-down"></i></a>
									<?php } ?>
									</div>
								</div>
							</nav>
							<div class="botonesEventos text-center ocultar">
									<input type="text" id="valorEvento" disabled="disabled">
							</div>
						</div>
					</section>
					<section class="" id="">
						<div class="row paso">
							<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 text-left">
								SELECCIONAR PAQUETE
							</div>
							<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 text-right m-auto">
								<i class="fas fa-chevron-down formulario_genial" data-seccion="seleccionPaquete" control-paso="2" id="p2"></i>
							</div>
						</div>
						<div class="body-seccion" id="seleccionPaquete">
							<?php foreach(Eventos::getEventos() AS $CantidadEventos){ ?>
								<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center m-auto contenCajaEvento ocultar" id="idEvento<?php echo $CantidadEventos->ID_EVENTO; ?>">
									<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center m-auto">
										<h4>Paquetes <?php echo $CantidadEventos->TIPO_DE_EVENTO; ?></h4>
									</div>
									<div class="row">
										<?php foreach(Paquetes::getEventoPaquete($CantidadEventos->TIPO_DE_EVENTO) AS $ResponseGetEventoPaquete){ ?>
											<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 text-center m-auto">
												<div style="border: solid black 3px; text-align: center; border-radius: 14px;background-color:pink;">
													<h3 class="font-italic">PLAN TODO INCLUIDO <?php echo $ResponseGetEventoPaquete->CANTIDAD_PERSONAS; ?> PERSONAS</h3>
													<br>
													<h1 class="text-danger">$<?php echo $ResponseGetEventoPaquete->VALOR_TOTAL; ?></h1>
													<br>
													<h5>NUESTRO PLAN INCLUYE</h5>
													<br>
													<ul class="text-muted p-0 mb-4 text-left">
														<?php foreach(Paquetes::getPaquete($ResponseGetEventoPaquete->ID_PAQUETE) AS $ResponseGetPaquete){ ?>
															<li><?php echo $ResponseGetPaquete->INVENTARIO; ?></li>
														<?php } ?>
													</ul>
													<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 text-center ml-auto mr-auto mb-1 nombre-paquete">
														<?php echo $ResponseGetEventoPaquete->TIPO_DE_PAQUETE; ?>
														</div>
												</div>
											</div>
										<?php } ?>
									</div>
								</div>	
							<?php } ?>
						</div>
					</section>
				</form>
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
							<a href="?class=pedidos&method=index">
								<button class="btn rojo">Volver</button>
							</a>
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