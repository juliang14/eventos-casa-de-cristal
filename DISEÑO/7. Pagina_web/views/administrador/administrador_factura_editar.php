<html>
<head>
	<title>
		Administrador factura editar
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
	<link rel="stylesheet" type="text/css" href="views/css/administrador.css">
	<link rel="stylesheet" type="text/css" href="views/css/facturas.css">

</head>
<body>
	<div class="center">
		<div class="container-fluid" id="pag">
			<div class="row">
				<div class="col-lg-12">

					<div class="container-fluid">
						<div class="row">

							<div class="col-lg-2" STYLE="">
								<a href="?class=IndexHome&method=administrador"></a>
									<IMG SRC="views/img/Logo.jpeg" STYLE="width: 90%;"></IMG>
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
											<p>Admin Eventos</p>
											<img src="views/img/silueta-de-multiplesusuarios.png">
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
				<h1>FACTURA</h1>
				<br>
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="cajon">
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="parte">
						<div class="row">
							<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
								<label>Cliente</label>
								<input type="text" name="cliente" value="" placeholder="digite su nombre">
							</div>
							<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
								<label>Documento</label>
								<input class="medio" type="number" name="documento">
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 centrar">
								<select>
									<option>Seleccione un valor</option>
								</select>
							</div>
							<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
								<label># Factura</label>
								<input class="medio" type="number" name="factura">
							</div>
						</div>
					</div>

					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="parte">
						<div class="row">
							<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
								<label>NIT</label>
								<input type="number" name="number" value="" placeholder="">
							</div>
							<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1">
								<img src="views/img/email.png">
							</div>
							<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 ">
								<p class="centrar" >eventoscasadecristal@gmail.com</p>
							</div>
							<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 ">
								<p class="centrar" >Calle 69 # 20-36, Bogota</p>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="parte">
						<h5>Detalle de factura</h5>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="det-factura">
						<div class="row">
							<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
								<label>Fecha</label>
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
								<label>Cantidad</label>
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 ">
								<label>Interes</label>
							</div>
							<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
								<label># Pedido</label>
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
								<label>Subtotal</label>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
								<input type="date" name="fecha" value="" >
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
								<input type="number" name="Cantidad" value="" >
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 ">
								<input type="number" name="Interes" value="" >
							</div>
							<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
								<input type="number" name="Pedido" value="" >
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
								<input type="number" name="Subtotal" value="" >
							</div>
						</div>
					</div>
					<br>
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="det-factura">
						<div class="row">
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
								
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
								<label>Abono</label>
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
								<label>Iva</label>
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 ">
								<label>Valor parcial</label>
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
								<label>Valor total</label>
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
								
							</div>
						</div>

						<div class="row">
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 ">
								
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
								<input type="number" name="Abono" value="" >
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
								<input type="number" name="Iva" value="" >
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 ">
								<input type="number" name="ValorParcial" value="" >
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
								<input type="number" name="ValorTotal" value="" >
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
								
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<div class="row">
						<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
							<a href="?class=IndexHome&method=administradorPedidos">
								<img src="views/img/izquierda.png">
							</a>
						</div>
						<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 centrar">
							<a href="?class=IndexHome&method=administradorPedidos">
								<button class="btn azul">Actualizar</button>
							</a>
						</div>
						<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
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