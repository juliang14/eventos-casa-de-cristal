insert into Tipo_documento
(Id_documento, Siglas, Nombre_tipo_documento)
values
(1, 'CC',  'Cedula_de_ciudadania'),
(2, 'CE',  'Cedula_de_extranjeria'),
(3, 'NIT', 'Numero_de_Identificación_Tributaria');


-- ---------------------------------------
insert into Cargo
(Id_cargo, Nombre_de_cargo)
values
(1, 'Mesero'),
(2, 'Cocinero'),
(3, 'Organizador'),
(4, 'Dj'),
(5, 'Animador'),
(6, 'Fotografos'),
(7, 'Director_de_Marketing'),
(8, 'Presidente');

-- ---------------------------------------
insert into Rol
(Id_rol, Nombre_rol)
values 
(1, 'Cliente'),
(2, 'Empleado'),
(3, 'Administrador');


-- ---------------------------------------

insert into Usuario
(Id_usuario, Primer_nombre, Segundo_nombre, Primer_apellido, Segundo_apellido, Tipo_documentoId_documento, Numero_documento, Edad, Telefono, Direccion, Email, RolId_rol)
values
(1,  'Leonel',	'Alexander',	'Vargas',	'Rodriguez',	1,	'1256896558',	22,	3157845689, 'Carrera 15 #12-78',		'leonelvargas@hotmail.com', 	1),
(2,  'Ana', 	'Milena', 		'Forero', 	'Rodriguez', 	1, 	'1235698685', 	35, 1023856989, 'Calle 56 #56-8', 			'mileforero26@gmail.com', 		1),
(3,  'Bryan', 	'Steven', 		'Ladino', 	'Hernandez', 	1, 	'156897556', 	40, 3198745289, 'Carrera 15 #56-7', 		'bryanstevenladino@gmai.com', 	1),
(4,  'Doris', 	'Johanna', 		'Ramirez', 	'Ramirez', 		1, 	'1126589331', 	25, 3125698745, 'Avenida 39 #22-8', 		'dorisjforero@hotmail.com', 	1),
(5,  'Angie', 	'Tatiana', 		'Gomez', 	'Agudelo', 		1, 	'102356899', 	38, 3125689748, 'Carrera 24 #25-3', 		'gomezangie12@hotmail.com', 	1),
(6,  'Brenda', 	'Dayana', 		'Lombana', 	'Murcia', 		1, 	'102356889', 	32, 3102589663, 'Calle 45 #56-9', 			'brenlombana25@gmail.com', 		1),
(7,  'Claudia', 'Liliana', 		'Lopez', 	'Perez', 		1, 	'1256369556', 	22, 3215896259, 'Carrera 25 #25-9', 		'claudial@gmail.com', 			1),
(8,  'Angie', 	'Lorena', 		'Perdomo', 	'Zapata', 		1, 	'1256899665', 	46, 3458965487, 'Calle 25 # 25-6', 			'angie265@hotmail.com', 		1),
(9,  'Cristian','Andres', 		'Rubiano', 	'Ruiz', 		1, 	'1236589778', 	40, 3215896258, 'Calle 40 #25-5', 			'cristianandre25@hotmail.com', 	1),
(10, 'Johan', 	'Camilo', 		'Sanchez', 	'Avila', 		1, 	'1023565889', 	26, 3256985689, 'Avenida 39 # 25-8', 		'cristian367@hotmail.com', 		1),
(11, 'Felipe', 	'Armando', 		'Ruiz', 	'Fiquitiva', 	1, 	'1025689556', 	36, 3102568994, 'Carrera 25 #25-6', 		'feliperuiz1234567@gmail.com', 	1),
(12, 'Sandra', 	'Patricia', 	'Rosa', 	'Botero', 		1, 	'1013684005', 	30, 3105895214, 'Avenida 56 # 23-6', 		'sandraprosa@hotmail.com', 		1),
(13, 'Jhon', 	'Anderson', 	'Molina', 	'Gomez', 		1, 	'1232457872', 	45, 3125689586, 'Carrera 23 #23-6', 		'jhon@gmail.com', 				1),
(14, 'Lizeth', 	'Natalia', 		'Ramos', 	'Avila', 		1, 	'1023665899', 	40, 3112589632, 'Calle 72 #25-6', 			'Lizeth@gmail.com', 			1),
(15, 'Pablo', 	'Andres', 		'Rodriguez','Gomez', 		1, 	'1023669888', 	20, 3108965269, 'Calle 56 #25-6', 			'Pablo@gmail.com', 				1),
(16, 'Pedro', 	'Ignacio', 		'Calvo', 	'Churque', 		1, 	'1036598226', 	36, 3125698569, 'Carrera 25 #12-5', 		'Pedro@gmail.com', 				1),
(17, 'Mauricio','Brandon', 		'Churque', 	'Rodruigez', 	1, 	'1032569885', 	25, 3145286258, 'Carrera 23 #26-8', 		'Mauricio1@gmail.com', 			1),
(18, 'Oscar', 	'Armando', 		'Gomez', 	'Ramirez', 		1, 	'1023668995', 	19, 3125896259, 'Calle 57 #56-89', 			'Oscar@gmail.com', 				1),
(19, 'Liz', 	'Amanda', 		'Hernandez','Ramos', 		1, 	'1023698885', 	33, 3124576891, 'Carrera 26 #26-2', 		'Liz@gmail.com', 				1),
(20, 'Sandra', 	'Janeth', 		'Calderon', 'Ruiz', 		1, 	'1234568709', 	45, 3152368956, 'Avenida 39 #25-9', 		'Sandra@gmail.com',				1),
(21, 'Edison', 	'Alexander', 	'Hernandez','Cordoba', 		1, 	'1324567831', 	28, 3105896552, 'Carrera 26 #25-22', 		'Edison@gmail.com',				1),
(22, 'Giovany', 'Andres', 		'Garcia', 	'Florez', 		1, 	'1023698559', 	28, 3125689256, 'Carrera 18f #47a58', 		'giovany31@hotmail.com', 		1),
(23, 'Stefany',  '', 			'Lopez', 	'Castro', 		1, 	'1235697784', 	52, 3154785263, 'Avenida 39 #12h-9', 		'stefalopez23@gmail.com', 		1),
(24, 'Aylin', 	'Camila', 		'Novoa', 	'Calvo', 		1, 	'1056236995', 	46, 3165896242, 'Carrera 17g bis #74a28', 	'aylin2324@hotmail.com', 		1);

