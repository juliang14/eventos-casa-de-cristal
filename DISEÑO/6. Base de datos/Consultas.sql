use eventos_casa_de_cristal;
select * from USUARIO;
select * from TIPO_DOCUMENTO;
select * from USUARIO_SISTEMA;
SELECT * FROM ROL;
SELECT * FROM CARGO;
SELECT * FROM EMPLEADO;
SELECT * FROM PAQUETE;
SELECT * FROM TURNO;
select * from USUARIO_LOG;

update USUARIO set edad =99 where id_usuario='1';
delete from USUARIO where id_usuario='1';

call ver_usuarios();
call actualizar_cargo(4,'Programador');
CALL calcular_Edad(1995);
CALL crear_usuario( Primer_nombre, Segundo_nombre, Primer_apellido, Segundo_apellido,
Tipo_documentoId_documento, Numero_documento, Edad, Telefono, Direccion, Email, RolId_rol);

update PAQUETE set valor_paquete =-150 where id_paquete=3;

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

