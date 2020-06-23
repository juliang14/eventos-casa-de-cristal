<?php

class PaquetesController extends Paquetes{

    public function crearPaquete(){
        security::validate();
        require_once('views/paquetes/crearpaquetes.php');
    }

}

?>