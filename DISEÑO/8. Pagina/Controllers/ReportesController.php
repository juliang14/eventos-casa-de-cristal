<?php

class ReportesController extends Reportes{

    public function Index(){
        security::validate();
        require_once('views/Reportes/Index.php');
    }

}

?>