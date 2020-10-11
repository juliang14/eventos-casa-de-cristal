<html>
<head>
	<title>
		Usuario Eventos
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="Assets/img/icon.ico" />

	<!--link rel="stylesheet" type="text/css" href="Assets/Utilitarios/bootstrap-4.0.0/css/bootstrap.min.css"-->
	<link rel="stylesheet" type="text/css" href="Assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/Utilitarios/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/Utilitarios/css/responsive.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/Utilitarios/fontawesome-5.13.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="Assets/Utilitarios/datetimepicker/jquery.datetimepicker.css">
	<link rel="stylesheet" type="text/css" href="Assets/css/styles.css">
	<link rel="stylesheet" type="text/css" href="Assets/css/usuario.css">
	<link rel="stylesheet" type="text/css" href="Assets/css/eventos.css">
<?php 
	include 'views/Carrito/Carrito.php';
?>
</head>
<body>
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
										<a href="?class=Carrito&method=index">
											<img SRC="Assets/img/boton-de-agregar-carrito-de-compras.png" STYLE="" title="Carrito de compras" />
											<span class="cantidadCarrito">(<?php echo (empty($_SESSION['Carrito']))?0:count($_SESSION['Carrito']); ?>)</span>
										</a>
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
											<img src="Assets/img/silueta-de-multiples-usuarios.png">
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
										<li class="">
											<a href="?class=usuario&method=usuario">Inicio</a>
										</li>
										<li class="active">
											<a href="?class=Eventos&method=eventosUsuario">Eventos</a>
										</li>
										<li class="">
											<a href="?class=usuario&method=usuarioAcercaDeNosotros">Acerca de nosotros</a>
										</li>
										<li class="">
											<a href="?class=usuario&method=usuarioContactos">Contactenos</a>
										</li>
										<li class="">
											<a href="?class=usuario&method=usuarioPedidos">Pedidos</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Mensaje carrito de compras -->
			<?php if($mensaje!=''){ ?>
				<div class="alert alert-success table-success contenedor-mensaje-carrito" id="mensajeCarritoCompra">
					<p class="contenedor-caja1"> 
						<?php echo $mensaje; ?> 
						<a href="?class=Carrito&method=index" class="badge badge-success"> ver carrito</a>
					</p>
					<p class="contenedor-caja2">
						<!--a href=""><i class="fas fa-times-circle"></i></!--a-->
					</p>
				</div>
			<?php }?>
			<?php if($mensajeError!=''){ ?>
				<div class="alert alert-danger contenedor-mensaje-carrito" id="mensajeCarritoCompra">
					<p class="contenedor-caja1"> 
						<?php echo $mensajeError; ?> 
						<a href="?class=Carrito&method=index" class="badge badge-success"> ver carrito</a>
					</p>
				</div>
			<?php }?>
			<!-- ************************** -->
			<!-- Modal -->
			<div class="modal fade bd-example-modal-lg accionEvento" id="modalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" onclick="">
				<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Importante</h5>
					<button type="button" class="close accionEvento" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
					<div class="modal-body">
						<div class="col-sm-12 col-md-10 col-lg-10 col-xl-10 m-auto" id="caja-paquete">
							<?php foreach(Eventos::getEventos() AS $CantidadEventos){ ?>
								<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center m-auto contenCajaEvento ocultar" id="idEvento<?php echo $CantidadEventos->ID_EVENTO; ?>">
									<div class="row">
										<?php foreach(Paquetes::getEventoPaquete($CantidadEventos->TIPO_DE_EVENTO) AS $ResponseGetEventoPaquete){ ?>
											<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center m-auto pt-4">
												<form action="" method="POST">
													<div class="contenedorPaquetes cajas-paquetes" id-paquete="<?php echo $ResponseGetEventoPaquete->ID_PAQUETE; ?>">
														<h3 class="font-italic pl-2 pr-2">PLAN TODO INCLUIDO <?php echo $ResponseGetEventoPaquete->CANTIDAD_PERSONAS; ?> PERSONAS</h3>
														<br>
														<h1 class="text-danger">$<?php echo $ResponseGetEventoPaquete->VALOR_TOTAL; ?></h1>
														<input type="hidden" name="valorPaquete" id="valorPaquete" value="<?php echo $ResponseGetEventoPaquete->VALOR_TOTAL; ?>">
														<br>
														<h5>NUESTRO PLAN INCLUYE</h5>
														<br>
														<ul class="text-muted p-0 mb-4 text-left">
															<?php foreach(Paquetes::getPaquete($ResponseGetEventoPaquete->ID_PAQUETE) AS $ResponseGetPaquete){ ?>
																<li><?php echo $ResponseGetPaquete->INVENTARIO; ?></li>
															<?php } ?>
														</ul>
														<div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 text-center ml-auto mr-auto mb-1 nombre-paquete">
															<?php echo $ResponseGetEventoPaquete->TIPO_DE_PAQUETE; ?>
															<input type="hidden" name="tipoPaquete" id="tipoPaquete" value="<?php echo $ResponseGetEventoPaquete->TIPO_DE_PAQUETE; ?>">
														</div>
													</div>
													<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2">
														<input type="hidden" name="idPaquete" id="idPaquete" value="<?php echo $ResponseGetEventoPaquete->ID_PAQUETE; ?>">
														<input type="hidden" name="cantidad" id="cantidad" value="1">
														<button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit"> Comprar </button>
													</div>
												</form>
											</div>
										<?php } ?>
									</div>
								</div>	
							<?php } ?>
						</div>
					</div>
					<div class="modal-footer">
					<button type="button" class="btn btn-secondary accionEvento" data-dismiss="modal" onclick="">Cerrar</button>
					<!--button type="button" class="btn btn-primary">Save changes</button-->
					</div>
				</div>
				</div>
			</div>
			<!-----------------------   FIN MODAL  ------------------------------------>
			<main>
				<div class="container-fluid" style="" id="contenidoEventos">
					<div class="row">
						<div class="col-lg-12 contenedor-eventos" id="eventos">
							<div class="row p-4 m-4">
								<?php foreach(Eventos::getEventos() AS $ResponseGetEventos){ ?>
									<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center cajas-eventos">
										<div class="row">
											<div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 m-auto">
												<p><?php echo $ResponseGetEventos->TIPO_DE_EVENTO; ?></p>
											</div>
											<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4 pb-4">
												<img src="Files/img/<?php echo $ResponseGetEventos->IMAGEN; ?>" width="200px" height="200px" class=" seleccionarEventoHome" evento="<?php echo $ResponseGetEventos->TIPO_DE_EVENTO; ?>" idevento="idEvento<?php echo $ResponseGetEventos->ID_EVENTO; ?>">
											</div>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</main>
		<script type="text/javascript" src="Assets/js/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="Assets/Utilitarios/Utilitarios/jquery.dataTables.min.js" ></script>
		<script type="text/javascript" src="Assets/Utilitarios/Utilitarios/dataTables.responsive.min.js" ></script>	
		<script type="text/javascript" src="Assets/Utilitarios/Utilitarios/tether.min.js"></script>
		<script type="text/javascript" src="Assets/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="Assets/Utilitarios/Utilitarios/jquery.maskMoney.js"></script>
		<script type="text/javascript" src="Assets/Utilitarios/datetimepicker/jquery.datetimepicker.full.min.js"></script>
		<script type="text/javascript" src="Assets/js/generales.js"></script>
	</body>
</html>