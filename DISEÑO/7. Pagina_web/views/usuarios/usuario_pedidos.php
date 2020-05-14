<html>
<head>
	<title>
		Usuario pedidos
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
	<link rel="stylesheet" type="text/css" href="views/css/usuario.css">
	<link rel="stylesheet" type="text/css" href="views/css/pedidos.css">

</head>
<body>
	<div class="center">
		<div class="container-fluid" id="pag">
			<div class="row">
				<div class="col-lg-12">

					<div class="container-fluid">
						<div class="row">

							<div class="col-lg-2" STYLE="">
								<IMG SRC="views/img/Logo.jpeg" STYLE="width: 90%;"></IMG>
							</div>

							<div class="col-lg-10" STYLE="background-color: WHITE;">
								<div class="row" id="busc">
									<div class="col-lg-3" STYLE="margin:auto;text-align:center;">
										<a href="?class=IndexHome&method=usuarioCarritoDeCompras">
											<IMG SRC="views/img/boton-de-agregar-carrito-de-compras.png" STYLE="" title="Carrito de compras"></IMG>
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
											<p>Julian Stiven Gomez Avila</p>
											<img src="views/img/silueta-de-multiples-usuarios.png">
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
									<img src="views/img/menu.png">
								</div>
								<nav class="men" id="men">
									<ul class="menu-pincipal">
										<li class="">
											<a href="?class=IndexHome&method=usuario">Inicio</a>
										</li>
										<li class="">
											<a href="?class=IndexHome&method=usuarioEventos">Eventos</a>
										</li>
										<li class="">
											<a href="?class=IndexHome&method=usuarioAcercaDeNosotros">Acerca de nosotros</a>
										</li>
										<li class="">
											<a href="?class=IndexHome&method=usuarioContactos">Contactenos</a>
										</li>
										<li class="active">
											<a href="?class=IndexHome&method=usuarioPedidos">Pedidos</a>
										</li>
									</ul>
								</nav>

							</div>
						</div>
					</div>
				</div>
			</div>
			<main>
				<h1>Información de pedidos</h1>
				<br>
				<div class="pedido">
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 pedidos">
						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 Entregado">
							<img src="views/img/bien.png">
							<p>Entregado</p>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 detalle">
							<a href="?class=IndexHome&method=usuarioDetalleFactura">Ver detalle</a>
						</div>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 pedido-info">
						<div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">	
							<p>Domingo, 15 de septiembre de 2019 </p>
						</div>
						<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 right">
							<p> $ 2'000.000 </p>
						</div>
					</div>
				</div>
				<br>
				<div class="pedido">
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 pedidos">
						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 Pendiente">
							<img src="views/img/exclamacion.png">
							<p>Pendiente</p>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 detalle">
							<a href="?class=IndexHome&method=usuarioDetalleFactura">Ver detalle</a>
						</div>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 pedido-info">
						<div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">	
							<p>Domingo, 15 de septiembre de 2019 </p>
						</div>
						<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 right">
							<p> $ 2'000.000 </p>
						</div>
					</div>
				</div>
				<br>
				<div class="pedido">
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 pedidos">
						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 Cancelado">
							<img src="views/img/borrar.png">
							<p>Cancelado</p>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 detalle">
							<a href="?class=IndexHome&method=usuarioDetalleFactura">Ver detalle</a>
						</div>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 pedido-info">
						<div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">	
							<p>Domingo, 15 de septiembre de 2019 </p>
						</div>
						<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 right">
							<p> $ 3'000.000 </p>
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