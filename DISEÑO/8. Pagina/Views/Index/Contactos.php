<html>
<head>
	<title>
		Contacto
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="Assets/img/icon.ico" />

	<!--link rel="stylesheet" type="text/css" href="Assets/Utilitarios/bootstrap-4.0.0/css/bootstrap.min.css"-->
	<link rel="stylesheet" type="text/css" href="Assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/Utilitarios/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/Utilitarios/css/responsive.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/Utilitarios/fontawesome-5.13.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="Assets/css/styles.css">
	<link rel="stylesheet" type="text/css" href="Assets/css/contactos.css">
	
	
</head>
<body>
	<div class="center">
		<div class="container-fluid" id="pag">
			<div class="row">
				<div class="col-lg-12">
					
					<div class="container-fluid">
						<div class="row">

							<div class="col-lg-2 esp-bajo" STYLE="text-align:center;">
								<IMG SRC="Assets/img/Logo.jpeg" id="img-logo"></IMG>
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
										<a href="?class=security&method=loginEmpleado">
											<!--IMG class="img-login" SRC="Assets/img/usuario.png"  title="Login empleado"></IMG-->
											<i class="fas fa-user"></i>
										</a>

										<a href="?class=security&method=loginAdministrador">
											<!--IMG class="img-login" SRC="Assets/img/espia.png"  title="Login administrador"-->
											<i class="fas fa-user-secret"></i>
										</a>
									</div>
									<div class="col-lg-4 esp-bajo" id="inicio-usuarios">
										<a href="?class=security&method=loginUsuario">
											<button type="button" class="btn btn-primary">Iniciar sesion</button>
										</a>
										<a href="?class=security&method=formularioRegistro">
											<button type="button" class="btn btn-primary">Registro</button>
										</a>
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
											<a href="?class=Index&method=index">Inicio</a>
										</li>
										<li class="">
											<a href="?class=Eventos&method=index">Eventos</a>
										</li>
										<li class="">
											<a href="?class=Index&method=acercaDeNosotros">Acerca de nosotros</a>
										</li>
										<li class="active">
											<a href="?class=Index&method=contactos">Contactenos</a>
										</li>
									</ul>
								</nav>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid" style="" id="todoElContenido">
			<div class="row">
				<div class="col-lg-12">
					<div class="row" id="event_2">
						<div class="col-lg-12" STYLE="">
							<div style="text-align: center;">
								<h2>Contactos</h2>
							</div>
						</div>
					</div>
					<div class="row datoscontacto">
						<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2" STYLE=""></div>
						<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3" id="contactoImg">
							<IMG SRC="Assets/img/email.png"></IMG>
						</div>
						<div class="col-sm-5 col-md-5 col-lg-5 col-xl-5" STYLE="">
							<p>
								eventoscasadecristal@gmail.com
							</p>
						</div>
						<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2" STYLE=""></div>
					</div>
					<div class="row">
						<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2" STYLE=""></div>
						<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3" id="contactoImg">
							<IMG SRC="Assets/img/telefono.png"></IMG>
						</div>
						<div class="col-sm-5 col-md-5 col-lg-5 col-xl-5" STYLE="">
							<p>
								350 000 00 00
							</p>
						</div>
						<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2" STYLE=""></div>
					</div>
					<div class="row">
						<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2" STYLE=""></div>
						<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3" id="contactoImg">
							<IMG SRC="Assets/img/casa.png"></IMG>
						</div>
						<div class="col-sm-5 col-md-5 col-lg-5 col-xl-5" STYLE="">
							<p>
								carrera 12 # 12 - 12
							</p>
						</div>
						<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2" STYLE=""></div>
					</div>
					<div class="row" id="mapa">
						<iframe class="col-sm-12 col-md-12 col-lg-12 col-xl-12" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7953.276075480344!2d-74.06693580000004!3d4.658467400000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sco!4v1567953754522!5m2!1ses-419!2sco" width="600" frameborder="0" style="border:2px solid black;" allowfullscreen=""></iframe>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="Assets/js/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="Assets/Utilitarios/Utilitarios/jquery.dataTables.min.js" ></script>
		<script type="text/javascript" src="Assets/Utilitarios/Utilitarios/dataTables.responsive.min.js" ></script>	
		<script type="text/javascript" src="Assets/Utilitarios/Utilitarios/tether.min.js"></script>
		<script type="text/javascript" src="Assets/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="Assets/js/generales.js"></script>
		<script type="text/javascript">
				$('#div-menu').click(function(){
				   
					var menu = document.getElementById("men"),
						estilo = document.head.appendChild(document.createElement("style"));

					if (menu.className =="men ocultar_menu") {
						estilo.innerHTML = "#todoElContenido{margin-top: 5%;}";
					}else if(menu.className =="men"){
						estilo.innerHTML = "#todoElContenido{margin-top: 50%;}";
					}

				});
			</script>
</body>
</html>