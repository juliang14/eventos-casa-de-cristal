<?php

class Pedidos extends DB{

    // Obtener todos los pedidos de la Base de datos
	public function getPedidos(){
		try {
			//Preparar la comsulta que se va a realizar
			$query = parent::conectDatabase()->prepare(" CALL PR_VER_PEDIDOS()");
			//ejecutar consulta o sentencia
			$query->execute();
			return $query->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die('Error: '.$e->getMessage());
			echo 'Linea: '.$e->getLine();
		}
	}

	// Obtener pedido
	public function getPedido($Id_pedido){
		try {
			//Preparar la comsulta que se va a realizar
			$query = parent::conectDatabase()->prepare(" SELECT * FROM VW_VER_PEDIDOS WHERE ID_PEDIDO=?");
			$query->bindParam(1,$Id_pedido,PDO::PARAM_INT);
			//ejecutar consulta o sentencia
			$query->execute();
			return $query->fetch(PDO::FETCH_OBJ);
		}catch (Exception $e) {
			die('Error: '.$e->getMessage());
			echo 'Linea: '.$e->getLine();
		}
	}

	// Editar paquete
	public function editPaquete( $Id_pedido, $Estado){

		try {
			//Preparar la comsulta que se va a realizar
			$query = parent::conectDatabase()->prepare("CALL PR_ACTUALIZAR_PEDIDO( ?, ?);");
			//CALL PR_ACTUALIZAR_PEDIDO( 1, 'Realizado');
			$query->bindParam(1,$Id_pedido,PDO::PARAM_INT);
			$query->bindParam(2,$Estado,PDO::PARAM_STR);
			//ejecutar consulta o sentencia
			$query->execute();
		} catch (Exception $e) {
			die('Error: '.$e->getMessage());
			echo 'Linea: '.$e->getLine();
		}
	}

}

?>