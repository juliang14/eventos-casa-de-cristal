use eventos_casa_de_cristal;

-- TABLAS --------------------------------------------------------------------------------------------------------------------

SELECT * FROM CARGO;
SELECT * FROM EMPLEADO;
SELECT * FROM EMPLEADO_TURNO;
SELECT * FROM EVENTO;
SELECT * FROM FACTURA;
SELECT * FROM INVENTARIO;
SELECT * FROM INVENTARIO_PAQUETE;
SELECT * FROM LOG_DE_ERRORES;
SELECT * FROM PAGOS;
SELECT * FROM PAQUETE;
SELECT * FROM PEDIDO;
SELECT * FROM ROL;
select * from SERVIDOR_DE_CORREO;
select * from TIPO_DOCUMENTO;
select * from TIPO__DE_PAGO;
SELECT * FROM TURNO;
select * from USUARIO;
select * from USUARIO_LOG;
select * from USUARIO_SISTEMA;

-- VISTAS ----------------------------------------------------------------------------------------------------------------------
select * from VW_EVENTO_MAS_VENDIDO;
select * from VW_EVENTO_MENOS_VENDIDO;
select * from VW_PAGO_PREFERIDO;
select * from VW_PRODUCTOS_VENDIDOS;
select * from VW_REPORTE_VENTAS;
SELECT * FROM VW_VER_USUARIOS;

-- PROCEDIMIENTOS -------------------------------------------------------------------------------------------------------------
CALL PR_ACTUALIZAR_CARGO(4,'Programador'); -- < Actualiza los cargos
CALL PR_VER_USUARIOS(); -- <-- Lista todos los usuarios
CALL PR_CREAR_USUARIO( 'KAROL', '', 'gomez', 'avila', 1, 1015452884, 25, 3108023148, 'carrera 94', 'KAROL887@misena.edu.co');  -- <--crear usuarios desde aqui
CALL PR_ELIMINAR_USUARIO(32); -- Elimina el registro del usuario
CALL PR_ACTUALIZAR_USUARIO( 1,'KAROL', '', 'gomez', 'avila', 1, 1015452884, 25, 3108023148, 'carrera 94', 'KAROL887@misena.edu.co');  -- <--crear usuarios desde aqui

-- FUNCIONES ------------------------------------------------------------------------------------------------------------------
SELECT FN_CALCULAR_EDAD(1995) AS EDAD; -- <-- calcula edad
DELETE FROM USUARIO WHERE id_usuario = 32;

-- --------------------------------------------------------------------------------------------------------------------

-- DESCRIBE TABLAS --------------------------------------------------------------------------------------------------------------------

DESCRIBE CARGO;
DESCRIBE EMPLEADO;
DESCRIBE EMPLEADO_TURNO;
DESCRIBE EVENTO;
DESCRIBE FACTURA;
DESCRIBE INVENTARIO;
DESCRIBE INVENTARIO_PAQUETE;
DESCRIBE LOG_DE_ERRORES;
DESCRIBE PAGOS;
DESCRIBE PAQUETE;
DESCRIBE PEDIDO;
DESCRIBE ROL;
DESCRIBE SERVIDOR_DE_CORREO;
DESCRIBE TIPO_DOCUMENTO;
DESCRIBE TIPO__DE_PAGO;
DESCRIBE TURNO;
DESCRIBE USUARIO;
DESCRIBE USUARIO_LOG;
DESCRIBE USUARIO_SISTEMA;




-- OTROS ---
select A.id_usuario,
	   CONCAT(A.Primer_nombre, ' ',A.Segundo_nombre, ' ',A.Primer_apellido, ' ',A.Segundo_apellido) NOMBRE,
       CONCAT(B.Siglas,'-',A.numero_documento) DOCUMENTO,
       A.edad,
       A.email,
       D.Nombre_rol ROL,
       C.NOMBRE_USUARIO USUARIO,
       C.CLAVE
from 		usuario A
inner join 	tipo_documento B		ON A.Tipo_documentoId_documento = B.id_documento
inner join 	usuario_sistema C		ON C.USUARIOID_USUARIO = A.id_usuario
inner join 	ROL D					ON D.id_rol = A.rolId_rol
where id_usuario= 1 
;



select A.id_EMPLEADO,
	   CONCAT(A.Primer_nombre, ' ',A.Segundo_nombre, ' ',A.Primer_apellido, ' ',A.Segundo_apellido) NOMBRE,
       CONCAT(B.Siglas,'-',A.numero_documento) DOCUMENTO,
       A.edad,
       A.email,
       D.Nombre_rol ROL,
       C.NOMBRE_USUARIO USUARIO,
       C.CLAVE
from 		EMPLEADO A
inner join 	tipo_documento B		ON A.Tipo_documentoId_documento = B.id_documento
inner join 	usuario_sistema C		ON C.EMPLEADOID_EMPLEADO = A.id_EMPLEADO
inner join 	ROL D					ON D.id_rol = A.rolId_rol
where id_EMPLEADO= 1 
;



SELECT 	A.ID_USUARIO
	,A.PRIMER_NOMBRE
		,CONCAT(A.PRIMER_NOMBRE, ' ',A.SEGUNDO_NOMBRE) 		AS NOMBRES
		,CONCAT(A.PRIMER_APELLIDO, ' ',A.SEGUNDO_APELLIDO) 	AS APELLIDOS
		,CONCAT(B.SIGLAS,'-',A.NUMERO_DOCUMENTO) 			AS DOCUMENTO
		,A.EDAD
        ,A.TELEFONO
		,A.EMAIL
		,D.NOMBRE_ROL 										AS ROL
		,C.NOMBRE_USUARIO 									AS USUARIO_SISTEMA
		,C.CLAVE
FROM 		USUARIO 		AS A
INNER JOIN 	TIPO_DOCUMENTO 	AS B		ON A.Tipo_documentoId_documento = B.id_documento
INNER JOIN 	USUARIO_SISTEMA AS C		ON C.USUARIOID_USUARIO 			= A.id_usuario
INNER JOIN 	ROL 			AS D		ON D.id_rol 					= A.rolId_rol
WHERE C.ESTADO = 'ACTIVO'
AND ID_USUARIO=23
;