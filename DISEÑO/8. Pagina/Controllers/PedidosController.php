<?php

class PedidosController extends Pedidos{

    public function Index(){
        security::validate();
        require_once('views/Pedidos/Index.php');
    }

    //Actualizar pedido
	public function updatePedido(){
		$user = parent::getPedido($_REQUEST['userId']);
		parent::editPaquete( $_REQUEST['userId'],$_REQUEST['userData']);
		require_once('views/Modal/Index.php');
    }
    
    //Pagina crear pedido
    public function CrearPedido(){
        security::validate();
        require_once('views/Pedidos/CrearPedido.php');
    }

}

?>