<html>
<head>
	<title>
		Carrito 
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
										<li class="">
											<a href="?class=Eventos&method=eventosUsuario">Eventos</a>
										</li>
										<li class="">
											<a href="?class=usuario&method=usuarioAcercaDeNosotros">Acerca de nosotros</a>
										</li>
										<li class="">
											<a href="?class=usuario&method=usuarioContactos">Contactenos</a>
										</li>
										<li class="active">
											<a href="?class=Pedidos&method=vistaPedidosUsuario">Pedidos</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<section class="seccion-pedidos-usuario">
				<div class="contenedor-pedidos-usuario">
					<h2>Informacion de pedidos</h2>
					<div class="row">
						<?php if(!empty(Pedidos::getPedidoUsuario($_SESSION['UserAutenticate']->ID_USUARIO))){ ?>
							<?php foreach(Pedidos::getPedidoUsuario($_SESSION['UserAutenticate']->ID_USUARIO) as $ResponseGetPedidosUsuario){ ?>
								<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center m-auto pt-4 pb-4">
									<div class="contenedorPedidos cajas-pedidos" id-paquete="<?php echo $ResponseGetPedidosUsuario->ID_PAQUETE; ?>">
										<h3 class="font-italic pl-2 pr-2">Pedido <?php echo $ResponseGetPedidosUsuario->ID_PEDIDO; ?></h3>
										<?php if($ResponseGetPedidosUsuario->ESTADO == 'Realizado'){?>
											<p class="text-center text-success"> <i class="fas fa-check text-success"></i> <?php echo $ResponseGetPedidosUsuario->ESTADO; ?> </p>
										<?php }else if($ResponseGetPedidosUsuario->ESTADO == 'Por realizar'){?>
											<p class="text-center text-warning"> <i class="fas fa-info color_orange" title="Ver pedido 3"> </i> <?php echo $ResponseGetPedidosUsuario->ESTADO; ?> </p>
										<?php }else if($ResponseGetPedidosUsuario->ESTADO == 'Cancelado'){?>
											<p class="text-center text-danger"> <i class="fas fa-trash-alt text-danger "></i> <?php echo $ResponseGetPedidosUsuario->ESTADO; ?> </p>
										<?php }else{?>
											<p class="text-center"> <?php echo $ResponseGetPedidosUsuario->ESTADO; ?> </p>
										<?php }?>
										<ol class="text-left">
											<li>
												<i class="fas fa-glass-cheers"></i>
												&nbsp;<strong>Evento:</strong> 
												<?php echo $ResponseGetPedidosUsuario->EVENTO; ?>
											</li>
											<li>
												<i class="fas fa-cubes"></i>
												&nbsp;&nbsp;<strong>Paquete:</strong> 
												<?php echo $ResponseGetPedidosUsuario->PAQUETE; ?></li>
											<li>
												<i class="fas fa-dollar-sign"></i>
												&nbsp;&nbsp;&nbsp;&nbsp;<strong>Valor:</strong> 
												<?php echo $ResponseGetPedidosUsuario->VALOR_PAQUETE; ?></li>
											<li>
												<i class="fas fa-city"></i>
												&nbsp;<strong>Ciudad:</strong> 
												<?php echo $ResponseGetPedidosUsuario->CIUDAD_EVENTO; ?></li>
											<li>
												<i class="fas fa-home"></i>
												&nbsp;&nbsp;<strong>Barrio:</strong> 
												<?php echo $ResponseGetPedidosUsuario->BARRIO_EVENTO; ?></li>
											<li>
												<i class="fas fa-map-marker-alt"></i>
												&nbsp;&nbsp;&nbsp;<strong>Direccion:</strong> 
												<?php echo $ResponseGetPedidosUsuario->DIRECCION_EVENTO; ?></li>
											<li>
												<i class="far fa-calendar-alt"></i>
												&nbsp;&nbsp;<strong>Fecha inicio evento:</strong> 
												<?php echo $ResponseGetPedidosUsuario->FECHA_INICIO_EVENTO; ?></li>
											<li>
												<i class="far fa-calendar-alt"></i>
												&nbsp;&nbsp;<strong>Fecha fin evento:</strong> 
												<?php echo $ResponseGetPedidosUsuario->FECHA_FIN_EVENTO; ?></li>
										</ol>
									</div>
								</div>
							<?php } ?>
						<?php }else{?>
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center m-auto pt-4 pb-4">
								<div class="alert alert-success">
									No tienes pedidos en el momento
								</div>
							</div>
						<?php }?>
					</div>
				</div>
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
                           
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary accionEvento" data-dismiss="modal" onclick="">Cerrar</button>
                        <!--button type="button" class="btn btn-primary">Save changes</button-->
                        </div>
                    </div>
                    </div>
                </div>
                <!-----------------------   FIN MODAL  ------------------------------------>
			</section>
		</div>		
	</div>
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