-- ---------------------------------------
insert into Empleado
(Id_empleado, Primer_nombre, Segundo_nombre, Primer_apellido, Segundo_apellido, Tipo_documentoId_documento, Numero_documento, CargoId_cargo, Edad, Telefono, Direccion, Email, RolId_rol)
values
(1,   'Maria', 	  'Mireya', 'Acevedo', 'Manríquez', 1, '1354689712', 1, 22, 3157845689, 'Carrera 15 #12-78',	'AcevedoMM@hotmail.com', 		2),
(2,   'Enrique',   '',    'Acevedo', 'Mejia',     1, '1512365874', 1, 35, 1023856989, 'Calle 56 #56-8', 		'Mejia14@gmail.com', 			2),
(3,   'Carolina',  '',    'Acevedo', 'Ruiz',      1, '1265328496', 2, 40, 3198745289, 'Carrera 15 #56-7', 	'CarolinaRui@gmai.com', 		2),
(4,   'Tomas',    'Jose',   'Acosta',  'Canto',     1, '745368791' , 8, 25, 3125698745, 'Avenida 39 #22-8', 	'tomas59jose@hotmail.com', 		2),
(5,   'Celina',    '',    'Acosta',  'Gomez',     1, '102356833' , 3, 38, 312568974, 	'Carrera 24 #25-3', 	'celina1111@hotmail.com', 		2),
(6,   'Irma',      '',    'Aguilar', 'Dorantes',  1, '1027520041', 3, 32, 3102589663, 'Calle 45 #56-9', 		'irma788@gmail.com', 			2),
(7,   'Maria',    'celia',  'Aguilar', 'Lemus',     1, '1253458963', 4, 22, 3215896259, 'Carrera 25 #25-9', 	'maria12@gmail.com', 			2),
(8,   'Marcela',   '',    'Aguilar', 'Loranca',   1, '1065320855', 4, 46, 34589654878,'Calle 25 # 25-6', 		'marcelaaguil89@hotmail.com',	2),
(9,   'Pascual',  'Gerardo','Alonso',  'Ibarra',    1, '847982549' , 2, 40, 3215896258, 'Calle 40 #25-5', 		'pascualger@hotmail.com', 		2),
(10,  'Oscar',     '',    'Alvarado','Mendoza',   1, '1352087496', 3, 26, 3256985689, 'Avenida 39 # 25-8', 	'mendoza56@hotmail.com', 		2),
(11,  'Felipe',    '',    'Alvarez', 'Medellin',  1, '1166335508', 5, 36, 3102568994, 'Carrera 25 #25-6', 	'felipe7@gmail.com', 			2),
(12,  'Oscar',     '',    'Alvarado','Mendoza',   1, '1299852490', 7, 30, 3105895214, 'Avenida 56 # 23-6', 	'osalvarado65@hotmail.com', 	2),
(13,  'Gustavo',   '',    'Aquiles', 'Caigo',     1, '1015879623', 6, 45, 3125689586, 'Carrera 23 #23-6', 	'gustavo26@gmail.com', 			3),
(14,  'Socorro',   '',    'Arias',   'Rodríguez', 1, '1004876948', 1, 40, 3112589632, 'Calle 72 #25-6', 		'socorroar12@gmail.com', 		3);


