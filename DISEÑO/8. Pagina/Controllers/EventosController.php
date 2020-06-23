<?php

class EventosController extends eventos{

    public function index(){
        Security::validate();
        require_once('views/Eventos/Index.php');
    }
    public function eventos(){
        require_once('views/Eventos/Eventos.php');
    }
    public function crearEventos(){
        Security::validate();
        require_once('views/Eventos/CrearEventos.php');
    }

    public function store(){
        /****** enviar datos de imagenes*****/
        $folder='Files/img';
        $tmp_name = $_FILES['imagen']['tmp_name'];
        $name = basename($_FILES['imagen']['name']);
        $type = $_FILES['imagen']['type'];
        move_uploaded_file($tmp_name,$folder.'/'.$name); //CREAR O MUEVE LA IMAGEN A LA CARPETA
        /******** ***********/
        parent:: crearEvento($_POST['nombreEvento'], $type, $name);
        header('location:?class=eventos&method=index');
    }

    public function delete_store(){
        Security::validate();
        $REventos = parent::getEvento($_REQUEST['nombreEvento']);
        $REventos->ACCION='ELIMINAR';
        unlink('Files/img/'.$REventos->IMAGEN); // ELIMINA EL ARCHIVO
        parent::deleteEvento($_REQUEST['nombreEvento']);
        require_once('views/Modal/Index.php');
    }

}

?>