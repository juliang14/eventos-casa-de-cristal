<?php

class Turnos extends DB{

    // Obtener todos los empleados de la Base de datos
	public function getTurnos(){
		try {
			//Preparar la comsulta que se va a realizar
			$query = parent::conectDatabase()->prepare(" CALL PR_VER_TURNOS()");
			//ejecutar consulta o sentencia
			$query->execute();
			return $query->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die('Error: '.$e->getMessage());
			echo 'Linea: '.$e->getLine();
		}
	}

	// Crear EMPLEADO
	public function createTurno($Id_pedido, $Tipo_documento, $Numero_documento){

		try {
			//Preparar la comsulta que se va a realizar
			$query = parent::conectDatabase()->prepare("CALL PR_CREAR_TURNO( ?, ?, ?)");
			$query->bindParam(1,$Id_pedido,PDO::PARAM_INT);
			$query->bindParam(2,$Tipo_documento,PDO::PARAM_STR);
			$query->bindParam(3,$Numero_documento,PDO::PARAM_INT);
			//ejecutar consulta o sentencia
			$query->execute();
		} catch (Exception $e) {
			die('Error: '.$e->getMessage());
			echo 'Linea: '.$e->getLine();
		}
	}

}

?>