-- ---------------------------------------
insert into Usuario_sistema
(Id_Usuariosistema, Nombre_usuario, Clave, Avatar, Estado, UsuarioId_usuario, EmpleadoId_empleado)
values
(01,  'Leonel2019', 		'Leonel2019', 		null, 'ACTIVO', 1, 	null),
(02,  'Mile1256', 			'Mile1256', 		null, 'ACTIVO', 2, 	null),
(03,  'Ladino1548', 		'Ladino1548', 		null, 'ACTIVO', 3, 	null),
(04,  'dorijforerorz', 		'dorijforerorz', 	null, 'ACTIVO', 4, 	null),
(05,  'g15269', 			'g15269', 			null, 'ACTIVO', 5, 	null),
(06,  '6325lombana', 		'6325lombana', 		null, 'ACTIVO', 6, 	null),
(07,  'lopezclaudia789', 	'lopezclaudia789',	null, 'ACTIVO', 7, 	null),
(08,  'angie265', 			'angie265', 		null, 'ACTIVO', 8, 	null),                                   
(09,  'cristianandre25',	'cristianandre25', 	null, 'ACTIVO', 9, 	null),
(010, 'camilo14', 			'camilo14', 		null, 'ACTIVO', 10, 	null),
(011, 'felipe12', 			'felipe12', 		null, 'ACTIVO', 11, 	null),
(012, 'sandrap23', 			'sandrap23', 		null, 'ACTIVO', 12, 	null),
(013, 'jhon12345', 			'jhon12345', 		null, 'ACTIVO', 13, 	null),
(014, 'Lizeth12345', 		'Lizeth12345', 		null, 'ACTIVO', 14, 	null),
(015, 'Pablo12345', 		'Pablo12345', 		null, 'ACTIVO', 15, 	NULL),
(016, 'Pedro12345', 		'Pedro12345', 		null, 'ACTIVO', 16, 	NULL),
(017, 'Mauricio12345', 		'Mauricio12345', 	null, 'ACTIVO', 17, 	NULL),
(018, 'Oscar15', 			'Oscar15', 			null, 'ACTIVO', 18, 	NULL),
(019, 'Liz12345', 			'Liz12345', 		null, 'ACTIVO', 19, 	NULL),
(020, 'Sandra12345', 		'Sandra12345', 		null, 'ACTIVO', 20, 	NULL),
(021, 'Edison25', 			'Edison25', 		null, 'ACTIVO', 21, 	NULL),
(022, 'gagarcia31', 		'gagarcia31', 		null, 'ACTIVO', 22, 	NULL),
(023, 'slopez2', 			'slopez2', 			null, 'ACTIVO', 23, 	NULL),
(024, 'aylin2324', 			'aylin2324', 		null, 'ACTIVO', 24,	NULL),
(025, 'AcevedoMM', 			'AcevedoMM', 		null, 'ACTIVO', null, 1),
(026, 'Mejia14', 			'Mejia14', 			null, 'ACTIVO', null, 2),
(027, 'CarolinaRui', 		'CarolinaRui', 		null, 'ACTIVO', null, 3),
(028, 'tomas59jose', 		'tomas59jose', 		null, 'ACTIVO', null, 4),
(029, 'celina1111', 		'celina1111', 		null, 'ACTIVO', null, 5),
(030, 'irma788', 			'irma788', 			null, 'ACTIVO', null, 6),
(031, 'maria12', 			'maria12', 			null, 'ACTIVO', null, 7),
(032, 'marcelaaguil89', 	'marcelaaguil89', 	null, 'ACTIVO', null, 8),
(033, 'mendoza56', 			'mendoza56', 		null, 'ACTIVO', null, 9),
(034, 'felipe7', 			'felipe7', 			null, 'ACTIVO', null, 10),
(035, 'pascualger', 		'pascualger', 		null, 'ACTIVO', null, 11),
(036, 'osalvarado65', 		'osalvarado65', 	null, 'ACTIVO', null, 12),
(037, 'gustavo26', 			'gustavo26', 		null, 'ACTIVO', null, 13),
(038, 'socorroar12', 		'socorroar12', 		null, 'ACTIVO', null, 14);


