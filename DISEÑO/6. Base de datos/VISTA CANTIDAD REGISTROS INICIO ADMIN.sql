CREATE OR REPLACE VIEW VW_CANTIDAD_REGISTROS_INICIO_ADMIN
(    CANTIDAD_USUARIOS
	,CANTIDAD_EMPLEADOS
    ,CANTIDAD_PEDIDOS
)

AS

SELECT   CANTIDAD_USUARIOS
		,CANTIDAD_EMPLEADOS
        ,CANTIDAD_PEDIDOS
FROM
	(SELECT COUNT(A.ID_USUARIO) AS CANTIDAD_USUARIOS
	FROM USUARIO 				AS A
	INNER JOIN USUARIO_SISTEMA 	AS B 	ON A.ID_USUARIO = B.USUARIOID_USUARIO
	WHERE B.ESTADO='ACTIVO') 	AS T1,
	(
	SELECT count(C.ID_EMPLEADO) AS CANTIDAD_EMPLEADOS
	FROM EMPLEADO AS C
	INNER JOIN USUARIO_SISTEMA 	AS D on C.ID_EMPLEADO = D.EMPLEADOID_EMPLEADO
	WHERE D.ESTADO='ACTIVO') 	AS T2,
    (
	SELECT count(E.ID_PEDIDO) AS CANTIDAD_PEDIDOS
	FROM PEDIDO AS E ) 			AS T3
;