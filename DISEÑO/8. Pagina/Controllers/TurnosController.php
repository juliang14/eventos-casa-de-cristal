<?php 


class TurnosController extends Turnos{


    public function index(){
        Security::validate();
        require_once('Views/Turno/index.php');
    }
    public function crearTurno(){
        Security::validate();
        require_once('Views/Turno/CrearTurno.php');
    }
}



?>