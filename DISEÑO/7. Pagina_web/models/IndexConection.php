<?php

class indexConection extends DB{

	// Obtener todos los clientes de la Base de datos
	public function getClientes(){
		try {
			//Preparar la comsulta que se va a realizar
			$query = parent::conectDatabase()->prepare(" CALL PR_VER_USUARIOS()");
			//ejecutar consulta o sentencia
			$query->execute();
			return $query->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die('Error: '.$e->getMessage());
			echo 'Linea: '.$e->getLine();
		}
	}

	// Obtener cliente
	public function getCliente($Id_usuario){
		try {
			//Preparar la comsulta que se va a realizar
			$query = parent::conectDatabase()->prepare(" SELECT * FROM VW_VER_USUARIOS WHERE Id_usuario=?");
			$query->bindParam(1,$Id_usuario,PDO::PARAM_INT);
			//ejecutar consulta o sentencia
			$query->execute();
			return $query->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die('Error: '.$e->getMessage());
			echo 'Linea: '.$e->getLine();
		}
	}

	// Crear cliente
	public function createCliente($Primer_nombre, $Segundo_nombre, $Primer_apellido, $Segundo_apellido, $Tipo_documentoId_documento, $Numero_documento, $Edad, $Telefono, $Direccion, $Email){

		try {
			//Preparar la comsulta que se va a realizar
			$query = parent::conectDatabase()->prepare("CALL PR_CREAR_USUARIO( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
			//CALL crear_usuario( Primer_nombre, Segundo_nombre, Primer_apellido, Segundo_apellido, Tipo_documentoId_documento, Numero_documento, Edad, Telefono, Direccion, Email, RolId_rol);
			$query->bindParam(1,$Primer_nombre,PDO::PARAM_STR);
			$query->bindParam(2,$Segundo_nombre,PDO::PARAM_STR);
			$query->bindParam(3,$Primer_apellido,PDO::PARAM_STR);
			$query->bindParam(4,$Segundo_apellido,PDO::PARAM_STR);
			$query->bindParam(5,$Tipo_documentoId_documento,PDO::PARAM_INT);
			$query->bindParam(6,$Numero_documento,PDO::PARAM_INT);
			$query->bindParam(7,$Edad,PDO::PARAM_INT);
			$query->bindParam(8,$Telefono,PDO::PARAM_INT);
			$query->bindParam(9,$Direccion,PDO::PARAM_STR);
			$query->bindParam(10,$Email,PDO::PARAM_STR);
			//ejecutar consulta o sentencia
			$query->execute();
		} catch (Exception $e) {
			die('Error: '.$e->getMessage());
			echo 'Linea: '.$e->getLine();
		}
	}

	//Borrar cliente
	public function deleteCliente($Id_usuario){
		try {
			$query = parent::conectDatabase()->prepare('CALL PR_ELIMINAR_USUARIO(?)');
			//
			$query->bindParam(1,$Id_usuario,PDO::PARAM_INT);
			// Ejecutar sentencia
			$query->execute();
		} catch (Exception $e) {
			die('Error: '.$e->getMessage());
			echo 'Linea: '.$e->getLine();
		}
	}

}

?>