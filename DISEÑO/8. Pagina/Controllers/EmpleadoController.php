<?php 



class EmpleadoController{

    public function index(){
        require_once('Views/Layouts/header.php');
        require_once('Views/Layouts/navbar-top.php');
        require_once('Views/Empleado/index.php');

        require_once('Views/Layouts/footer.php');
    }
}


?>