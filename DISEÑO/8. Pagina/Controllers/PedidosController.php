<?php

class PedidosController extends Pedidos{

    public function Index(){
        security::validate();
        require_once('views/Pedidos/Index.php');
    }

    //Actualizar pedido
	public function updatePedido(){
        security::validate();
		$user = parent::getPedido($_REQUEST['userId']);
		parent::editPaquete( $_REQUEST['userId'],$_REQUEST['userData']);
		require_once('views/Modal/Index.php');
    }
    
    //Pagina crear pedido
    public function CrearPedido(){
        security::validate();
        require_once('views/Pedidos/CrearPedido.php');
    }

    //obtener usuario parqa crear pedido
	public function getUsuario(){
		Security::validate();
        $user = Usuario::getClienteDocumento($_REQUEST['userTDocument'], $_REQUEST['userDocument']);
        if (!empty($user)) {
            echo $user->ID_USUARIO.'-'.$user->DESCRIPCION_MODAL.'-'.$user->DOCUMENTO.'-'.$user->NUMERO_DOCUMENTO;
        }else{echo "No se encontraron registros en la consulta realizada";}
    }
    //Crear pedido
	public function generarPedido(){
        Security::validate();
        parent::createPedido( $_POST['valorPaqueteGenerar'],$_POST['IdUsuarioGenerar']);
        header('location:?class=Pedidos&method=Index');
    }

}

?>