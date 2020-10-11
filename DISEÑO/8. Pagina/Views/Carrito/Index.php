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
			<section>
				<div class="contenedor-carrito">
                    <h3 class="titulo-carrito">Carrito</h3>
                    <?php if(!empty($_SESSION['Carrito'])){ ?>
                        <table class="table mt-4 text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Accion</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php $total = 0; ?>
								<?php $contador = 1; ?>
                                <?php foreach($_SESSION['Carrito'] as $RespuestaCarrito){?>
                                    <tr>
										<input type="hidden" class="text-center form-control" name="idPaquete" id="idPaquete-<?php echo $contador;?>" value="<?php echo $RespuestaCarrito['ID_PAQUETE']; ?>" required>
                                        <td><?php echo $RespuestaCarrito['TIPO_PAQUETE'];?></td>
                                        <td><?php echo $RespuestaCarrito['CANTIDAD'];?></td>
                                        <td><?php echo $RespuestaCarrito['VALOR_PAQUETE'];?></td>
                                        <td><?php echo intval($RespuestaCarrito['VALOR_PAQUETE'])*$RespuestaCarrito['CANTIDAD'];?></td>
                                        <td>
                                            <form action="" method="POST">
                                                <input type="hidden" name="idPaquete" id="idPaquete" value="<?php echo $RespuestaCarrito['ID_PAQUETE'];?>">
                                                <button class="" name="btnAccion" value="Eliminar" type="submit">
                                                    <i class="fas fa-minus-circle i-rojo"></i>
                                                </button>
                                            </form>
                                        </td>
									</tr>
								<?php $contador = $contador+1; ?>
                                <?php $total = $total+(intval($RespuestaCarrito['VALOR_PAQUETE'])*$RespuestaCarrito['CANTIDAD']); ?>
                                <?php }?>
                                <tr>
                                    <td colspan="3" class="text-right"><h4>Total</h4></td>
                                    <td><?php echo $total;?></td>
                                    <td></td>
								</tr>
								<tr>
									<td></td>
									<td colspan="3">
										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center mt-4 mb-4">
											<h4>Fecha de evento</h4>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 text-right mb-4" >
												<label for="inputFechaInicioEvento">Fecha inicio evento</label><br>
												<input type="text" class="datepicker text-center form-control validacionFechas" name="inputFechaInicioEvento" id="inputFechaInicioEvento">
											</div>
											<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 text-left mb-4">
												<label for="inputFechaFinEvento">Fecha fin evento</label><br>
												<input type="text" class="datepicker text-center form-control validacionFechas" name="inputFechaFinEvento" id="inputFechaFinEvento">
											</div>
										</div>
									</td>
									<td></td>
								</tr>
								<tr>
									<td></td>
									<td colspan="3">
										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center mt-4 mb-4">
											<h4>Ubicacion del evento</h4>
										</div>
										<div class="row">
											<input type="hidden" class="text-center form-control" name="idUsuario" id="idUsuario" value="<?php echo $_SESSION['UserAutenticate']->ID_USUARIO; ?>" required>
											<input type="hidden" class="text-center form-control" name="inputValorPago" id="inputValorPago" value="<?php echo $total; ?>" required>
											<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 text-right m-auto" >
												<i class="fas fa-city"></i>
												<label for="inputCiudadEvento">Ciudad</label>
											</div>
											<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 text-right m-auto" >
												<input type="text" class="text-center form-control" name="inputCiudadEvento" id="inputCiudadEvento" required>
											</div>
											<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 text-right m-auto" >
												<i class="fas fa-home"></i>
												<label for="inputBarrioEvento">Barrio</label>
											</div>
											<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 text-left m-auto">
												<input type="text" class="text-center form-control" name="inputBarrioEvento" id="inputBarrioEvento" required>
											</div>
											<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 text-right m-auto" >
												<i class="fas fa-map-marker-alt"></i>
												<label for="inputDireccionEvento">Direccion</label>
											</div>
											<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 text-left m-auto">
												<input type="text" class="text-center form-control" name="inputDireccionEvento" id="inputDireccionEvento" required>
											</div>
										</div>
									</td>
									<td></td>
								</tr>
                                <tr>
                                    <td colspan="5"> 
                                        <button class="btn btn-primary col-sm-12 col-md-12 col-lg-12 col-xl-12" onClick="generarPago();" value="Pagar">Pagar</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    <?php }else{?>
                        <div class="alert alert-success">
                            No hay productos en el carrito
                        </div>
                    <?php }?>
                    
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
                            <div class="jumbotron">
                                <h1 class="display-4"> Confirmación </h1>
                                <p class="lead">
                                    Estas apunto de realizar el pago a través de Paypal
                                    <hr class="my-4">
                                    <h4>$ <?php echo $total;?></h4>
                                    <div id="paypal-button"></div>
                                </p>
                                <hr class="my-4">
                                <p>Tu evento sera programado tan pronto se procese el pago.<br>
                                    <strong>#eventoscasadecristal</strong>
                                </p>
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
        <script type="text/javascript" src="Assets/Utilitarios/paypal/checkout.js"></script>
        <script type="text/javascript" src="Assets/Utilitarios/paypal/paypal.js"></script>
	</body>
</html>