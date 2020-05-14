<?php

/**
 * 
 */
class IndexHomeController extends indexConection{
	//Pagina de inicio
	public function index(){
		require_once('views/index.php');
	}
	//Pagina acerca de nosotros
	public function acercaDeNosotros(){
		require_once('views/inicio/acerca_de_nosotros.php');
	}
	//Pagina de contactos
	public function contactos(){
		require_once('views/inicio/contactos.php');
	}
	//Pagina de eventos
	public function eventos(){
		require_once('views/inicio/eventos.php');
	}
	//Pagina de formulario de registro
	public function formularioRegistro(){
		require_once('views/inicio/formulario_registro.php');
	}
	//Pagina de login administrador
	public function loginAdministrador(){
		require_once('views/inicio/login_administrador.php');
	}
	//Pagina de login empleados
	public function loginEmpleados(){
		require_once('views/inicio/login_empleados.php');
	}
	//Pagina de login usuario
	public function loginUsuario(){
		require_once('views/inicio/login_usuario.php');
	}
	//Pagina de paquetes matrimonio
	public function paquetesMatrimonio(){
		require_once('views/inicio/paquetes_matrimonio.php');
	}
	//Pagina de registro exitoso
	public function registroExitoso(){
		require_once('views/inicio/registro_exitoso.php');
	}
	//Pagina de restablecer contraseña
	public function restablecerContrasena(){
		require_once('views/inicio/restablecer_contraseña.php');
	}
}

 ?>