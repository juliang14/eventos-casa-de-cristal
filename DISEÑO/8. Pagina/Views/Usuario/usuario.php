<html>
<head>
	<title>
		Usuario
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
										<li class="active">
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
											<a href="?class=Pedidos&method=vistaPedidosUsuario">Pedidos</a>
										</li>
									</ul>
								</nav>

							</div>
						</div>
					</div>
				</div>
			</div>
			<main>
				<div class="container-fluid" id="sliderbar">
					<div class="row">
						<div class="col-lg-12">
							<div id="demo" class="carousel slide" data-ride="carousel">

								<!-- Indicators -->
								<ul class="carousel-indicators">
									<li data-target="#demo" data-slide-to="0" class="active"></li>
									<li data-target="#demo" data-slide-to="1"></li>
									<li data-target="#demo" data-slide-to="2"></li>
									<li data-target="#demo" data-slide-to="3"></li>
								</ul>

								<!-- The slideshow -->
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="Assets/img/69.jpg" alt="Los Angeles">
									</div>
									<div class="carousel-item">
										<img src="Assets/img/961.jpg" alt="Chicago">
									</div>
									<div class="carousel-item">
										<img src="Assets/img/churque.jpg" alt="New York">
									</div>
									<div class="carousel-item">
										<img src="Assets/img/962.jpg" alt="New York">
									</div>
								</div>

								<!-- Left and right controls -->
								<a class="carousel-control-prev" href="#demo" data-slide="prev">
									<span class="carousel-control-prev-icon"></span>
								</a>
								<a class="carousel-control-next" href="#demo" data-slide="next">
									<span class="carousel-control-next-icon"></span>
								</a>

							</div>
						</div>
					</div>
				</div>

				<div class="container-fluid" id="">
					<div class="row">
						<div class="col-lg-12">
							<div style="text-align: center;">
								<p style="margin: 2%; font-size: 25px;">Bienvenidos</p>
								<p style="margin-left: 20%; margin-right: 20%;">
									Somos una empresa dispuesta a cumplir la fiesta de tus sueños y hacer la realidad de tus dulces momentos.
								</p>
							</div>
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
	<script type="text/javascript" src="Assets/Utilitarios/Utilitarios/jquery.maskMoney.js"></script>
	<script type="text/javascript" src="Assets/Utilitarios/datetimepicker/jquery.datetimepicker.full.min.js"></script>
	<script type="text/javascript" src="Assets/js/generales.js"></script>
</body>
</html>