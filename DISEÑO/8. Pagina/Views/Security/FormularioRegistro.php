<html>
<head>
	<title>
		Formulario de registro
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
					<div class="contenedorFormularioCrearUsuario" id="contenedorFormularioCrearUsuario">
						<h2 class="text-center" id="tituloCrearUsuario">Formulario de registro</h2>
						<form mane="" action="" method="POST" id="formulario_registrousuario">
							<div class="row">
							    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center seccion" >
									<label for="Primer_nombre">Primer Nombre</label><br>
									<input type="text" class="form-control" name="Primer_nombre" id="Primer_nombre" placeholder="Primer nombre" value="" required>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center seccion" >
									<label for="Segundo_nombre">Segundo Nombre</label><br>
									<input type="text" class="form-control" name="Segundo_nombre" id="Segundo_nombre" placeholder="Segundo nombre" value="">
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center seccion" >
									<label for="Primer_apellido">Primer Apellido</label><br>
									<input type="text" class="form-control" name="Primer_apellido" id="Primer_apellido" placeholder="Primer apellido" value="" required>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center seccion" >
									<label for="Segundo_apellido">Segundo Apellido</label><br>
									<input type="text" class="form-control" name="Segundo_apellido" id="Segundo_apellido" placeholder="Segundo apellido" value="">
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center seccion" >
									<label for="Tipo_documentoId_documento">Tipo de documento</label><br>
									<select class="form-control" name="Tipo_documentoId_documento" id="Tipo_documentoId_documento" >
										<?php foreach (TipoDocumento::getTipoDocumento() as $responseGetTipoDocumento){ ?>
											<option value="<?php echo $responseGetTipoDocumento->Id_documento ?>"><?php echo $responseGetTipoDocumento->Siglas ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center seccion" >
									<label for="Numero_documento">Numero de documento</label><br>
									<input type="number" class="form-control" name="Numero_documento" id="Numero_documento" placeholder="Numero de documento" value="" required>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center seccion" >
									<label for="Edad">EDAD</label><br>
									<input type="number" class="form-control" name="Edad" id="Edad" placeholder="Edad" value="" required onblur="generales.validarEdad();">
								</div>
								<br>
								<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center seccion" >
									<label for="Telefono">Telefono</label><br>
									<input type="number" class="form-control" name="Telefono" id="Telefono" placeholder="Telefono" value="" required>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center seccion">
									<label for="Direccion">Direccion</label><br>
									<input type="text" class="form-control" name="Direccion" id="Direccion" placeholder="Direccion" value="" required>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center seccion">
									<label for="Email">Correo</label><br>
									<input type="email" class="form-control" name="Email" id="Email" placeholder="Correo electronico" value="" required>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 centrar seccion">
									<input type="checkbox" name="">
									<label onClick="cargarTyC();" id="aceptar_TyC">Aceptar terminos y condiciones</label>
								</div>
							    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
									<div class="row centrar">
										<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 seccion" id="">
											<a onClick="registrarCliente();">
												<input type="text" class="btn btn-success" name="Registrarse" value="Registrarse">
											</a>
										</div>
										<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 seccion" id="">
											<a href="?class=index&method=index">
												<input type="text" class="btn btn-danger" name="Cancelar" value="Cancelar">
											</a>
										</div>
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
	<script type="text/javascript">
		function cargarTyC(){
			var terminos = `<div>
								Los Términos y Condiciones, también denominados como Condiciones Generales de Uso, son un documento 
								diseñado para aquellas personas que van a crear o administrar una página o sitio web, en el cual se 
								establecen las condiciones bajo las cuales los usuarios ingresarán y harán uso del sitio web.<br><br>

								El documento se encuentra diseñado para sitios que sean operados o manejados por personas o empresas 
								que tengan su domicilio en la República Mexicana o que estén destinados a personas que habitan en 
								este país, no obstante, su contenido hace referencia a disposiciones civiles comunes en la mayoría 
								de los países del mundo.<br><br>

								Este documento es utilizado para regular las condiciones y reglas a las que se someten tanto los 
								usuarios de un sitio web como su propietario y/o administrador, en lo referente al acceso y 
								utilización del sitio web. De igual manera, hace referencia a las políticas de privacidad, protección 
								de datos personales, enlaces, etc., que se tomarán para proteger la privacidad de los usuarios.<br><br>

								Dichas reglas y principios aportan un mayor nivel de confianza y seguridad jurídica a los usuarios 
								del sitio web así como a sus propietarios y/o administradores, puesto que también se establece el 
								tipo de personas a las que va dirigido y las responsabilidades que estos adquieren al hacer uso del 
								sitio o de los servicios que en él son ofrecidos.<br><br>

								Existe además otro documento conocido generalmente como "Condiciones Generales de Venta" que se utiliza 
								para regular la adquisición de productos o servicios a través de internet, no obstante, este último no 
								debe ser confundido con el presente documento, puesto que el presente solo se limita a regular el acceso, 
								funcionamiento e interacción del usuario con el sitio web, sin que se incluya las condiciones bajo las 
								cuales se formalizará la adquisición de productos o servicios que tengan un costo o que requieran una 
								licencia; y que se puedan obtener o adquirir a través del mismo sitio web.<br><br>
							</div>`;
			$('#exampleModalLongTitle').html('');
			$('#exampleModalLongTitle').html('Tèrminos y condiciones');
			$('.modal-body').html('');
			$('.modal-body').html(terminos);
			$('#modalCenter').modal('show');
		}
	</script>

</body>
</html>