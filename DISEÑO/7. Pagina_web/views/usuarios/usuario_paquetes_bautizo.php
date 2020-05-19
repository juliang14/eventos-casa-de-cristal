<html>
<head>
	<title>
		Usuario Paquetes Bautizo 
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
										<li class="active">
											<a href="?class=IndexHome&method=usuarioEventos">Eventos</a>
										</li>
										<li class="">
											<a href="?class=IndexHome&method=usuarioAcercaDeNosotros">Acerca de nosotros</a>
										</li>
										<li class="">
											<a href="?class=IndexHome&method=usuarioContactos">Contactenos</a>
										</li>
										<li class="">
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
				<div class="container-fluid" style="margin-top: 3%;">
					<div class="row">
						<div class="col-lg-12">
							<div class="row" id="event_2">
								<div class="col-lg-12" STYLE="">
									<div style="text-align: center;">
										<h2>Paquetes</h2>
										<br>
										<h3>SOMOS UNA EMPRESA DISPUESTA A BRINDAR A NUESTROS CLIENTES UN EXCELENTE SERVICIO. ¡BIENVENIDOS!</h3>
									</div>
								</div>
							</div>
							<br>
							<div class="row" id="event_2">
								<div class="col-lg-4" STYLE="">
									<div style="border: solid black 3px; text-align: center; border-radius: 14px; background-color:pink;">
										<h3 class="font-italic">PLAN TODO INCLUIDO 40 PERSONAS</h3>
										<br>
										<h1 class="text-danger">$2.500.000</h1>
										<br>
										<h5 >NUESTRO PLAN INCLUYE
										<hr>
										<span class="text-muted "> Buffete
										Ponqué
										Música/dj
										Mantelería/sillas/mesas
										Personal logístico </span></h5>

										
									</div>
									<button type="button" class="btn btn-primary">Paquete 1</button>
								</div>
								<div class="col-lg-4" STYLE="">
									<div style="border: solid black 3px; text-align: center; border-radius: 14px;background-color:pink;">
										<h3 class="font-italic">PLAN TODO INCLUIDO 50 PERSONAS</h3>
										<br>
										<h1 class="text-danger">$2.800.000</h1>
										<br>
										<h5 >NUESTRO PLAN INCLUYE
										<hr>
										<span class="text-muted "> Buffete
										Ponqué
										Música/dj
										Mantelería/sillas/mesas
										Personal logístico </span></h5>
									</div>
									<button type="button" class="btn btn-primary">Paquete 2</button>
								</div>
								<div class="col-lg-4" STYLE="">
									<div style="border: solid black 3px; text-align: center; border-radius: 14px;background-color:pink;">
										<h3 class="font-italic">PLAN TODO INCLUIDO 60 PERSONAS</h3>
										<br>
										<h1 class="text-danger">$3.100.000</h1>
										<br>
										<h5 >NUESTRO PLAN INCLUYE
										<hr>
										<span class="text-muted "> Buffete
										Ponqué
										Música/dj
										Mantelería/sillas/mesas
										Personal logístico </span></h5>
									</div>
									<button type="button" class="btn btn-primary">Paquete 3</button>
								</div>
							</div>
							<br>
							<div class="row" id="event_2">
								<div class="col-lg-4" STYLE="">
									<div style="border: solid black 3px; text-align: center; border-radius: 14px;background-color:pink;">
										<h3 class="font-italic">PLAN TODO INCLUIDO 70 PERSONAS</h3>
										<br>
										<h1 class="text-danger">$3.400.000</h1>
										<br>
										<h5 >NUESTRO PLAN INCLUYE
										<hr>
										<span class="text-muted "> Buffete
										Ponqué
										Música/dj
										Mantelería/sillas/mesas
										Personal logístico </span></h5>
									</div>
									<button type="button" class="btn btn-primary">Paquete 4</button>
								</div>
								<div class="col-lg-4" STYLE="">
									<div style="border: solid black 3px; text-align: center; border-radius: 14px;background-color:pink;">
										<h3 class="font-italic">PLAN TODO INCLUIDO 70 PERSONAS</h3>
										<br>
										<h1 class="text-danger">$3.700.000</h1>
										<br>
										<h5 >NUESTRO PLAN INCLUYE
										<hr>
										<span class="text-muted "> Buffete
										Ponqué
										Música/dj
										Mantelería/sillas/mesas
										Personal logístico </span></h5>
										
									</div>
									<button type="button" class="btn btn-primary">Paquete 5</button>
								</div>
								<div class="col-lg-4" STYLE="">
									<div style="border: solid black 3px; text-align: center; border-radius: 14px;background-color:pink;">

										<h3 class="font-italic">PLAN TODO INCLUIDO 80 PERSONAS</h3>
										<br>
										<h1 class="text-danger">$4.000.000</h1>
										<br>
										<h5 >NUESTRO PLAN INCLUYE
										<hr>
										<span class="text-muted "> Buffete
										Ponqué
										Música/dj
										Mantelería/sillas/mesas
										Personal logístico </span></h5>
										
									</div>
									<button type="button" class="btn btn-primary">Paquete 6</button>
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