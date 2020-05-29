<?php

class UsuarioController extends Usuario{

    public function Index(){
        Security::validate();
        require_once('views/Usuario/Index.php');
    }

    //Pagina administrador usuarios crear
	public function usuariosCrear(){
        Security::validate();
		require_once('views/Usuario/CrearUsuario.php');
    } 
    //Crear usuario
	public function insertCrearUsuario(){
        Security::validate();
		parent::createCliente( $_POST['Primer_nombre'], $_POST['Segundo_nombre'], $_POST['Primer_apellido'], $_POST['Segundo_apellido'], $_POST['Tipo_documentoId_documento'], $_POST['Numero_documento'], $_POST['Edad'], $_POST['Telefono'], $_POST['Direccion'], $_POST['Email']);
		header('location:?class=Usuario&method=Index');
    }
    
    //Pagina administrador usuarios ver
	public function UsuariosVer(){
        Security::validate();
		require_once('views/Usuario/VerUsuario.php');
    }
    
    //Pagina administrador usuarios editar
	public function UsuariosEditar(){
        Security::validate();
		require_once('views/Usuario/EditarUsuario.php');
	}
	//Editar usuario
	public function updateUsuario(){
        Security::validate();
		parent::editCliente($_POST['Id_usuario'], $_POST['Primer_nombre'], $_POST['Segundo_nombre'], $_POST['Primer_apellido'], $_POST['Segundo_apellido'], $_POST['Tipo_documentoId_documento'], $_POST['Numero_documento'], $_POST['Edad'], $_POST['Telefono'], $_POST['Direccion'], $_POST['Email']);
		header('location:?class=Usuario&method=Index');
    }
    
    //Borrar usuario
	public function deleteUsuario(){
		$user = parent::getCliente($_REQUEST['userId']);
		parent::deleteCliente($_REQUEST['userId']);
		require_once('views/Modal/Index.php');
	}

}

?>