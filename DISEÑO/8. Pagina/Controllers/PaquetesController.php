<?php

class PaquetesController extends Paquetes{

    public function crearPaquete(){
        security::validate();
        require_once('views/paquetes/crearpaquetes.php');
    }

    public function Store(){
        security::validate();
        parent::crearPaqueteDeEvento( $_REQUEST['nombreEvento'], $_REQUEST['nombrePaquete'], $_REQUEST['Valor_total'], $_REQUEST['cantidad_personas']);
        $REpaquetes = parent::getPaqueteDeEvento($_REQUEST['nombrePaquete']);
        $ACCION ='CREAR';
        require_once('views/Modal/Index.php');
    }

}

?>