<?php 


class TurnoController{


    public function index(){
        require_once('Views/Layouts/header.php');
        require_once('Views/Layouts/navbar-top.php');

        require_once('Views/Turno/index.php');

        require_once('Views/Layouts/footer.php');
    }
}



?>