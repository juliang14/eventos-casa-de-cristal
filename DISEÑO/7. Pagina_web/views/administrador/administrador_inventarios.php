<html>
<head>
	<title>
		Administrador inventarios
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../img/icon.ico" />
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<link rel="stylesheet" type="text/css" href="../css/administrador.css">
	<link rel="stylesheet" type="text/css" href="../css/acercadenosotros.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">


</head>
<body>
	<div class="center">
		<div class="container-fluid" id="pag">
			<div class="row">
				<div class="col-lg-12">
					<div class="container-fluid">
						<div class="row">

							<div class="col-lg-2" STYLE="">
								<a href="administrador.html">
									<IMG SRC="../img/Logo.jpeg" STYLE="width: 90%;"></IMG>
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
											<img src="../img/silueta-de-multiplesusuarios.png">
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
				<div class="row">
					<div class="col-lg-12">
						<div class="row" id="event_2">
							<div class="col-lg-12" STYLE="">
								<div style="text-align: center; margin-top: 5%;">
									<h2>Inventarios</h2>
									<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
										<div class="row">
											<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
											</div>
											<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
											</div>
											<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
												<div class="row">
													<div class="col-sm-12 col-md-8 col-lg-8 col-xl-8" style="text-align: right;">
														<p>Agregar</p>
													</div>
													<div class="col-sm-12 col-md-4x col-lg-4 col-xl-4" style="text-align: left;">
														<a href="administrador_inventarios_crear.html">
															<img src="../img/signo-mas-en-circulo.png">
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<table style="text-align:center;">
										<thead>
											<tr>
												<th>Id pedido</th>
												<th>Nombre inventario</th>
												<th>cantidad</th>
												<th>Categoria</th>
												<th>Accion</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>cucharas</td>
												<td>200</td>
												<td>matrimonio</td>
												<td style="text-align: center;">
													<a href="administrador_inventarios_editar_eliminar.html">
														<img src="../img/lapiz.png">
													</a>
												</td>
											</tr>
											<tr>
												<td>2</td>
												<td>vasos</td>
												<td>200</td>
												<td>matrimonio</td>
												<td style="text-align: center;">
													<a href="administrador_inventarios_editar_eliminar.html">
														<img src="../img/lapiz.png">
													</a>
												</td>
											</tr>
											<tr>
												<td>3</td>
												<td>manteles</td>
												<td>300</td>
												<td>matrimonio</td>
												<td style="text-align: center;">
													<a href="administrador_inventarios_editar_eliminar.html">
														<img src="../img/lapiz.png">
													</a>
												</td>
											</tr>
											<tr>
												<td>4</td>
												<td>platos</td>
												<td>200</td>
												<td>matrimonio</td>
												<td style="text-align: center;">
													<a href="administrador_inventarios_editar_eliminar.html">
														<img src="../img/lapiz.png">
													</a>
												</td>
											</tr>
											<tr>
												<td>5</td>
												<td>cuchillos</td>
												<td>150</td>
												<td>matrimonio</td>
												<td style="text-align: center;">
													<a href="administrador_inventarios_editar_eliminar.html">
														<img src="../img/lapiz.png">
													</a>
												</td>
											</tr>	
										</tbody>
									</table>
									<div cla
									ss="col-sm-12 col-md-12 col-lg-12 col-xl-12">
									<div class="row">
										<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
											<img src="../img/izquierda.png">
										</div>
										<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
											<a href="administrador.html">
												<img src="../img/casa.png">
											</a>
										</div>
										<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
											<img src="../img/derecha.png">
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
</div>
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/generales.js"></script>
</body>
</html>