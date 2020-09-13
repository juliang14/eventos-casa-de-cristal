DELIMITER &
CREATE PROCEDURE PR_CREAR_INVENTARIO_PAQUETES( 
	  P_ID_PAQUETE 		INT
	, P_ID_INVENTARIO 	INT
    , P_CANTIDAD		INT
)

BEGIN
	
    -- Declarar variables
    DECLARE V_ID_PAQUETE	 	INT;
    DECLARE V_VALOR_SIN_IVA	 	BIGINT;
    DECLARE V_VALOR_TOTAL	 	BIGINT;
    DECLARE V_IVA	 			BIGINT;
    
    -- Sacar el valor del producto en inventario y se multiplica por la cantidad
    SELECT VALOR_SIN_IVA * P_CANTIDAD, IVA * P_CANTIDAD, VALOR_TOTAL * P_CANTIDAD INTO V_VALOR_SIN_IVA, V_IVA, V_VALOR_TOTAL FROM INVENTARIO WHERE ID_INVENTARIO = P_ID_INVENTARIO;
    
    -- Insertar en la tabla inventario paquete
    insert into Inventario_paquete(InventarioId_inventario, PaqueteId_paquete, cantidad, Valor_sin_iva, Iva, Valor_Total)
	values
    (P_ID_INVENTARIO, P_ID_PAQUETE, P_CANTIDAD, V_VALOR_SIN_IVA, V_IVA, V_VALOR_TOTAL);
    
    -- Verificar los valores del inventario para el paquete y sumar
	SELECT SUM(VALOR_SIN_IVA), SUM(IVA), SUM(VALOR_TOTAL) INTO V_VALOR_SIN_IVA, V_IVA, V_VALOR_TOTAL FROM INVENTARIO_PAQUETE WHERE PAQUETEID_PAQUETE = P_ID_PAQUETE;
    
    -- Actualizar el valor del paquete
    UPDATE Paquete SET valor_paquete = V_VALOR_SIN_IVA, valor_iva = V_IVA, valor_total = V_VALOR_TOTAL WHERE ID_PAQUETE = P_ID_PAQUETE;
    
END &
