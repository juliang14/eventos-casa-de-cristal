<html>
<head>
	<title>
		Administrador paquetes
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
									<h2>Paquetes</h2>
									<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="agrega-paquetes">
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
														<a href="administrador_paquetes_crear.html">
															<img src="../img/add.png">
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
										<div class="row">
											<div class="col-sm-12 col-md-2 col-lg-2 col-xl-2">
											</div>
											<div class="col-sm-12 col-md-7 col-lg-7 col-xl-7" style="padding: 0;">
												<nav class="men menpaquetes" id="men">
													<ul class="menu-pincipal">
														<li class="active">
															<a href="">Bautizo</a>
														</li>
														<li class="">
															<a href="">Boda</a>
														</li>
														<li class="">
															<a href="">15 años</a>
														</li>
														<li class="">
															<a href="">Grados</a>
														</li>
														<li class="">
															<a href="">Primera Comunion</a>
														</li>
														<li class="">
															<a href="">Despedida de solteros</a>
														</li>
													</ul>
												</nav>
											</div>
											<div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
											</div>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="contenedor-tabla-paquetes">
										<div class="row">
											<div class="col-sm-12 col-md-1 col-lg-1 col-xl-1">
											</div>
											<div class="col-sm-12 col-md-10 col-lg-10 col-xl-10" id="caja-paquete">
												<table id="tabla-paquetes">
													<thead>
														<tr>
															<th>Paquete</th>
															<th>Objeto</th>
															<th>Cantidad</th>
															<th>Valor</th>											
															<th>Accion</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>Mesas</td>
															<td>10</td>
															<td>$ 100.000</td>
															<td style="text-align: center;">
																<a href="administrador_paquetes_editar.html">
																	<img src="../img/lapiz.png">
																</a>
																
																	<img src="../img/error.png">
																
															</td>
														</tr>
														<tr>
															<td>1</td>
															<td>Sillas</td>
															<td>20</td>
															<td>$ 200.000</td>
															<td style="text-align: center;">
																<a href="administrador_paquetes_editar.html">
																	<img src="../img/lapiz.png">
																</a>
																
																	<img src="../img/error.png">
																
															</td>
														</tr>
														<tr>
															<td>2</td>
															<td>Mesas</td>
															<td>40</td>
															<td>$ 400.000</td>
															<td style="text-align: center;">
																<a href="administrador_paquetes_editar.html">
																	<img src="../img/lapiz.png">
																</a>
																
																	<img src="../img/error.png">
																
															</td>
														</tr>
														<tr>
															<td>3</td>
															<td>Cucharas</td>
															<td>10</td>
															<td>$ 150.000</td>
															<td style="text-align: center;">
																<a href="administrador_paquetes_editar.html">
																	<img src="../img/lapiz.png">
																</a>
																
																	<img src="../img/error.png">
																
															</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="col-sm-12 col-md-1 col-lg-1 col-xl-1">
											</div>
										</div>
									</div>
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