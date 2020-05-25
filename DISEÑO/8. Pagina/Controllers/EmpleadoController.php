<?php 



class EmpleadoController extends Empleado{

    public function index(){
        Security::validate();
        //require_once('Views/Layouts/header.php');
        //require_once('Views/Layouts/navbar-top.php');
        require_once('Views/Empleado/index.php');

        //require_once('Views/Layouts/footer.php');
    }

    public function empleadoCrear(){
        Security::validate();
        require_once('Views/Empleado/CrearEmpleado.php');
    }

    //Crear empleado
	public function insertCrearEmpleado(){
        Security::validate();
		parent::createEmpleado( $_POST['Primer_nombre'], $_POST['Segundo_nombre'], $_POST['Primer_apellido'], $_POST['Segundo_apellido'], $_POST['Tipo_documentoId_documento'], $_POST['Numero_documento'], $_POST['CargoId_cargo'], $_POST['Edad'], $_POST['Telefono'], $_POST['Direccion'], $_POST['Email'], $_POST['RolId_rol']);
		header('location:?class=Empleado&method=index');
	}

/********************* PAGINA DE EMPLEADOS******************************************************/
    public function empleado(){
        Security::validate();
        require_once('Views/Empleado/empleado.php');
    }
}


?>