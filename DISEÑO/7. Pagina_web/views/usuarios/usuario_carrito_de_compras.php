<html>
<head>
	<title>
		Usuario carrito de compras
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
	<link rel="stylesheet" type="text/css" href="views/css/carrito_de_compras.css">

</head>
<body>
	<div class="center">
		<div class="container-fluid" id="pag">
			<div class="row">
				<div class="col-lg-12">

					<div class="container-fluid">
						<div class="row">

							<div class="col-lg-4" STYLE="">
							</div>
							<div class="col-lg-4" STYLE="text-align:center;">
								<IMG SRC="views/img/Logo.jpeg" STYLE="width: 50%;"></IMG>
							</div>
							<div class="col-lg-4" STYLE="">
							</div>
						</div>
					</div>
				</div>
			</div>
			<main>
				<h2>CARRITO DE COMPRAS</h2>
				<div class="linea"></div>
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="botones-carrito">
					<div class="row">
						<div class="col-sm-12 col-md-5 col-lg-5 col-xl-5" id="total-carrito">
							<button type="button" class="btn btn-primary" id="azul">$2'000.000</button>
						</div>
						<div class="col-sm-12 col-md-2 col-lg-2 col-xl-2">
						</div>
						<div class="col-sm-12 col-md-5 col-lg-5 col-xl-5" id="limpiar-carrito">
							<button type="button" class="btn btn-primary" id="rojo">Limpiar carrito</button>
						</div>
					</div>
				</div>
				<table>
					<thead>
						<tr>
							<th>Producto</th>
							<th>Cantidad</th>
							<th>Valor sin iva</th>
							<th>Iva</th>
							<th>Total</th>
							<th>Accion</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>mesas</td>
							<td>20</td>
							<td> $ 200.000</td>
							<td> $ 20.000</td>
							<td> $ 220.000</td>
							<td class="centrar">
								<img src="views/img/cancelar.png" width="50%">
							</td>
						</tr>
						<tr>
							<td>sillas</td>
							<td>80</td>
							<td>$ 400.000</td>
							<td>$ 40.000</td>
							<td>$ 440.000</td>
							<td class="centrar">
								<img src="views/img/cancelar.png" width="50%">
							</td>
						</tr>
						<tr>
							<td>manteles</td>
							<td>20</td>
							<td>$ 100.000</td>
							<td>$ 10.000</td>
							<td>$ 110.000</td>
							<td class="centrar">
								<img src="views/img/cancelar.png" width="50%">
							</td>
						</tr>
						<tr>
							<td>Platos G</td>
							<td>80</td>
							<td>$ 300.000</td>
							<td>$ 35.000</td>
							<td>$ 335.000</td>
							<td class="centrar">
								<img src="views/img/cancelar.png" width="50%">
							</td>
						</tr>
						<tr>
							<td>Cubiertos</td>
							<td>100</td>
							<td>$ 250.000</td>
							<td>$ 25.000</td>
							<td>$ 275.000</td>
							<td class="centrar">
								<img src="views/img/cancelar.png" width="50%">
							</td>
						</tr>
					</tbody>
				</table>
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="botones-carrito">
					<div class="row">
						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" id="total-carrito">
							<a href="?class=IndexHome&method=usuario">
								<button type="button" class="btn btn-primary" id="verde" style="margin-right: 5%;">Seguir comprando</button>
							</a>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" id="limpiar-carrito">
							<a href="?class=IndexHome&method=usuarioDetalleFacturaCompra">
								<button type="button" class="btn btn-primary" id="verde" style="margin-left: 5%;">Solcitar pedido</button>
							</a>
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