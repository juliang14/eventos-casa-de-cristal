DELIMITER &
CREATE PROCEDURE PR_CREAR_EVENTOS( 
	  P_NOMBRE_EVENTO 	VARCHAR (50)
    , P_TIPO_IMAGEN		VARCHAR (30)
    , IMAGEN 			VARCHAR (60)
)

BEGIN
	
    -- Declarar variables
    DECLARE V_ESTADO	VARCHAR(20) DEFAULT 'ACTIVO';
    DECLARE V_CANTIDAD_EVENTO	INT;
    DECLARE V_NOMBRE_EVENTO VARCHAR (50);
    
    -- VALIDAR SI YA EXISTE EL EVENTO
    SELECT COUNT(*) INTO V_CANTIDAD_EVENTO FROM EVENTO WHERE TIPO_DE_EVENTO = P_NOMBRE_EVENTO;
    
    -- FORMATEAR NOMBRE
    SELECT FN_FORMATEAR_NOMBRES(P_NOMBRE_EVENTO,'NOR') INTO V_NOMBRE_EVENTO;
    
    IF V_CANTIDAD_EVENTO = 0 THEN
    
		-- INSERTAR 
		INSERT INTO Evento( Tipo_de_evento, tipo_imagen, imagen, Estado)
		VALUES
		(V_NOMBRE_EVENTO, P_TIPO_IMAGEN, IMAGEN, V_ESTADO)
        ;
    
    END IF;
    
END &
