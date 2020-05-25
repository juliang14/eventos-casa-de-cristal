<?php

class EmpleadoTurno extends DB{

    

	// Obtener turno empleado
	public function getTurno($Id_turno){
		try {
			//Preparar la comsulta que se va a realizar
			$query=parent::conectDatabase()->prepare(" SELECT * FROM turno where Id_turno =? ");
			//ejecutar consulta o sentencia
			$query->bindparam(1,$Id_turno,PDO::PARAM_INT);
			$query->execute();
			return $query->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die('Error: '.$e->getMessage());
			echo 'Linea: '.$e->getLine();
		}
	}

}

?>