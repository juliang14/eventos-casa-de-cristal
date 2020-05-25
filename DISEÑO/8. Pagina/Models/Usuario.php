<?php

class Usuario extends DB{

    public function autenticarUsuario($Usuario,$Clave){
		try {
			//Preparar la comsulta que se va a realizar
			$query = parent::conectDatabase()->prepare(" CALL PR_OBTENER_USUARIO_SISTEMA('USUARIO',?,?)");
			$query->bindParam(1,$Usuario, PDO::PARAM_STR);
			$query->bindParam(2,$Clave, PDO::PARAM_STR);
			//ejecutar consulta o sentencia
			$query->execute();
			return $query->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die('Error: '.$e->getMessage());
			echo 'Linea: '.$e->getLine();
		}
	}

}


?>