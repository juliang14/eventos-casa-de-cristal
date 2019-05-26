create database eventos_casa_de_cristal;
        use eventos_casa_de_cristal;

create table Tipo_documento(
Id_documento 						int (10) not null,
Siglas 								varchar (10)  not null,
Nombre_tipo_documento 				varchar (30) not null,
primary key (ID_documento)
);
create table Cargo(
Id_cargo	 						int (10) not null,
Nombre_de_cago		 				varchar (30) not null,
primary key (Id_cargo)
);

create table Usuario(
Id_usuario 							int 	(10) not null,
Primer_nombre 						varchar (40) not null,
Segundo_nombre 						varchar (40) 	 null,
Primer_apellido 					varchar (40) not null,
Segundo_apellido 					varchar (40) 	 null,
Tipo_documentoId_documento			int		(10) not null,
Numero_documento					varchar (20) not null,
Edad								int 	(5)  not null,
Telefono							int 	(20) not null,
Direccion							varchar (50) not null,
Email 								varchar (50) not null unique,
RolId_rol 							int 	(15) not null,
primary key (Id_usuario)
);

create table Empleado(
Id_empleado							int 	(10) not null,
Primer_nombre 						varchar (40) not null,
Segundo_nombre 						varchar (40) 	 null,
Primer_apellido 					varchar (40) not null,
Segundo_apellido 					varchar (40) 	 null,
Tipo_documentoId_documento			varchar (10) not null,
Numero_documento					varchar (20) not null,
CargoId_cargo						int		(10) not null,
Edad								int 	(5)  not null,
Telefono							int 	(20) not null,
Direccion							varchar (50) not null,
Email 								varchar (50) not null unique,
RolId_rol 							int 	(15) not null,
primary key (Id_empleado)
);

create table Rol(
Id_rol 								int 	(10) not null,
Nombre_rol 							varchar (25) not null,
primary key (Id_rol)
);

create table Usuario_sistema(
Id_Usuariosistema					int 	(10) not null,
Nombre_usuario 						varchar (15) not null,
Clave 								varchar (20) not null,
UsuarioId_usuario 					int 	(15) 	 null,
EmpleadoId_empleado					int 	(15) 	 null,
primary key (Id_Usuariosistema)
);

create table Turno(
Id_turno 							Int 	(10) not null,
Turno 								int 	(10) not null,
fecha_de_turno						date		 not null,
Hora_de_turno						time		 not null,
primary key (Id_turno)
);

create table Empleado_turno(
EmpleadoId_empleado					Int 	(10) not null,
TurnoId_turno		 				int 	(10) not null
);

create table Pedido(
Id_pedido 							int 	(10) not null,
PaqueteId_paquete					int 	(10) not null,
UsuarioId_usuario 					int		(10) not null,
EventoId_evento 					int		(10) not null,
primary key (Id_pedido)
);

create table Paquete(
Id_paquete 							int 	(10) not null,
valor_paquete	 					int 	(10) not null,
Tipo_de_paquete						varchar (20) not null,
primary key (Id_paquete)
);

create table Inventario_paquete(
InventarioId_inventario				Int 	(10) not null,
PaqueteId_paquete	 				int 	(10) not null
);

create table Inventario(
Id_inventario 						int 	(10) not null,
Inventario		 					varchar	(50) not null,
Cantidad							int		(10) not null,
Categoria							varchar	(30) not null,
primary key (Id_inventario)
);

create table Factura(
Id_factura	 						int 	(10) not null,
Valor_sin_iva 						int 	(10) not null,
Iva									int		(10) not null,
Valor_Total							int		(10) not null,
Tipo_de_factura	 					varchar	(15) not null,
Descripcion_factura					varchar	(50) not null,
PedidoId_pedido						int		(10) not null,
primary key (Id_factura)
);

create table Evento(
Id_evento	 						int 	(10) not null,
Tipo_de_evento	 					varchar	(50) not null,
primary key (Id_evento)
);

create table Tarjeta_Credito(
Id_tarjeta_credito					int 	(10) not null,
Titular_de_la_tarjeta 				varchar (25) not null,
Numero_de_tarjeta 					int 	(15) not null,
Fecha_de_vencimiento 				date  		 not null,
CVV					 				int 	(5)	 not null,
FacturaId_factura					int 	(2)	 not null,
primary key (Id_tarjeta_Credito)
);

create table Tarjeta_Debito(
Id_tarjeta_Debito					int 	(10) not null,
Titular_de_la_tarjeta_Debito		varchar (25) not null,
Numero_de_tarjeta 					int 	(15) not null,
Fecha_de_vencimiento 				date  		 not null,
FacturaId_factura					int 	(2)	 not null,
primary key (Id_tarjeta_Debito)
);

create table Efectivo(
Id_Efectivo							INT 	(10) not null,
Numero_de_celular					int 	(15) not null,
Valor_de_recarga					int 	(7)  not null,
FacturaId_factura					int 	(2)  not null,
primary key (Id_Efectivo)
);

create table Log_de_errores(
Id_error							INT 	(10) not null,
Fecha_de_error						date	 	 not null,
Request								varchar (100)not null,
Response							varchar	(100)not null,
Descripcion_de_error				varchar	(30) not null,
primary key (Id_error)
);

create table Servidor_de_correo(
Id									INT 	(10) not null,
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
DROP PRIMARY KEY,
ADD PRIMARY KEY (`Id_empleado`,`Rolid_Rol`, `Tipo_documentoId_documento`);




ALTER TABLE usuario
ADD FOREIGN KEY (Rolid_Rol)
REFERENCES Rol(Id_rol);

ALTER TABLE usuario
ADD FOREIGN KEY (Tipo_documentoId_documento)
REFERENCES Tipo_documento(Id_documento);

ALTER TABLE usuario 
DROP PRIMARY KEY,
ADD PRIMARY KEY (`Id_usuario`,`Rolid_Rol`, `Tipo_documentoId_documento`);
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


ALTER TABLE Tarjeta_Credito
ADD FOREIGN KEY (FacturaId_factura)
REFERENCES Factura(Id_factura);

ALTER TABLE Tarjeta_Debito
ADD FOREIGN KEY (FacturaId_factura)
REFERENCES Factura(Id_factura);

ALTER TABLE Efectivo
ADD FOREIGN KEY (FacturaId_factura)
REFERENCES Factura(Id_factura);



ALTER TABLE factura
ADD FOREIGN KEY (PedidoId_pedido)
REFERENCES Pedido(Id_pedido);




ALTER TABLE Pedido
ADD FOREIGN KEY (PaqueteId_paquete)
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



