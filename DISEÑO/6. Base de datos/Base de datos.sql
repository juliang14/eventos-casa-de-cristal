
create database eventos_casa_de_cristal;
        use eventos_casa_de_cristal;

create table Tipo_documento(
Id_documento 						int 	(10) auto_increment not null,
Siglas 								varchar (10) not null,
Nombre_tipo_documento 				varchar (50) not null,
primary key (ID_documento)
);
create table Cargo(
Id_cargo	 						int 	(10) auto_increment not null,
Nombre_de_cargo		 				varchar (30) not null,
primary key (Id_cargo)
);

create table Usuario(
Id_usuario 							int 	(10) auto_increment not null,
Primer_nombre 						varchar (40) not null,
Segundo_nombre 						varchar (40) 	 null,
Primer_apellido 					varchar (40) not null,
Segundo_apellido 					varchar (40) 	 null,
Tipo_documentoId_documento			int		(10) not null,
Numero_documento					varchar (20) not null,
Edad								int 	(5)  not null,
Telefono							bigint 	(20) not null,
Direccion							varchar (50) not null,
Email 								varchar (50) not null unique,
RolId_rol 							int 	(15) not null,
primary key (Id_usuario)
);

create table Empleado(
Id_empleado							int 	(10) auto_increment not null,
Primer_nombre 						varchar (40) not null,
Segundo_nombre 						varchar (40) 	 null,
Primer_apellido 					varchar (40) not null,
Segundo_apellido 					varchar (40) 	 null,
Tipo_documentoId_documento			int		(10) not null,
Numero_documento					varchar (20) not null,
CargoId_cargo						int		(10) not null,
Edad								int 	(5)  not null,
Telefono							bigint 	(20) not null,
Direccion							varchar (50) not null,
Email 								varchar (50) not null unique,
RolId_rol 							int 	(15) not null,
primary key (Id_empleado)
);

create table Rol(
Id_rol 								int 	(10) auto_increment not null,
Nombre_rol 							varchar (25) not null,
primary key (Id_rol)
);

create table Usuario_sistema(
Id_Usuariosistema					int 	(10) auto_increment not null,
Nombre_usuario 						varchar (15) not null,
Clave 								varchar (20) not null,
Avatar                              blob        	 null,
UsuarioId_usuario 					int 	(15) 	 null,
EmpleadoId_empleado					int 	(15) 	 null,
primary key (Id_Usuariosistema)
);

create table Turno(
Id_turno 							Int 	(10) auto_increment not null,
Turno 								int 	(10) not null,
fecha_de_turno						date		 not null,
Hora_de_turno_inicio				time		 not null,
Hora_de_turno_fin					time		 not null,
primary key (Id_turno)
);

create table Empleado_turno(
EmpleadoId_empleado					Int 	(10) not null,
TurnoId_turno		 				int 	(10) not null
);

create table Pedido(
Id_pedido 							int 	(10) auto_increment not null,
Paquete_Idpaquete					int 	(10) not null,
UsuarioId_usuario 					int		(10) not null,
EventoId_evento 					int		(10) not null,
primary key (Id_pedido)
);

create table Paquete(
Id_paquete 							int 	(10) auto_increment not null,
valor_paquete	 					int 	(10) not null,
Tipo_de_paquete						varchar (20) not null,
primary key (Id_paquete)
);

create table Inventario_paquete(
InventarioId_inventario				Int 	(10) not null,
PaqueteId_paquete	 				int 	(10) not null
);

create table Inventario(
Id_inventario 						int 	(10) auto_increment not null,
Inventario		 					varchar	(50) not null,
Cantidad							int		(10) not null,
Categoria							varchar	(30) not null,
primary key (Id_inventario)
);

create table Factura(
Id_factura	 						int 	(10) auto_increment not null,
Valor_sin_iva 						int 	(10) not null,
Iva									int		(10) not null,
Valor_Total							int		(10) not null,
Tipo_de_factura	 					varchar	(15) not null,
Descripcion_factura					varchar	(50) not null,
PedidoId_pedido						int		(10) not null,
primary key (Id_factura)
);

create table Evento(
Id_evento	 						int 	(10) auto_increment not null,
Tipo_de_evento	 					varchar	(50) not null,
primary key (Id_evento)
);

create table pagos(
Id_pago								Int (4) 	 auto_increment not null,
Usuarioid_usuario					Int (4) 	 not null,
PedidoID_pedido		 				Int (4) 	 not null,
Tipos_de_pagoId_tipo_pago			Int (4) 	 not null,
primary key (Id_pago)
);


create table Tipos_de_pago(
id_tipo_pago						Int 	(4)  auto_increment not null,
nombre_pago			 				varchar (50) not null,
primary key (id_tipo_pago)
);


