DELIMITER &
CREATE PROCEDURE PR_ACTUALIZAR_PEDIDO
( 
	  P_ID_PEDIDO 			INT
    , P_CIUDAD 				VARCHAR (60)
    , P_BARRIO 				VARCHAR (60)
    , P_DIRECCION			VARCHAR (100)
    , P_ESTADO 				VARCHAR (40)
    , P_FECHA_INICIO_EVENTO DATETIME
    , P_FECHA_FIN_EVENTO	DATETIME
)

BEGIN
    -- Declarar variables
    DECLARE V_ID_ESTADO_PEDIDO  					INT	 ;
	
    -- Obtener Id del estado pedido
    SELECT ID_ESTADOPEDIDO INTO V_ID_ESTADO_PEDIDO FROM(SELECT ID_ESTADOPEDIDO FROM ESTADO_PEDIDO WHERE ESTADO =P_ESTADO) AS ID_ESTADOPEDIDO;
    
    -- Editar registro de la tabla usuario sistema
    UPDATE PEDIDO 							
		SET  CIUDAD_EVENTO					=	P_CIUDAD
			,BARRIO_EVENTO					=	P_BARRIO
            ,DIRECCION_EVENTO				=	P_DIRECCION
            ,FECHA_INICIO_EVENTO			=	P_FECHA_INICIO_EVENTO
			,FECHA_FIN_EVENTO				=	P_FECHA_FIN_EVENTO
			,ESTADOPEDIDOID_ESTADOPEDIDO 	=	V_ID_ESTADO_PEDIDO
	WHERE ID_PEDIDO = P_ID_PEDIDO;
    
    -- Editar registro de la tabla TURNOS
    UPDATE TURNO 							
		SET  FECHA_INICIO_TURNO			=	P_FECHA_INICIO_EVENTO
			,FECHA_FIN_TURNO			=	P_FECHA_FIN_EVENTO
	WHERE PEDIDOID_PEDIDO = P_ID_PEDIDO;
    
END &
