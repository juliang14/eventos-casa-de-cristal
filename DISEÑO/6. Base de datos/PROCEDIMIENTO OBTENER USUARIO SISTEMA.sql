DELIMITER &
CREATE PROCEDURE PR_OBTENER_USUARIO_SISTEMA( 
	  P_TIPO_USUARIO	VARCHAR (30)
    , P_USUARIO 		VARCHAR (70)
    , P_CLAVE 			VARCHAR (40)

)

BEGIN
    -- Declarar variables
    DECLARE V_TIPO_USUARIO 					VARCHAR (50) DEFAULT UPPER(P_TIPO_USUARIO);
    DECLARE V_ISCORREO		 				INT;
	
    select locate('@',P_USUARIO) INTO V_ISCORREO;
    IF V_ISCORREO >0 THEN
    
		IF V_TIPO_USUARIO = 'USUARIO' THEN
        
			SELECT 	A.ID_USUARIO
					,CONCAT(A.PRIMER_NOMBRE, ' ',A.SEGUNDO_NOMBRE,' ',A.PRIMER_APELLIDO,' ',A.SEGUNDO_APELLIDO) AS NOMBRE		
					,A.EDAD
					,A.EMAIL
					,D.NOMBRE_ROL 																				AS ROL
                    ,C.AVATAR
					,C.NOMBRE_USUARIO 																			AS USUARIO_SISTEMA
					,C.CLAVE
			FROM 		USUARIO 		AS A
			INNER JOIN 	TIPO_DOCUMENTO 	AS B		ON A.Tipo_documentoId_documento = B.id_documento
			INNER JOIN 	USUARIO_SISTEMA AS C		ON C.USUARIOID_USUARIO = A.id_usuario
			INNER JOIN 	ROL 			AS D		ON D.id_rol = A.rolId_rol
			WHERE C.ESTADO ='ACTIVO'
			AND A.EMAIL = P_USUARIO
            AND C.CLAVE = P_CLAVE
			;
        
        ELSEIF V_TIPO_USUARIO = 'EMPLEADO' THEN
        
			SELECT 	 A.ID_EMPLEADO
					,CONCAT(A.PRIMER_NOMBRE, ' ',A.SEGUNDO_NOMBRE,' ',A.PRIMER_APELLIDO,' ',A.SEGUNDO_APELLIDO) AS NOMBRE
					,A.EDAD
					,A.EMAIL
					,D.NOMBRE_ROL 																				AS ROL
                    ,C.AVATAR
					,C.NOMBRE_USUARIO 																			AS USUARIO_SISTEMA
					,C.CLAVE
			FROM 		EMPLEADO 		AS A
			INNER JOIN 	TIPO_DOCUMENTO 	AS B		ON A.Tipo_documentoId_documento = B.id_documento
			INNER JOIN 	USUARIO_SISTEMA AS C		ON C.EMPLEADOID_EMPLEADO 		= A.ID_EMPLEADO
			INNER JOIN 	ROL 			AS D		ON D.id_rol 					= A.rolId_rol
			INNER JOIN	CARGO			AS E		ON A.CARGOID_CARGO 				= E.ID_CARGO
			WHERE C.ESTADO ='ACTIVO'
            AND A.EMAIL = P_USUARIO
            AND C.CLAVE = P_CLAVE
			;
        
        END IF;
	
    ELSEIF V_ISCORREO =0 THEN
    
		IF V_TIPO_USUARIO = 'USUARIO' THEN
        
			SELECT 	A.ID_USUARIO
			,CONCAT(A.PRIMER_NOMBRE, ' ',A.SEGUNDO_NOMBRE,' ',A.PRIMER_APELLIDO,' ',A.SEGUNDO_APELLIDO) AS NOMBRE		
			,A.EDAD
			,A.EMAIL
			,D.NOMBRE_ROL 																				AS ROL
            ,C.AVATAR
			,C.NOMBRE_USUARIO 																			AS USUARIO_SISTEMA
			,C.CLAVE
			FROM 		USUARIO 		AS A
			INNER JOIN 	TIPO_DOCUMENTO 	AS B		ON A.Tipo_documentoId_documento = B.id_documento
			INNER JOIN 	USUARIO_SISTEMA AS C		ON C.USUARIOID_USUARIO = A.id_usuario
			INNER JOIN 	ROL 			AS D		ON D.id_rol = A.rolId_rol
			WHERE C.ESTADO ='ACTIVO'
			AND C.NOMBRE_USUARIO = P_USUARIO
            AND C.CLAVE = P_CLAVE
			;
        
        ELSEIF V_TIPO_USUARIO = 'EMPLEADO' THEN
        
			SELECT 	 A.ID_EMPLEADO
					,CONCAT(A.PRIMER_NOMBRE, ' ',A.SEGUNDO_NOMBRE,' ',A.PRIMER_APELLIDO,' ',A.SEGUNDO_APELLIDO) AS NOMBRE
					,A.EDAD
					,A.EMAIL
					,D.NOMBRE_ROL 																				AS ROL
                    ,C.AVATAR
					,C.NOMBRE_USUARIO 																			AS USUARIO_SISTEMA
					,C.CLAVE
			FROM 		EMPLEADO 		AS A
			INNER JOIN 	TIPO_DOCUMENTO 	AS B		ON A.Tipo_documentoId_documento = B.id_documento
			INNER JOIN 	USUARIO_SISTEMA AS C		ON C.EMPLEADOID_EMPLEADO 		= A.ID_EMPLEADO
			INNER JOIN 	ROL 			AS D		ON D.id_rol 					= A.rolId_rol
			INNER JOIN	CARGO			AS E		ON A.CARGOID_CARGO 				= E.ID_CARGO
			WHERE C.ESTADO ='ACTIVO'
            AND C.NOMBRE_USUARIO = P_USUARIO
            AND C.CLAVE = P_CLAVE
			;
        
        END IF;
    
    END IF;
    
END &




