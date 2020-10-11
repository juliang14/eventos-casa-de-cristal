DELIMITER &
CREATE PROCEDURE PR_GENERAR_REPORTE( P_TIPO_REPORTE VARCHAR (60), P_FECHA_INICIO DATE, P_FECHA_FIN DATE)

BEGIN
	-- Declarar variables
    DECLARE V_TIPO_REPORTE 	VARCHAR (60) DEFAULT UPPER(P_TIPO_REPORTE);
    
	IF P_TIPO_REPORTE ='EMPLEADOS' THEN
   
		SELECT 	A.ID_EMPLEADO
				,CONCAT(A.PRIMER_NOMBRE, ' ',A.SEGUNDO_NOMBRE) 		AS NOMBRES
				,CONCAT(A.PRIMER_APELLIDO, ' ',A.SEGUNDO_APELLIDO) 	AS APELLIDOS
				,CONCAT(B.SIGLAS,'-',A.NUMERO_DOCUMENTO) 			AS DOCUMENTO
				,A.EDAD
				,A.TELEFONO
				,A.EMAIL
				,D.NOMBRE_ROL 										AS ROL
				,E.NOMBRE_DE_CARGO									AS CARGO
				,C.NOMBRE_USUARIO 									AS USUARIO_SISTEMA
				,C.CLAVE
                ,P_FECHA_INICIO
                ,P_FECHA_FIN
		FROM 		EMPLEADO 		AS A
		INNER JOIN 	TIPO_DOCUMENTO 	AS B		ON A.Tipo_documentoId_documento = B.id_documento
		INNER JOIN 	USUARIO_SISTEMA AS C		ON C.EMPLEADOID_EMPLEADO		= A.ID_EMPLEADO
		INNER JOIN 	ROL 			AS D		ON D.id_rol 					= A.rolId_rol
		INNER JOIN	CARGO			AS E		ON A.CARGOID_CARGO				= E.ID_CARGO
		WHERE C.ESTADO = 'ACTIVO'
		;
	
    ELSEIF P_TIPO_REPORTE ='USUARIOS' THEN
    
		SELECT 	A.ID_USUARIO
				,CONCAT(A.PRIMER_NOMBRE, ' ',A.SEGUNDO_NOMBRE) 		AS NOMBRES
				,CONCAT(A.PRIMER_APELLIDO, ' ',A.SEGUNDO_APELLIDO) 	AS APELLIDOS
				,CONCAT(B.SIGLAS,'-',A.NUMERO_DOCUMENTO) 			AS DOCUMENTO
				,A.EDAD
				,A.TELEFONO
				,A.EMAIL
				,D.NOMBRE_ROL 										AS ROL
				,C.NOMBRE_USUARIO 									AS USUARIO_SISTEMA
				,C.CLAVE
                ,P_FECHA_INICIO
                ,P_FECHA_FIN
		FROM 		USUARIO 		AS A
		INNER JOIN 	TIPO_DOCUMENTO 	AS B		ON A.Tipo_documentoId_documento = B.id_documento
		INNER JOIN 	USUARIO_SISTEMA AS C		ON C.USUARIOID_USUARIO 			= A.id_usuario
		INNER JOIN 	ROL 			AS D		ON D.id_rol 					= A.rolId_rol
		WHERE C.ESTADO = 'ACTIVO'
		;
        
	ELSEIF P_TIPO_REPORTE ='PEDIDOS' THEN
    
		SELECT 	 A.ID_PEDIDO
				,A.FECHA_PEDIDO
				,CONCAT(B.PRIMER_NOMBRE,' ',B.SEGUNDO_NOMBRE)			AS NOMBRES
				,CONCAT(B.PRIMER_APELLIDO,' ',B.SEGUNDO_APELLIDO)		AS APELLIDOS
				,CONCAT(E.SIGLAS,' - ',B.NUMERO_DOCUMENTO)			    AS DOCUMENTO
				,C.ID_PAQUETE
				,D.TIPO_DE_EVENTO										AS EVENTO
				,C.TIPO_DE_PAQUETE										AS PAQUETE
				,C.VALOR_PAQUETE
				,C.VALOR_IVA											AS IVA
				,C.VALOR_TOTAL
				,F.ESTADO
				,A.FECHA_INICIO_EVENTO
				,A.FECHA_FIN_EVENTO
				,CIUDAD_EVENTO
				,BARRIO_EVENTO
				,DIRECCION_EVENTO
				,P_FECHA_INICIO
                ,P_FECHA_FIN
			FROM PEDIDO					AS A
			INNER JOIN USUARIO			AS B	ON A.USUARIOID_USUARIO 			= B.ID_USUARIO
			INNER JOIN PAQUETE			AS C	ON A.PAQUETE_IDPAQUETE 			= C.ID_PAQUETE
			INNER JOIN EVENTO			AS D	ON C.EVENTOID_EVENTO 			= D.ID_EVENTO
			INNER JOIN TIPO_DOCUMENTO	AS E	ON B.TIPO_DOCUMENTOID_DOCUMENTO	= E.ID_DOCUMENTO
			INNER JOIN ESTADO_PEDIDO	AS F	ON A.ESTADOPEDIDOID_ESTADOPEDIDO= F.ID_ESTADOPEDIDO
			ORDER BY ID_PEDIDO
			;
    
	ELSE
	
		SELECT 'REPORTE NO CONFIGURADO';
    
	END IF;
    
END &
