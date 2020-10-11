<html>
<head>
	<title>
		Usuario acerca de nosotros
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
	<link rel="stylesheet" type="text/css" href="Assets/css/acercadenosotros.css">
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
										<li class="active">
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
			<main>
				<div class="row">
					<main class="col-lg-12">
					<div class="row" id="event_2">
					<div class="col-lg-12" STYLE="">
						<div style="text-align: center;">
							<h2>EVENTOS CASA DE CRISTAL</h2>
							<p class="center" id="text">
								Eventos casa de cristal es una compañía que vela por la organización y creatividad de eventos sociales, familiares y empresariales sin dejar de lado los intereses y gustos de nuestro clientes 	
							</p>
						</div>
					</div>
				</div>
				<div id="video-acercadenosotros">
					<iframe width="500" height="250" src="https://www.youtube.com/embed/6EllTOaYgqg?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="row margin" >
					<div class="col-lg-3">
						<img src="Assets/img/novios.jpg" style="" id="imagenes">
					</div>
					<div class="col-lg-7 justify">
						<h3>CAPTURAMOS MOMENTOS INOLVIDABLES...</h3>
						<p>
							¡Sus momentos merecen siempre la mejor presentación!. Nos encargamos de que espectaculares imágenes reflejen todos los sentimientos y sean captados durante la celebración.
							En cada evento nos encargamos de ofrecer fotos únicas en donde todos los momentos se convertirán en inolvidables y esos detalles se trasformaran en grandes y hermosos recuerdos 
						</p>
					</div>
					<div class="col-lg-2"></div>
				</div>
				<div class="row margin" >
					<div class="col-lg-2"></div>
					<div class="col-lg-7 justify">
						<h3>DECORACIÓN Y AMBIENTACIÓN</h3>
						<p>
							Nos comprometemos a crear juntos a los mejores profesionales el mundo de la de la ambientación y escenarios llenos de emociones que harán de sus eventos momentos inolvidables.

							Decoraciones de lujo, fantasía y creatividad acompañaran tus mejores momentos, si tienes alguna idea especial, buscaremos la forma de complementarla para que sea única
						</p>
					</div>
					<div class="col-lg-3">
						<img src="Assets/img/decoracion.jpg" style="" id="imagenes">
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