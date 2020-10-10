<html>
<head>
	<title>
		Recuperacion de cuenta
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
	<link rel="stylesheet" type="text/css" href="Assets/css/formularios.css">


</head>
<body>
	<!-- Modal -->
	<div class="modal fade bd-example-modal-lg accionEvento" id="modalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" onclick="">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLongTitle">Importante</h5>
			<button type="button" class="close accionEvento" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-secondary accionEvento" data-dismiss="modal" onclick="">Cerrar</button>
			<!--button type="button" class="btn btn-primary">Save changes</button-->
			</div>
		</div>
		</div>
	</div>
	<!-----------------------   FIN MODAL  ------------------------------------>
	<div class="center">
		<div class="container-fluid" id="pag">
			<div class="row">
				<div class="col-lg-12">
					<div class="container-fluid">
						<div class="row">

							<div class="col-sm-12 col-md-2 col-lg-2 col-xl-2" STYLE="text-align: center;">
								<IMG SRC="Assets/img/Logo.jpeg" class="imgFormularios" STYLE=""></IMG>
							</div>

							<div class="col-lg-10" STYLE="background-color: WHITE;">
								<div class="row" id="busc">
									<div class="col-lg-2" STYLE="">
									</div>
									<div class="col-lg-4" STYLE="">
										<div class="input-group" id="bus">
											
										</div>
									</div>
									<div class="col-lg-2" id="inicio-personal">
										
									</div>
									<div class="col-lg-4" id="inicio-usuarios">
										
									</div>
								</div>
								<div class="row" style="height: 15%;">
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<main>
				<section class="" id="section_forms">
					<div class="contenedorFormularioRecuperarClave" id="contenedorFormularioRecuperarClave">
						<h2 class="text-center" id="tituloCrearUsuario">Recuperar clave</h2>
						<form class="" mane="" action="" method="POST" id="formulario_crearUsuario">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-left seccion mt-4">
                                <p>* Enviaremos tus datos de ingreso al correo registrado.</p>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center seccion">
                                <label for="Email">Correo</label><br>
                                <input type="email" class="form-control" name="Email" id="Email" placeholder="Correo electronico" value="" required>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="row centrar">
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 seccion text-right" id="">
                                        <input type="text" class="btn btn-success" name="RecuperarClave" value="RecuperarClave" id='RecuperarClave' onClick="recuperarClave('<?php echo $_GET['tipo']?>');">
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 seccion text-left" id="">
                                        <a href="?class=index&method=index">
                                            <input type="text" class="btn btn-danger" name="Cancelar" value="Cancelar">
                                        </a>
                                    </div>
                                </div>
                            </div>
						</form>
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