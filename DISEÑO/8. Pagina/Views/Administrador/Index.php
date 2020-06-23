<html>
<head>
	<title>
		Administrador
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="Assets/img/icon.ico" />

	<!--link rel="stylesheet" type="text/css" href="Assets/Utilitarios/bootstrap-4.0.0/css/bootstrap.min.css"-->
	<!--link rel="stylesheet" type="text/css" href="<--?php echo APP_URL ?>Assets/bootstrap/css/bootstrap.min.css"-->
	<link rel="stylesheet" type="text/css" href="Assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/Utilitarios/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/Utilitarios/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="Assets/Utilitarios/fontawesome-5.13.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="Assets/Utilitarios/datetimepicker/jquery.datetimepicker.css">
    <link rel="stylesheet" type="text/css" href="Assets/css/fuentes.css">
	<link rel="stylesheet" type="text/css" href="Assets/css/styles.css">
	<link rel="stylesheet" type="text/css" href="Assets/css/administrador.css">

</head>
<body>
	<?php
		$Response = Administrador::getInicioAdminCantidad();
	?>
	<div class="center">
		<div class="container-fluid" id="pag">
			<div class="row" >
				<div class="col-lg-12" id="header">

					<div class="container-fluid">
						<div class="row">

							<div class="col-lg-3" STYLE="margin:auto;">
								<div class="input-group" id="bus">
									<input type="text" class="form-control" placeholder="BUSCADOR">
									<div class="input-group-append">
										<button class="btn btn-outline-secondary" type="button">IR</button>
									</div>
								</div>
							</div>

							<div class="col-lg-9" STYLE="background-color: WHITE;">
								<div class="row" id="busc">
									<div class="col-lg-3" STYLE="margin:auto;text-align:center;">
										
									</div>
									<div class="col-lg-4" STYLE="margin:auto;text-align:center;">
										
									</div>
									<div class="col-lg-1" id="inicio-personal">

									</div>
									<div class="col-lg-4" id="inicio-usuarios">
										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="usuario-arriba">
											<p><?php echo $_SESSION['UserAutenticate']->NOMBRE; ?></p>
											<img src="Assets/img/silueta-de-multiplesusuarios.png">
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
							</div>
						</div>
					</div>
				</div>
			</div>
			<main class="main-admin">
				<div class="logo-central">
					<img src="Assets/img/logo.jpeg" id="img_home_administrador">
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<div class="row">
						<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
						</div>
						
						<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 cantidad" id="num-empleados">
							<p id="Cantidad-empleados">Cantidad de empleados <strong class="datosCantidades"><?php echo $Response->CANTIDAD_EMPLEADOS ?></strong></p>
						</div>

						<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" style="margin-top: 1%;">
					<div class="row">
						
						<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 cantidad" id="num-usuarios">
							<p id="Cantidad-usuarios">Cantidad usuarios <strong class="datosCantidades"><?php echo $Response->CANTIDAD_USUARIOS ?></strong></p>
						</div>
						
						<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
						</div>
						<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 cantidad" id="num-pedidos">
							<p id="Cantidad-pedidos">Cantidad pedidos <strong class="datosCantidades"><?php echo $Response->CANTIDAD_PEDIDOS ?></strong></p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" style="margin-top: 5%;">
					<div class="row">
						<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 cantidad" id="num-Paquetes">
							<p id="Paquetes">Eventos y Paquetes</p>
						</div>
						<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
						</div>
						<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 cantidad"  id="num-Reportes">
							<p id="Reportes">Reportes</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" style="margin-top: 5%;">
					<div class="row">
						<div class="col-sm-12 col-md-2 col-lg-2 col-xl-2">
						</div>
						<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 cantidad" id="turno">
							<p id="Turnos">Turnos</p>
						</div>
						<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 cantidad" id="inventario">
							<p id="Inventarios">Inventarios</p>
						</div>
						<div class="col-sm-12 col-md-2 col-lg-2 col-xl-2">
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