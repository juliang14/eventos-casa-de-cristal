<?php

class Paquetes extends DB{

    // Obtener paquete
	public function getPaquete($Id_paquete){
		try {
			//Preparar la comsulta que se va a realizar
			$query = parent::conectDatabase()->prepare(" SELECT * FROM VW_VER_PAQUETE WHERE ID_PAQUETE=?");
			$query->bindParam(1,$Id_paquete,PDO::PARAM_INT);
			//ejecutar consulta o sentencia
			$query->execute();
			return $query->fetchAll(PDO::FETCH_OBJ);
		}catch (Exception $e) {
			die('Error: '.$e->getMessage());
			echo 'Linea: '.$e->getLine();
		}
	}
	 // Obtener Evento paquete
	 public function getEventoPaquete($Tipo_de_evento){
		try {
			//Preparar la comsulta que se va a realizar
			$query = parent::conectDatabase()->prepare(" SELECT * FROM VW_VER_PAQUETES_EVENTOS WHERE TIPO_DE_EVENTO=?");
			$query->bindParam(1,$Tipo_de_evento,PDO::PARAM_STR);
			//ejecutar consulta o sentencia
			$query->execute();
			return $query->fetchAll(PDO::FETCH_OBJ);
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