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

-- FUNCIONES ------------------------------------------------------------------------------------------------------------------
SELECT FN_CALCULAR_EDAD(1995) AS EDAD; -- <-- calcula edad



-- --------------------------------------------------------------------------------------------------------------------
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

