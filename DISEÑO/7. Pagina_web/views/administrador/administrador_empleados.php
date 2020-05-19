<html>
<head>
	<title>
		Administrador empleados
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
	<link rel="stylesheet" type="text/css" href="views/css/acercadenosotros.css">

</head>
<body>
	<div class="center">
		<div class="container-fluid" id="pag">
			<div class="row">
				<div class="col-lg-12">
					<div class="container-fluid">
						<div class="row">

							<div class="col-lg-2" STYLE="">
								<a href="?class=IndexHome&method=administrador">
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
				<!-----------------------   INICIO MODAL  ------------------------------------>
				<!-- Button trigger modal -->
				<!--
					$('#modalCenter').modal('show'); // abrir
					$('#modalCenter').modal('hide'); // cerrar
				-->
				<!--button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCenter">
				  Launch demo modal
				</button-->

				<!-- Modal -->
				<div class="modal fade" id="modalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" onclick="generales.refrescarPagina();">
				  <div class="modal-dialog modal-dialog-centered" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLongTitle">Importante</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        ...
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="generales.refrescarPagina();">Cerrar</button>
				        <!--button type="button" class="btn btn-primary">Save changes</button-->
				      </div>
				    </div>
				  </div>
				</div>
				<!-----------------------   FIN MODAL  ------------------------------------>
				<!-----------------------   INICIO TABLA CLIENTES  ------------------------------------>
				<section id="section_table">
					<h2>DATOS EMPLEADOS</h2>
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="seccion_boton_crear_usuario">
						<div class="row">
							<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
							</div>
							<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
							</div>
							<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 text-right">
								<a href="?class=IndexHome&method=administradorEmpleadosCrear">
									<button type="button" class="btn btn-success">
										Crear empleado <i class="fas fa-plus-circle"></i>
									</button>

								</a>
							</div>
						</div>
					</div>
					<table id="tabla_clientes" class="display responsive nowrap">
						<thead> 
							<tr style="color: #eb028b;">
								<th>ID</th>
		                        <th>NOMBRES</th>
		                        <th>APELLIDOS</th>
		                        <th>DOCUMENTO</th>
		                        <th>TELEFONO</th>
		                        <th>ROL</th>
		                        <th>CARGO</th>							                        
		                        <th>USUARIO_SISTEMA</th>
		                        <th>CLAVE</th>
		                        <th>ACCION</th>
		                    </tr>
						</thead>
						<tbody id="body_tabla_clientes">  
							<?php   foreach (parent::getEmpleados() as $responseGetClientes){ ?>
					                       
		                        <tr>
		                        	<td><?php echo $responseGetClientes->ID_EMPLEADO ?></td>
		                            <td><?php echo $responseGetClientes->NOMBRES ?></td>
		                            <td><?php echo $responseGetClientes->APELLIDOS ?></td>
		                            <td><?php echo $responseGetClientes->DOCUMENTO ?></td>
		                            <td><?php echo $responseGetClientes->TELEFONO ?></td>
		                            <td><?php echo $responseGetClientes->ROL ?></td>		
		                            <td><?php echo $responseGetClientes->CARGO ?></td>					                            
		                            <td><?php echo $responseGetClientes->USUARIO_SISTEMA ?></td>
		                            <td><?php echo $responseGetClientes->CLAVE ?></td>
		                            <td>
		                            	<a href="?class=IndexHome&method=administradorEmpleadosVer&ID_EMPLEADO=<?php echo $responseGetClientes->ID_EMPLEADO ?>">
		                            		<i class="fas fa-info color_orange" title="Ver usuario <?php echo $responseGetClientes->ID_EMPLEADO ?>"></i>
		                            	</a>
		                            	&nbsp;&nbsp;
		                            	<a href="?class=IndexHome&method=administradorEmpleadosEditar&ID_EMPLEADO=<?php echo $responseGetClientes->ID_EMPLEADO ?>">
		                            		<i class="fas fa-pencil-alt color_blue" title="Editar usuario <?php echo $responseGetClientes->ID_EMPLEADO ?>"></i>
		                            	</a>
		                            	&nbsp;&nbsp;
		                            	<!--a href="?class=IndexHome&method=deleteUsuario&ID_EMPLEADO=<?php echo $responseGetClientes->ID_EMPLEADO ?>"-->
		                            	<i class="fas fa-trash-alt color_red btn-borrarEmpleado" title="Borrar empleado <?php echo $responseGetClientes->ID_EMPLEADO ?>" data-control-user=<?php echo $responseGetClientes->ID_EMPLEADO ?>></i>
		                            	<!--/a-->
		                            </td>
		                        </tr>
					            
					        <?php   } ?>             
						</tbody>
					</table>
				</section>
				<!-----------------------   FIN TABLA CLIENTES  ------------------------------------>
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<div class="row">
						<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 text-right">
							<img src="views/img/izquierda.png">
						</div>
						<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
							<a href="?class=IndexHome&method=administrador">
								<img src="views/img/casa.png">
							</a>
						</div>
						<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 text-left">
							<img src="views/img/derecha.png">
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