-- ---------------------------------------
insert into Turno(Id_turno, Turno, fecha_de_turno, Hora_de_turno_inicio, Hora_de_turno_fin)
values 
(01,1,	'2025-05-20',	'06:00:00',	'14:00:00'),
(02,2,	'2025-05-20',	'14:00:00',	'22:00:00'),
(03,3,	'2025-05-20',	'22:00:00',	'06:00:00');
-- ---------------------------------------
insert into Empleado_turno( EmpleadoId_empleado, TurnoId_turno)
values 
(1,		01),
(2,		02),
(3,		03),
(4,		01),
(5,		02),
(6,		03),
(7,		01),
(8,		02),
(9,		03),
(10,	01),
(11,	02),
(12,	03),
(13,	01),
(14,	02)
;
-- -------------------------------------------------------------------------
insert into Evento(Id_evento, Tipo_de_evento)
values
(01,	'Matrimonio'),
(02,	'Bautizo'),
(03,	'15 Años'),
(04,	'Despedida de soltero'),
(05,	'Primeras comuniones'),
(06,	'Grados');
-- -------------------------------------------------------------------------

insert into Paquete(Id_paquete, valor_paquete, Tipo_de_paquete)
values
(1,	6000000,	'matrimonio'),
(2,	3000000,	'despedida_de_soltero' ),
(3,	1000000,	'Bautizo'),
(4,	2000000,	'primera_comunion'),
(5,	4000000,	'15 Años'),
(6,	3000000,	'Grados');
	   
-- -------------------------------------------------------------------------	   
insert into Inventario(Id_inventario, Inventario, Cantidad, Categoria)
values 
(6,	'centros_de_mesa',	50,		'utileria'),
(5,	'platos',			200,	'utileria'),
(4,	'cubiertas',		600,	'utileria'),
(3,	'mesas',			50,		'utileria'),
(2,	'manteles',			100,	'utileria'),
(1,	'ollas',			20,		'utileria'),
(7,	'Equipos_sonido',	4,		'utileria');

-- -------------------------------------------------------------------------
insert into Inventario_paquete(InventarioId_inventario, PaqueteId_paquete)
values  
(1,	1),
(1,	2),
(1,	3),
(1,	4),
(1,	5),
(2,	1),
(2,	2),
(2,	3),
(2,	4),
(2,	5),
(3,	1),
(3,	2),
(3,	3),
(3,	4),
(3,	5),
(4,	1),
(4,	2),
(4,	3),
(4,	4),
(4,	5),
(5,	1),
(5,	2),
(5,	3),
(5,	4),
(5,	5),
(6,	1),
(6,	2),
(6,	3),
(6,	4),
(6,	5),
(7,	1),
(7,	2),
(7,	3),
(7,	4),
(7,	5);

