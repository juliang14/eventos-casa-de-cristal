<?php

class Eventos extends DB{

    // Obtener todos los clientes de la Base de datos
	public function getEventos(){
		try {
			//Preparar la comsulta que se va a realizar
			$query = parent::conectDatabase()->prepare(" SELECT * FROM VW_VER_EVENTOS");
			//ejecutar consulta o sentencia
			$query->execute();
			return $query->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die('Error: '.$e->getMessage());
			echo 'Linea: '.$e->getLine();
		}
	}
	// Obtener todos los clientes de la Base de datos
	public function getEvento($nombreEvento){
		try {
			//Preparar la comsulta que se va a realizar
			$query = parent::conectDatabase()->prepare(" SELECT * FROM VW_VER_EVENTOS WHERE TIPO_DE_EVENTO = ?");
			$query->bindParam(1, $nombreEvento,PDO::PARAM_STR);
			//ejecutar consulta o sentencia
			$query->execute();
			return $query->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die('Error: '.$e->getMessage());
			echo 'Linea: '.$e->getLine();
		}
	}

	public function crearEvento($nombreEvento, $tipo, $imagen){
		try {
			//Preparar la comsulta que se va a realizar
			$query = parent::conectDatabase()->prepare(" CALL PR_CREAR_EVENTOS ( ?, ?, ?)");
			//ejecutar consulta o sentencia
			$query->bindParam(1, $nombreEvento,PDO::PARAM_STR);
			$query->bindParam(2, $tipo,PDO::PARAM_STR);
			$query->bindParam(3, $imagen,PDO::PARAM_STR);
			$query->execute();
		} catch (Exception $e) {
			die('Error: '.$e->getMessage());
			echo 'Linea: '.$e->getLine();
		}
	}

	//Borrar evento
	public function deleteEvento($nombreEvento){
		try {
			$query = parent::conectDatabase()->prepare('CALL PR_ELIMINAR_EVENTO(?)');
			$query->bindParam(1,$nombreEvento,PDO::PARAM_STR);
			// Ejecutar sentencia
			$query->execute();
		} catch (Exception $e) {
			die('Error: '.$e->getMessage());
			echo 'Linea: '.$e->getLine();
		}
	}

}

?>