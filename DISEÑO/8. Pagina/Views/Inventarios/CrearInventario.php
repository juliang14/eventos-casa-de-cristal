<html>
<head>
	<title>
		Crear usuarios
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
	<link rel="stylesheet" type="text/css" href="Assets/css/administrador.css">
	<link rel="stylesheet" type="text/css" href="Assets/css/administrador_eliminar_editar.css">

</head>
<body>
	<div class="center">
		<div class="container-fluid" id="pag">
			<div class="row">
				<div class="col-lg-12">
					<div class="container-fluid">
						<div class="row">

							<div class="col-lg-2" STYLE="">
								<a href="?class=Administrador&method=Index">
									<IMG SRC="Assets/img/Logo.jpeg" STYLE="width: 90%;"></IMG>
								</a>
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
			<main>
				<!-----------------------   INICIO FORMULARIOS  ------------------------------------>
				<section class="" id="section_forms">
					<div class="contenedorFormularioCrearInventario" id="contenedorFormularioCrearInventario">
						<h2 class="text-center" id="tituloVerInventario"> Crear Producto </h2>
						<form mane="" action="?class=Inventarios&method=insertCrearInventario" method="POST">
							<div class="row">
							    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center" >
									<label for="VerInventario">Inventario</label><br>
									<input type="text" class="form-control" name="VerInventario" id="VerInventario" placeholder="Inventario" value="" required>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center" >
									<label for="SegundoCantidad_nombre">Cantidad</label><br>
									<input type="number" class="form-control" name="Cantidad" id="Cantidad" placeholder="Cantidad" value="" required >
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center" >
									<label for="Valor_sin_iva">Valor sin iva</label><br>
									<input type="text" class="form-control valorNumerico" name="Valor_sin_iva" id="Valor_sin_iva" data-thousands="." data-decimal="," data-precision="0" data-prefix="$ " placeholder="Valor sin iva" value="" required>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4 mb-4 text-center" >
									<p>* El precio del Iva y valor total, se calculara automaticamente sobre el valor sin iva</p>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center" >
									<label for="Categoria">Categoria</label><br>
									<input type="text" class="form-control" name="Categoria" id="Categoria" placeholder="Categoria" value="" required>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-4 text-center">
								    <button type="submit" class="btn verde" id="botonCrearInventario" >Crear Producto</button>
							    </div>
							    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-4 text-center">
								    <a href="?class=inventarios&method=Index" class="btn rojo" id="botonNoCrearInventario" >volver</a>
							    </div>
							</div>
						</form>
					</div>
				</section>
				<!-----------------------   FIN FORMULARIOS  ------------------------------------>
				<!-----------------------   INICIO BOTONES FINALES  ------------------------------------>
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" style="margin-top: 5%;" id="section_buttom_finaly">
					<div class="row">
						<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 text-right">
							<a href="?class=inventarios&method=Index">
								<img src="Assets/img/izquierda.png">
							</a>
						</div>
						<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
							<a href="?class=Administrador&method=Index">
								<img src="Assets/img/casa.png">
							</a>
						</div>
						<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4"></div>
					</div>
				</div>
				<!-----------------------   FIN BOTONES FINALES  ------------------------------------>
			</main>
		</div>
	</div>
	<script type="text/javascript" src="Assets/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="Assets/Utilitarios/Utilitarios/jquery.dataTables.min.js" ></script>
    <script type="text/javascript" src="Assets/Utilitarios/Utilitarios/dataTables.responsive.min.js" ></script>	
	<script type="text/javascript" src="Assets/Utilitarios/Utilitarios/tether.min.js"></script>
    <script type="text/javascript" src="Assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="Assets/Utilitarios/Utilitarios/jquery.maskMoney.js"></script>
	<script type="text/javascript" src="Assets/js/generales.js"></script>
</body>
</html>