-- -------------------------------------------------------------------------
insert into Pedido(Id_pedido, Paquete_Idpaquete, UsuarioId_usuario, EventoId_evento)
values 
(1,		6,	6,	01),
(2,		5,	5,	02),
(3,		4,	4,	03),
(4,		3,	3,	04),
(5,		2,	2,	05),
(6,		1,	1,	06),
(7,		2,	6,	01),
(8,		3,	7,	02),
(9,		4,	8,	03),
(10,	5,	9,	04),
(11,	6,	10,	05),
(12,	5,	11,	06),
(13,	4,	12,	01),
(14,	3,	13,	02),
(15,	2,	14,	03),
(16,	1,	15,	04);

-- -------------------------------------------------------------------------
insert into Factura(Id_factura, Valor_sin_iva, Iva, Valor_Total, Tipo_de_factura, Descripcion_factura, PedidoId_pedido)
values 
(1,		3000000,	3000000/0.19,	315789,	'fisica',		'evento_Grado',					1),
(2,		4000000,	4000000/0.19,	421052,	'electronica',	'evento_15_años',				2),
(3,		2000000,	2000000/0.19,	210526,	'fisica',		'evento_primera_comunion',		3),
(4,		1000000,	1000000/0.19,	15263,	'electronica',	'evento_Bautizo',				4),
(5,		3000000,	3000000/0.19,	315789,	'fisica',		'evento_despedida_de_soltero',	6),
(6,		6000000,	6000000/0.19,	631578,	'electronica',	'evento_matrimonio',			7),
(7,		3000000,	3000000/0.19,	315789,	'fisica',		'evento_Grado',					8),
(8,		4000000,	4000000/0.19,	421052,	'electronica',	'evento_15_años',				9),
(9,		6000000,	6000000/0.19,	631578,	'electronica',	'evento_matrimonio',			10),
(10,	1000000,	1000000/0.19,	15263,	'electronica',	'evento_Bautizo',				11),
(11,	1000000,	1000000/0.19,	15263,	'electronica',	'evento_Bautizo',				12),
(12,	1000000,	1000000/0.19,	15263,	'electronica',	'evento_Bautizo',				13),
(13,	4000000,	4000000/0.19,	421052,	'electronica',	'evento_15_años',				14),
(14,	3000000,	3000000/0.19,	315789,	'fisica',		'evento_Grado',					15),
(15,	6000000,	6000000/0.19,	631578,	'electronica',	'evento_matrimonio',			16);

-- -------------------------------------------------------------------------

insert into Log_de_errores(Id_error, Fecha_de_error, Request, Response, Descripcion_de_error)
values
(1,  '2020-06-06', 'telefono:3198745289, nombre:Leonel Alexander Vargas Rodriguez, pedido:1', 	'Error al realizar la transacción', 'error al realizar el pago'),
(2,  '2020-06-07', 'telefono:3198745290, nombre:Leonel Pablo Andres Rodriguez Gomez, pedido:2', 'time out', 'error al realizar el pago'),
(3,  '2020-06-08', 'telefono:3198745291, nombre:Ana Milena Forero Rodriguez, pedido:3', 		'Error al realizar la transacción', 'error al realizar el pago'),
(4,  '2020-06-09', 'telefono:3198745292, nombre:Steven Ladino Hernandez, pedido:4', 			'Error al realizar la transacción', 'error al realizar el pago'),
(5,  '2020-06-10', 'telefono:3198745293, nombre:Doris Johanna Ramirez Ramirez, pedido:5', 		'Error al realizar la transacción', 'error al realizar el pago'),
(6,  '2020-06-03', 'telefono:3198745294, nombre:Angie Tatiana Gomez Agudelo, pedido:6', 		'time out', 'error al realizar el pago'),
(7,  '2020-06-02', 'telefono:3198745295, nombre:Brenda Dayana Lombana Murcia, pedido:7', 		'time out', 'error al realizar el pago'),
(8,  '2020-06-01', 'telefono:3198745296, nombre:Claudia Liliana Lopez Perez, pedido:8', 		'Error al realizar la transacción', 'error al realizar el pago'),
(9,  '2020-06-15', 'telefono:3198745297, nombre:Angie Lorena Perdomo Zapata, pedido:9',   		'time out', 'error al realizar el pago'),
(10, '2020-06-16', 'telefono:3198745298, nombre:Cristian Andres Rubiano Ruiz, pedido:10', 		'Error al realizar la transacción', 'error al realizar el pago') ;