create table Log_de_errores(
Id_error							INT 	(10) auto_increment not null,
Fecha_de_error						date	 	 not null,
Request								varchar (200)not null,
Response							varchar	(200)not null,
Descripcion_de_error				varchar	(200) not null,
primary key (Id_error)
);

create table Servidor_de_correo(
Id									INT 	(10) auto_increment not null,
Fecha_de_registro					date	 	 not null,
Fecha_de_envio						date	 	 not null,
Enviado_de							varchar (50) not null,
Enviado_A							varchar	(50) not null,
Estado								varchar	(10) not null,
primary key (Id)
);







ALTER TABLE Empleado
ADD FOREIGN KEY (Rolid_Rol)
REFERENCES Rol(Id_rol);

ALTER TABLE Empleado
ADD FOREIGN KEY (Tipo_documentoId_documento)
REFERENCES Tipo_documento(Id_documento);

ALTER TABLE Empleado
ADD FOREIGN KEY (CargoId_cargo)
REFERENCES Cargo(Id_cargo);

ALTER TABLE Empleado 
DROP PRIMARY KEY,
ADD PRIMARY KEY (`Id_empleado`,`Tipo_documentoId_documento`);




ALTER TABLE usuario
ADD FOREIGN KEY (Rolid_Rol)
REFERENCES Rol(Id_rol);

ALTER TABLE usuario
ADD FOREIGN KEY (Tipo_documentoId_documento)
REFERENCES Tipo_documento(Id_documento);

ALTER TABLE usuario 
DROP PRIMARY KEY,
ADD PRIMARY KEY (`Id_usuario`,`Tipo_documentoId_documento`);
;



ALTER TABLE Usuario_sistema
ADD FOREIGN KEY (UsuarioId_usuario)
REFERENCES Usuario(Id_usuario);

ALTER TABLE Usuario_sistema
ADD FOREIGN KEY (EmpleadoId_empleado)
REFERENCES Empleado(Id_empleado);





ALTER TABLE Empleado_turno
ADD FOREIGN KEY (EmpleadoId_empleado)
REFERENCES Empleado(Id_empleado);

ALTER TABLE Empleado_turno
ADD FOREIGN KEY (TurnoId_turno)
REFERENCES Turno(Id_turno);

ALTER TABLE Empleado_turno
ADD PRIMARY KEY (`EmpleadoId_empleado`, `TurnoId_turno`)
;




ALTER TABLE factura
ADD FOREIGN KEY (PedidoId_pedido)
REFERENCES Pedido(Id_pedido);




ALTER TABLE Pedido
ADD FOREIGN KEY (Paquete_Idpaquete)
REFERENCES Paquete(Id_paquete);

ALTER TABLE Pedido
ADD FOREIGN KEY (UsuarioId_usuario)
REFERENCES Usuario(Id_usuario);

ALTER TABLE Pedido
ADD FOREIGN KEY (EventoId_evento)
REFERENCES Evento(Id_evento);


ALTER TABLE Inventario_paquete
ADD FOREIGN KEY (InventarioId_inventario)
REFERENCES Inventario(Id_inventario);

ALTER TABLE Inventario_paquete
ADD FOREIGN KEY (PaqueteId_paquete)
REFERENCES Paquete(Id_paquete);

ALTER TABLE Inventario_paquete
ADD PRIMARY KEY (`InventarioId_inventario`, `PaqueteId_paquete`)
;


ALTER TABLE pagos
ADD FOREIGN KEY (Usuarioid_usuario)
REFERENCES Usuario(id_usuario);

ALTER TABLE pagos
ADD FOREIGN KEY (Tipos_de_pagoId_tipo_pago)
REFERENCES Tipos_de_pago(Id_tipo_pago);

ALTER TABLE pagos
DROP primary KEY,
ADD PRIMARY KEY (`Id_pago`,`Usuarioid_usuario`, `Tipos_de_pagoId_tipo_pago`)
;

/*------------------   CREACION DE TRIGGERS PARA LOG DE TABLAS -------------------------------------------------*/

/*    
new. = nuevo valor
old. = valor anterior

 Eliminar trigger = drop trigger USUARIO_AFTER_DELETE;

*/

create table USUARIO_LOG(
Id_usuario_log 						int 	(10) auto_increment not null,
fecha_registro						datetime	 not null,
usuario_modifico					varchar (15) not null, 
tipo_registro						varchar (20) not null,
Id_usuario	 						int 	(10) not null,
Primer_nombre 						varchar (40) not null,
Segundo_nombre 						varchar (40) 	 null,
Primer_apellido 					varchar (40) not null,
Segundo_apellido 					varchar (40) 	 null,
Tipo_documentoId_documento			int		(10) not null,
Numero_documento					varchar (20) not null,
Edad								int 	(5)  not null,
Telefono							bigint 	(20) not null,
Direccion							varchar (50) not null,
Email 								varchar (50) not null ,
RolId_rol 							int 	(15) not null,
primary key (Id_usuario_log)
);

