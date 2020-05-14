<html>
	<head>
		<title>
			Paquetes
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

							<div class="col-lg-2" STYLE="">
							  <IMG SRC="views/img/Logo.jpeg" STYLE="width: 90%;"></IMG>
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
										<a href="?class=IndexHome&method=loginUsuario">
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
										<li class="">
											<a href="?class=IndexHome&method=index">Inicio</a>
										</li>
										<li class="active">
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

			<div class="container-fluid" style="margin-top: 3%;">
			  <div class="row">
				<div class="col-lg-12">
					<div class="row" id="event_2">
					 	<div class="col-lg-12" STYLE="">
					 		<div style="text-align: center;">
								<h2>Paquetes</h2>
							</div>
						</div>
					</div>
					<br>
					<div class="row" id="event_2">
					 	<div class="col-lg-4" STYLE="">
					 		<div style="border: solid black 3px; text-align: center; border-radius: 14px;">
								<IMG SRC="views/img/eventos1.jpg" STYLE="width: 100%; max-height: 234PX; border-radius: 10px;"></IMG>
							</div>
							<button type="button" class="btn btn-primary">Paquete 1</button>
						</div>
						<div class="col-lg-4" STYLE="">
					 		<div style="border: solid black 3px; text-align: center; border-radius: 14px;">
								<IMG SRC="views/img/eventos2.jpg" STYLE="width: 100%; max-height: 234PX; border-radius: 10px;"></IMG>
							</div>
							<button type="button" class="btn btn-primary">Paquete 2</button>
						</div>
						<div class="col-lg-4" STYLE="">
					 		<div style="border: solid black 3px; text-align: center; border-radius: 14px;">
								<IMG SRC="views/img/eventos3.jpg" STYLE="width: 100%; max-height: 234PX; border-radius: 10px;"></IMG>
							</div>
							<button type="button" class="btn btn-primary">Paquete 3</button>
						</div>
					</div>
					<br>
					<div class="row" id="event_2">
						<div class="col-lg-4" STYLE="">
					 		<div style="border: solid black 3px; text-align: center; border-radius: 14px;">
								<IMG SRC="views/img/eventos4.jpg" STYLE="width: 100%; height: 234PX; border-radius: 10px;"></IMG>
							</div>
							<button type="button" class="btn btn-primary">Paquete 4</button>
						</div>
						<div class="col-lg-4" STYLE="">
					 		<div style="border: solid black 3px; text-align: center; border-radius: 14px;">
								<IMG SRC="views/img/eventos5.jpg" STYLE="width: 100%; height: 234PX; border-radius: 10px;"></IMG>
							</div>
							<button type="button" class="btn btn-primary">Paquete 5</button>
						</div>
						<div class="col-lg-4" STYLE="">
					 		<div style="border: solid black 3px; text-align: center; border-radius: 14px;">
								<IMG SRC="views/img/eventos6.jpg" STYLE="width: 100%; max-height: 234PX; border-radius: 10px;"></IMG>
							</div>
							<button type="button" class="btn btn-primary">Paquete 6</button>
						</div>
					 	
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