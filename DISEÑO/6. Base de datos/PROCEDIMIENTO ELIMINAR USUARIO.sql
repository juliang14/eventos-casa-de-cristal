DELIMITER &
CREATE PROCEDURE PR_ELIMINAR_USUARIO( ID_USUARIO INT)

BEGIN
	-- Desactiva el "Modo de actualización segura" temporalmente (Opcion del workbrench)
	SET SQL_SAFE_UPDATES = 0;

    -- Elimina registro de la tabla usuario
    DELETE FROM USUARIO WHERE id_usuario = ID_USUARIO;
    
	-- Elimina registro de la tabla usuario sistema
    DELETE FROM USUARIO_SISTEMA WHERE USUARIOID_USUARIO = ID_USUARIO;
    
    
    -- Activa el "Modo de actualización segura" temporalmente (Opcion del workbrench) 
    SET SQL_SAFE_UPDATES = 1;
    
END &
