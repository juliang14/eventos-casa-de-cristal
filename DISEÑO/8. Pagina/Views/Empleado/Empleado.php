<html>
<head>
	<title>
		Empleados
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
	<link rel="stylesheet" type="text/css" href="Assets/css/empleados.css">

</head>
<body>
<?php $resultado = parent::getEmpleado($_GET['Id_empleado']); ?>
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
											<img src="Assets/img/emple.png">
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
											<a href="?class=empleado&method=empleado&Id_empleado=<?php echo $resultado->ID_EMPLEADO; ?>">Inicio</a>
										</li>
										<li class="">
											<a href="?class=EmpleadoTurno&method=index&Id_turno=<?php echo $resultado->Id_turno; ?>">Turnos</a>
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
					<div class="col-lg-12">
						<div class="row" id="event">
							<div class="col-sm-12 col-md-5 col-lg-5 col-xl-5" style="padding: 10%;text-align: center;">
								<img src="Assets/img/Despedida.jpg" width="300px">
							</div>
							<div class="col-sm-12 col-md-1 col-lg-1 col-xl-1">
							</div>
							<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
								<div class="row sombra" style="text-align: left;">

									<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 margen-abajo" >
										 <label>
											NOMBRE
										</label>
										<br>
										<input type="text" name="" placeholder=
										"<?php echo $resultado ->PRIMER_NOMBRE ?>" disabled="disabled">
									</div>
									<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 margen-abajo" >
										<label>
											APELLIDO
										</label>
										<br>
										<input type="text" name="" placeholder=
										"<?php echo $resultado ->PRIMER_APELLIDO ?>" disabled="disabled">
									</div>
									<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 margen-abajo" >
										<label>
											DOCUMENTO
										</label>
										<br>
										<input type="text" name="" placeholder=
										"<?php echo $resultado ->NUMERO_DOCUMENTO?>" disabled="disabled"" disabled="disabled">
									</div>
									<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 margen-abajo" >
										<label>
											EDAD
										</label>
										<br>
										<input type="number" name="" placeholder=
										"<?php echo $resultado ->EDAD?>" disabled="disabled"" disabled="disabled">
									</div>
									<br>
									<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 margen-abajo" >
										<label>
											CORREO ELECTRONICO
										</label>
										<br>
										<input type="email" name="" placeholder=
										"<?php echo $resultado ->EMAIL?>" disabled="disabled"" disabled="disabled">
									</div>
									<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 margen-abajo" >
										<label>
											CARGO
										</label>
										<br>
										<input type="text" name="" placeholder=
										"<?php echo $resultado ->CARGO ?>" disabled="disabled"" disabled="disabled">
									</div>						
								</div>						
							</div>
							<div class="col-sm-12 col-md-2 col-lg-2 col-xl-2"> </div> 
						</div>

					</div>
					
				</div>
				<section>
					<div class="col-xl-4 col-lg-6 col-md-5 col-sm-12 layout-top-spacing m-auto">

						<div class="user-profile layout-spacing">
							<div class="widget-content widget-content-area">
								<div class="d-flex justify-content-between">
									<h3 class="">Profile</h3>
									<a href="user_account_setting.html" class="mt-2 edit-profile"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
								</div>
								<div class="text-center user-info">
									<img src="https://designreset.com/cork/ltr/demo3/assets/img/profile-3.jpeg" alt="avatar">
									<p class="">Jimmy Turner</p>
								</div>
								<div class="user-info-list">

									<div class="">
										<ul class="contacts-block list-unstyled">
											<li class="contacts-block__item">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg> Web Developer
											</li>
											<li class="contacts-block__item">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>Jan 20, 1989
											</li>
											<li class="contacts-block__item">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>New York, USA
											</li>
											<li class="contacts-block__item">
												<a href="mailto:example@mail.com"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>Jimmy@gmail.com</a>
											</li>
											<li class="contacts-block__item">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> +1 (530) 555-12121
											</li>
											<!--li class="contacts-block__item">
												<ul class="list-inline">
													<li class="list-inline-item">
														<div class="social-icon">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
														</div>
													</li>
													<li class="list-inline-item">
														<div class="social-icon">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
														</div>
													</li>
													<li class="list-inline-item">
														<div class="social-icon">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
														</div>
													</li>
												</ul>
											</li-->
										</ul>
									</div>                                    
								</div>
							</div>
						</div>

					</div>
				</section>
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