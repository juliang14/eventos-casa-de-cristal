<html>
<head>
	<title>
		www.eventoscasadecristal.com
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
	
</head>
<body>
	<div class="center">
		<div class="container-fluid" id="pag">
			<div class="row">
				<div class="col-lg-12">
					
					<div class="container-fluid">
						<div class="row">

							<div class="col-lg-2 esp-bajo" STYLE="text-align:center;">
								<IMG SRC="views/img/Logo.jpeg" id="img-logo"></IMG>
							</div>

							<div class="col-lg-10" STYLE="background-color: WHITE;">
								<div class="row" id="busc">
									<div class="col-lg-2" STYLE="">
									</div>
									<div class="col-lg-4 esp-bajo" STYLE="">
										<div class="input-group" id="bus">
											<input type="text" class="form-control" placeholder="BUSCADOR">
											<div class="input-group-append">
												<button class="btn btn-outline-secondary" type="button">IR</button>
											</div>
										</div>
									</div>
									<div class="col-lg-2 esp-bajo" id="inicio-personal">
										<a href="?class=IndexHome&method=loginEmpleados">
											<!--IMG class="img-login" SRC="views/img/usuario.png"  title="Login empleado"></IMG-->
											<i class="fas fa-user"></i>
										</a>

										<a href="?class=IndexHome&method=loginAdministrador">
											<!--IMG class="img-login" SRC="views/img/espia.png"  title="Login administrador"-->
											<i class="fas fa-user-secret"></i>
										</a>
									</div>
									<div class="col-lg-4 esp-bajo" id="inicio-usuarios">
										<a href="?class=security&method=loginEmpleados">
											<button type="button" class="btn btn-primary">Iniciar sesion</button>
										</a>
										<a href="?class=IndexHome&method=formularioRegistro">
											<button type="button" class="btn btn-primary">Registro</button>
										</a>
									</div>
								</div>
								<div class="row" style="height: 15%;">
								</div>
								<div id="div-menu" onclick="menu();">
									<img src="views/img/menu.png">
								</div>
								<nav class="men" id="men">
									<ul class="menu-pincipal">
										<li class="active">
											<a href="?class=IndexHome&method=index">Inicio</a>
										</li>
										<li class="">
											<a href="?class=IndexHome&method=eventos">Eventos</a>
										</li>
										<li class="">
											<a href="?class=IndexHome&method=acercaDeNosotros">Acerca de nosotros</a>
										</li>
										<li class="">
											<a href="?class=IndexHome&method=contactos">Contactenos</a>
										</li>
									</ul>
								</nav>
								
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container-fluid" id="sliderbar">
				<div class="row">
					<div class="col-lg-12">
						<div id="demo" class="carousel slide" data-ride="carousel">

							<!-- Indicators -->
							<ul class="carousel-indicators">
								<li data-target="#demo" data-slide-to="0" class="active"></li>
								<li data-target="#demo" data-slide-to="1"></li>
								<li data-target="#demo" data-slide-to="2"></li>
							</ul>

							<!-- The slideshow -->
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="views/img/69.jpg" alt="Los Angeles">
								</div>
								<div class="carousel-item">
									<img src="views/img/961.jpg" alt="Chicago">
								</div>
								<div class="carousel-item">
									<img src="views/img/churque.jpg" alt="New York">
								</div>
								<div class="carousel-item">
									<img src="views/img/962.jpg" alt="New York">
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