-- crea registro despues de realizar insert en la tabla
drop trigger if exists USUARIO_AFTER_INSERT; create trigger USUARIO_AFTER_INSERT AFTER INSERT ON USUARIO FOR EACH ROW
INSERT INTO USUARIO_LOG (Id_usuario_log, fecha_registro, usuario_modifico, tipo_registro, Id_usuario, Primer_nombre, Segundo_nombre, Primer_apellido, Segundo_apellido,
Tipo_documentoId_documento, Numero_documento, Edad, Telefono, Direccion, Email, RolId_rol)
values(null, now(), current_user(), 'INSERTADO', new.Id_usuario, new.Primer_nombre, new.Segundo_nombre, new.Primer_apellido, new.Segundo_apellido,
new.Tipo_documentoId_documento, new.Numero_documento, new.Edad, new.Telefono, new.Direccion, new.Email, new.RolId_rol)
;

-- crea registro despues de realizar actualizaciones en la tabla
drop trigger if exists USUARIO_BEFORE_UPDATE; create trigger USUARIO_BEFORE_UPDATE BEFORE UPDATE ON USUARIO FOR EACH ROW
INSERT INTO USUARIO_LOG (Id_usuario_log, fecha_registro, usuario_modifico, tipo_registro, Id_usuario, Primer_nombre, Segundo_nombre, Primer_apellido, Segundo_apellido,
Tipo_documentoId_documento, Numero_documento, Edad, Telefono, Direccion, Email, RolId_rol)
values(null, now(), current_user(), 'ACTUALIZADO', new.Id_usuario, new.Primer_nombre, new.Segundo_nombre, new.Primer_apellido, new.Segundo_apellido,
new.Tipo_documentoId_documento, new.Numero_documento, new.Edad, new.Telefono, new.Direccion, new.Email, new.RolId_rol)
;

-- crea registro despues de eliminar datos en la tabla
drop trigger if exists USUARIO_AFTER_DELETE;create trigger USUARIO_AFTER_DELETE AFTER DELETE ON USUARIO FOR EACH ROW
INSERT INTO USUARIO_LOG (Id_usuario_log, fecha_registro, usuario_modifico, tipo_registro, Id_usuario, Primer_nombre, Segundo_nombre, Primer_apellido, Segundo_apellido,
Tipo_documentoId_documento, Numero_documento, Edad, Telefono, Direccion, Email, RolId_rol)
values(null, now(), current_user(), 'ELIMINADO', old.Id_usuario, old.Primer_nombre, old.Segundo_nombre, old.Primer_apellido, old.Segundo_apellido,
old.Tipo_documentoId_documento, old.Numero_documento, old.Edad, old.Telefono, old.Direccion, old.Email, old.RolId_rol)
;

/*    PROCEDIMIENTOS ALMACENADOS */


create procedure ver_usuarios()
select * from USUARIO;


create procedure crear_usuario( Primer_nombre varchar (40), Segundo_nombre varchar (40), Primer_apellido varchar (40), Segundo_apellido varchar (40),
Tipo_documentoId_documento int(10), Numero_documento varchar (20), Edad int (5), Telefono bigint (20), Direccion varchar (50), Email  varchar (50), RolId_rol  int 	(15))
insert into Usuario
(Id_usuario, Primer_nombre, Segundo_nombre, Primer_apellido, Segundo_apellido, Tipo_documentoId_documento, Numero_documento, Edad, Telefono, Direccion, Email, RolId_rol) 
values
(null, Primer_nombre, Segundo_nombre, Primer_apellido, Segundo_apellido, Tipo_documentoId_documento, Numero_documento, Edad, Telefono, Direccion, Email, RolId_rol)
;

create procedure actualizar_cargo(codigo int, nombre varchar(30))
update cargo set nombre_de_Cargo=nombre where id_cargo= codigo;



DELIMITER //
DROP PROCEDURE if exists calcular_Edad;CREATE PROCEDURE calcular_Edad(p_azo_nacimiento int)
	BEGIN 	-- inicia bloque de ejecucion
		DECLARE v_azo_actual 	int default 2020;
        DECLARE v_edad 			int ;
        
        set v_edad = v_azo_actual - p_azo_nacimiento;
        
        select v_edad;
    END //	-- termina bloque de ejecucion
 DELIMITER ;


-- CREAR TRIGGER DE CONTROL ---
/*
DELIMITER //

DROP TRIGGER if exists CONTROL_PRECIO_BU;CREATE TRIGGER CONTROL_PRECIO_BU BEFORE UPDATE ON paquete FOR EACH ROW
	BEGIN
		IF(new.valor_paquete < 0) THEN
			SET new.valor_paquete = OLD.valor_paquete;
		ELSEIF(new.valor_paquete > 200000) THEN
			SET new.valor_paquete = OLD.valor_paquete;
		END IF;
    END //
DELIMITER ;
*/