-- -------------------------------------------------------------------------
insert into Servidor_de_correo(Id, Fecha_de_registro, Fecha_de_envio, Enviado_de, Enviado_A, Estado)
values
(01,	'2020-06-02',	'2020-06-02',	'EVENTOS_CASA_DE_CRISTAL@GMAIL.COM',	'leonelvargas@hotmail.com',		'ENVIADO'),
(02,	'2020-06-01',	'2020-06-01',	'EVENTOS_CASA_DE_CRISTAL@GMAIL.COM',	'Pablo@gmail.com',				'ENVIADO'),
(03,	'2020-06-03',	'2020-06-03',	'EVENTOS_CASA_DE_CRISTAL@GMAIL.COM',	'mileforero26@gmail.com',		'ENVIADO'),
(04,	'2020-06-02',	'2020-06-02',	'EVENTOS_CASA_DE_CRISTAL@GMAIL.COM',	'bryanstevenladino@gmai.com',	'ENVIADO'),
(05,	'2020-06-06',	'2020-06-06',	'EVENTOS_CASA_DE_CRISTAL@GMAIL.COM',	'dorisjforero@hotmail.com',		'ENVIADO'),
(06,	'2020-06-05',	'2020-06-05',	'EVENTOS_CASA_DE_CRISTAL@GMAIL.COM',	'gomezangie12@hotmail.com',		'ENVIADO'),
(07,	'2020-06-19',	'2020-06-19',	'EVENTOS_CASA_DE_CRISTAL@GMAIL.COM',	'brenlombana25@gmail.com',		'ENVIADO'),
(08,	'2020-06-20',	'2020-06-20',	'EVENTOS_CASA_DE_CRISTAL@GMAIL.COM',	'claudial@gmail.com',			'ENVIADO'),
(09,	'2020-06-11',	'2020-06-11',	'EVENTOS_CASA_DE_CRISTAL@GMAIL.COM',	'angie265@hotmail.com',			'ENVIADO'),
(10,	'2020-06-13',	'2020-06-13',	'EVENTOS_CASA_DE_CRISTAL@GMAIL.COM',	'cristianandre25@hotmail.com',	'ENVIADO'),
(13,	'2020-06-14',	'2020-06-14',	'EVENTOS_CASA_DE_CRISTAL@GMAIL.COM',	'sandraprosa@hotmail.com',		'ENVIADO'),
(11,	'2020-06-12',	'2020-06-12',	'EVENTOS_CASA_DE_CRISTAL@GMAIL.COM',	'cristian367@hotmail.com',		'ENVIADO'),
(12,	'2020-06-15',	'2020-06-15',	'EVENTOS_CASA_DE_CRISTAL@GMAIL.COM',	'feliperuiz1234567@gmail.com',	'ENVIADO');  

-- -------------------------------------------------------------------------
insert into Tipos_de_pago( id_tipo_pago, nombre_pago)
values
(1, 'Efectivo'),
(2, 'Tarjeta_de_regalo'),
(3, 'Tarjeta_Debito'),
(4, 'Tarjeta_Credito');
-- -------------------------------------------------------------------------
insert into pagos( Id_pago, UsuarioId_usuario, PedidoId_pedido, Tipos_de_pagoId_tipo_pago)
values
(1,		1,	01,	4),
(2,		2,	02,	4),
(3,		3,	03,	4),
(4,		4,	04,	4),
(5,		5,	05,	1),
(6,		6,	06,	3),
(7,		7,	07,	3),
(8,		8,	08,	3),
(9,		9,	09,	2),
(10,	10,	10,	1),
(11,	11,	11,	2),
(12,	12,	12,	1),
(13,	13,	13,	2),
(14,	14,	14,	3),
(15,	15,	15,	4),
(16,	16,	16,	2)
;
-- -------------------------------------------------------------------------