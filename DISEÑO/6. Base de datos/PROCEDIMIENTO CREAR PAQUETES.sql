DELIMITER &
CREATE PROCEDURE PR_CREAR_PAQUETES( 
	  P_NOMBRE_EVENTO 		VARCHAR (70)
    , P_NOBREPAQUETE 		VARCHAR (70)
	, P_VALOR				BIGINT
    , P_CANTIDAD			BIGINT
)

BEGIN
	
    -- Declarar variables
    DECLARE V_ID_EVENTO	 INT;
    DECLARE V_ESTADO  	 VARCHAR (30) DEFAULT 'ACTIVO'; 
    
	SELECT ID_EVENTO INTO V_ID_EVENTO FROM EVENTO WHERE TIPO_DE_EVENTO = P_NOMBRE_EVENTO;
    
    -- INSERTAR 
    insert into Paquete( valor_paquete, valor_iva, valor_total, Tipo_de_paquete, Cantidad_Personas, Estado, EventoId_evento)
	values
    ( 0, 0, 0, P_NOBREPAQUETE, P_CANTIDAD, V_ESTADO, V_ID_EVENTO);
    
END &
