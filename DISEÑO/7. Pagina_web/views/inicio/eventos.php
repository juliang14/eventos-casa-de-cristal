<html>
<head>
	<title>
		Eventos
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="views/img/icon.ico" />
	<link rel="stylesheet" type="text/css" href="views/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="views/Utilitarios/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="views/Utilitarios/css/responsive.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="views/Utilitarios/fontawesome-5.13.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="views/css/styles.css">
	<link rel="stylesheet" type="text/css" href="views/css/eventos.css">


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
		</div>

		<div class="container-fluid" style=""id="contenidoEventos">
			<div class="row">
				<div class="col-lg-12" id="eventos">
					<div>
						<ul>
							<li>
								<P>Bautizo</P>
								<img src="views/img/Bautizo.jpg"
								>
							</li>
							<a href="?class=IndexHome&method=paquetesMatrimonio">
								<li>	
									<p>Boda</p>
									<img src="views/img/Boda.jpg">
								</li>
							</a>
							<li>
								<p>15 años</p>
								<img src="views/img/15.jpg">
							</li>
						</ul>
					</div>
					<div>
						<ul>
							<li>
								<p>Grados</p>
								<img src="views/img/Grados.jpg">
							</li>
							<li>
								<p>Primera Comunion</p>
								<img src="views/img/Primera Comunion.jpg">
							</li>
							<li>
								<p>Despedida de solteros</p>
								<img src="views/img/eventos2.jpg"></li>
							</ul>

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
			<script type="text/javascript">
				$('#div-menu').click(function(){
				   
					var menu = document.getElementById("men"),
						estilo = document.head.appendChild(document.createElement("style"));

					if (menu.className =="men ocultar_menu") {
						estilo.innerHTML = "#contenidoEventos{margin-top: 3%;}";
					}else if(menu.className =="men"){
						estilo.innerHTML = "#contenidoEventos{margin-top: 50%;}";
					}

				});
			</script>
		</body>
		</html>