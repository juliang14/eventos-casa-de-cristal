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

-- -------------------------------------------------------------------------
insert into Evento(Id_evento, Tipo_de_evento, tipo_imagen, imagen, Estado)
values
(1,	'Matrimonio', 'image/jpg' , 'Boda.jpg', 'ACTIVO'),
(2,	'Bautizo'	, 'image/jpg' , 'Bautizo.jpg', 'ACTIVO'),
(3,	'15 Años'	, 'image/jpg' , '15.jpg', 'ACTIVO'),
(4,	'Despedida de soltero', 'image/jpg' , 'eventos2.jpg', 'ACTIVO'),
(5,	'Primeras comuniones', 'image/jpg' , 'Primera Comunion.jpg', 'ACTIVO'),
(6,	'Grados'	, 'image/jpg' , 'Grados.jpg', 'ACTIVO');
-- -------------------------------------------------------------------------

insert into Paquete(Id_paquete, valor_paquete, valor_iva, valor_total, Tipo_de_paquete, Cantidad_Personas, Estado, EventoId_evento)
values
(1,	6000000,	1140000,	7140000,	'matrimonio 1',				20,	'ACTIVO',	1),
(2,	3000000,	 570000,	3570000,	'despedida_de_soltero 1',	20,	'ACTIVO',	4),
(3,	1000000,	 190000,	1190000,	'Bautizo 1',				20,	'ACTIVO',	2),
(4,	2000000,	 380000,	2380000,	'primera_comunion 1',		20,	'ACTIVO',	5),
(5,	4000000,	 760000,	4760000,	'15 Años 1',				20,	'ACTIVO',	3),
(6,	3000000,	 570000,	3570000,	'Grados 1',					20,	'ACTIVO',	6),
(7,	8000000,	3140000,	9140000,	'matrimonio 2',				30,	'ACTIVO',	1);
	   
-- -------------------------------------------------------------------------	   
insert into Inventario(Id_inventario, Inventario, Cantidad, Valor_sin_iva, Iva, Valor_Total, Categoria, Estado)
values 
(6,	'centros_de_mesa',	50,		10000,	 1900,	11900,	'utileria',	'ACTIVO'),
(5,	'platos',			200,	25000,	 4750,	29750,	'utileria',	'ACTIVO'),
(4,	'cubiertas',		600,	 8000,	 1520,	 9520,	'utileria',	'ACTIVO'),
(3,	'mesas',			50,		30000,	 5700,	35700,	'utileria',	'ACTIVO'),
(2,	'manteles',			100,	12000,	 2280,	14280,	'utileria',	'ACTIVO'),
(1,	'ollas',			20,		35000,	 6650,	41650,	'utileria',	'ACTIVO'),
(7,	'Equipos_sonido',	4,		70000,	13300,	83300,	'utileria',	'ACTIVO');

-- -------------------------------------------------------------------------
insert into Inventario_paquete(InventarioId_inventario, PaqueteId_paquete, cantidad, Valor_sin_iva, Iva, Valor_Total)
values  
(1,	1, 20,	10000,	 1900,	11900),
(1,	2, 25,	10000,	 1900,	11900),
(1,	3, 24,	10000,	 1900,	11900),
(1,	4, 23,	10000,	 1900,	11900),
(1,	5, 24,	10000,	 1900,	11900),
(2,	1, 23,	10000,	 1900,	11900),
(2,	2, 21,	10000,	 1900,	11900),
(2,	3, 22,	10000,	 1900,	11900),
(2,	4, 27,	10000,	 1900,	11900),
(2,	5, 28,	10000,	 1900,	11900),
(3,	1, 29,	10000,	 1900,	11900),
(3,	2, 28,	10000,	 1900,	11900),
(3,	3, 24,	10000,	 1900,	11900),
(3,	4, 25,	10000,	 1900,	11900),
(3,	5, 23,	10000,	 1900,	11900),
(4,	1, 25,	10000,	 1900,	11900),
(4,	2, 23,	10000,	 1900,	11900),
(4,	3, 22,	10000,	 1900,	11900),
(4,	4, 27,	10000,	 1900,	11900),
(4,	5, 22,	10000,	 1900,	11900),
(5,	1, 21,	10000,	 1900,	11900),
(5,	2, 24,	10000,	 1900,	11900),
(5,	3, 26,	10000,	 1900,	11900),
(5,	4, 28,	10000,	 1900,	11900),
(5,	5, 27,	10000,	 1900,	11900),
(6,	1, 20,	10000,	 1900,	11900),
(6,	2, 20,	10000,	 1900,	11900),
(6,	3, 20,	10000,	 1900,	11900),
(6,	4, 23,	10000,	 1900,	11900),
(6,	5, 24,	10000,	 1900,	11900),
(7,	1, 25,	10000,	 1900,	11900),
(7,	2, 22,	10000,	 1900,	11900),
(7,	3, 22,	10000,	 1900,	11900),
(7,	4, 20,	10000,	 1900,	11900),
(7,	5, 20,	10000,	 1900,	11900),
(1,	6, 21,	10000,	 1900,	11900),
(2,	6, 23,	10000,	 1900,	11900),
(3,	6, 28,	10000,	 1900,	11900),
(4,	6, 29,	10000,	 1900,	11900),
(5,	6, 28,	10000,	 1900,	11900),
(6,	6, 25,	10000,	 1900,	11900),
(7,	6, 21,	10000,	 1900,	11900),
(1,	7, 31,	10000,	 1900,	11900),
(2,	7, 33,	10000,	 1900,	11900),
(3,	7, 38,	10000,	 1900,	11900),
(4,	7, 39,	10000,	 1900,	11900),
(5,	7, 38,	10000,	 1900,	11900),
(6,	7, 35,	10000,	 1900,	11900),
(7,	7, 31,	10000,	 1900,	11900);
-- -------------------------------------------------------------------------
insert into Estado_pedido( Id_estadopedido, estado)
values
(1, 'Por realizar'),
(2, 'En curso'),
(3, 'Realizado'),
(4, 'Cancelado')
;

-- -------------------------------------------------------------------------
insert into Factura(Id_factura, Valor_sin_iva, Iva, Valor_Total, Tipo_de_factura, Descripcion_factura)
values 
(1,		3000000,	3000000/0.19,	315789,	'fisica',		'evento_Grado'),
(2,		4000000,	4000000/0.19,	421052,	'electronica',	'evento_15_años'),
(3,		2000000,	2000000/0.19,	210526,	'fisica',		'evento_primera_comunion'),
(4,		1000000,	1000000/0.19,	15263,	'electronica',	'evento_Bautizo'),
(5,		3000000,	3000000/0.19,	315789,	'fisica',		'evento_despedida_de_soltero'),
(6,		6000000,	6000000/0.19,	631578,	'electronica',	'evento_matrimonio'),
(7,		3000000,	3000000/0.19,	315789,	'fisica',		'evento_Grado'),
(8,		4000000,	4000000/0.19,	421052,	'electronica',	'evento_15_años'),
(9,		6000000,	6000000/0.19,	631578,	'electronica',	'evento_matrimonio'),
(10,	1000000,	1000000/0.19,	15263,	'electronica',	'evento_Bautizo'),
(11,	1000000,	1000000/0.19,	15263,	'electronica',	'evento_Bautizo'),
(12,	1000000,	1000000/0.19,	15263,	'electronica',	'evento_Bautizo'),
(13,	4000000,	4000000/0.19,	421052,	'electronica',	'evento_15_años'),
(14,	3000000,	3000000/0.19,	315789,	'fisica',		'evento_Grado'),
(15,	6000000,	6000000/0.19,	631578,	'electronica',	'evento_matrimonio'),
(16,	6000000,	6000000/0.19,	631578,	'electronica',	'evento_matrimonio');

-- -------------------------------------------------------------------------
insert into Pedido(Id_pedido, Fecha_pedido, Fecha_inicio_evento, Fecha_fin_evento, Ciudad_evento, Barrio_evento, Direccion_evento, Paquete_Idpaquete, UsuarioId_usuario, EstadopedidoId_estadopedido, FacturaId_factura)
values 
(1,		sysdate(), DATE_ADD(sysdate(),INTERVAL 90 DAY), DATE_ADD(DATE_ADD(sysdate(),INTERVAL 90 DAY),INTERVAL 12 HOUR),	'Bogota',	'Chico Norte',	' carrera 11 #93-92',		6,	6,	1,	1),
(2,		sysdate(), DATE_ADD(sysdate(),INTERVAL 90 DAY), DATE_ADD(DATE_ADD(sysdate(),INTERVAL 90 DAY),INTERVAL 12 HOUR),	'Bogota',	'San Isidro',	' carrera 12 #93-92',		5,	5,	1,	2),
(3,		sysdate(), DATE_ADD(sysdate(),INTERVAL 90 DAY), DATE_ADD(DATE_ADD(sysdate(),INTERVAL 90 DAY),INTERVAL 12 HOUR),	'Bogota',	'Estrada',		' carrera 13 #93-92',		4,	4,	1,	3),
(4,		sysdate(), DATE_ADD(sysdate(),INTERVAL 90 DAY), DATE_ADD(DATE_ADD(sysdate(),INTERVAL 90 DAY),INTERVAL 12 HOUR),	'Bogota',	'Acapulco',		' carrera 14 #93-92',		3,	3,	1,	4),
(5,		sysdate(), DATE_ADD(sysdate(),INTERVAL 90 DAY), DATE_ADD(DATE_ADD(sysdate(),INTERVAL 90 DAY),INTERVAL 12 HOUR),	'Bogota',	'El Salitre',	' carrera 15 #93-92',		2,	2,	1,	5),
(6,		sysdate(), DATE_ADD(sysdate(),INTERVAL 90 DAY), DATE_ADD(DATE_ADD(sysdate(),INTERVAL 90 DAY),INTERVAL 12 HOUR),	'Bogota',	'Bosque Popular',' carrera 16 #93-92',		1,	1,	1,	6),
(7,		sysdate(), DATE_ADD(sysdate(),INTERVAL 90 DAY), DATE_ADD(DATE_ADD(sysdate(),INTERVAL 90 DAY),INTERVAL 12 HOUR),	'Bogota',	'Bonanza',		' carrera 17 #93-92',		2,	6,	1,	7),
(8,		sysdate(), DATE_ADD(sysdate(),INTERVAL 90 DAY), DATE_ADD(DATE_ADD(sysdate(),INTERVAL 90 DAY),INTERVAL 12 HOUR),	'Bogota',	'Metrópolis',	' carrera 18 #93-92',		3,	7,	1,	8),
(9,		sysdate(), DATE_ADD(sysdate(),INTERVAL 90 DAY), DATE_ADD(DATE_ADD(sysdate(),INTERVAL 90 DAY),INTERVAL 12 HOUR),	'Bogota',	'Las Ferias',	' carrera 19 #93-92',		4,	8,	1,	9),
(10,	sysdate(), DATE_ADD(sysdate(),INTERVAL 90 DAY), DATE_ADD(DATE_ADD(sysdate(),INTERVAL 90 DAY),INTERVAL 12 HOUR),	'Bogota',	'Aures',		' carrera 20 #93-92',		5,	9,	1,	10),
(11,	sysdate(), DATE_ADD(sysdate(),INTERVAL 90 DAY), DATE_ADD(DATE_ADD(sysdate(),INTERVAL 90 DAY),INTERVAL 12 HOUR),	'Bogota',	'Las Flores',	' carrera 21 #93-92',		6,	10,	1,	11),
(12,	sysdate(), DATE_ADD(sysdate(),INTERVAL 90 DAY), DATE_ADD(DATE_ADD(sysdate(),INTERVAL 90 DAY),INTERVAL 12 HOUR),	'Bogota',	'San Jorge',	' carrera 22 #93-92',		5,	11,	1,	12),
(13,	sysdate(), DATE_ADD(sysdate(),INTERVAL 90 DAY), DATE_ADD(DATE_ADD(sysdate(),INTERVAL 90 DAY),INTERVAL 12 HOUR),	'Bogota',	'Tibabuyes',	' carrera 23 #93-92',		4,	12,	1,	13),
(14,	sysdate(), DATE_ADD(sysdate(),INTERVAL 90 DAY), DATE_ADD(DATE_ADD(sysdate(),INTERVAL 90 DAY),INTERVAL 12 HOUR),	'Bogota',	'El Rubí',		' carrera 24 #93-92',		3,	13,	1,	14),
(15,	sysdate(), DATE_ADD(sysdate(),INTERVAL 90 DAY), DATE_ADD(DATE_ADD(sysdate(),INTERVAL 90 DAY),INTERVAL 12 HOUR),	'Bogota',	'Niza',			' carrera 25 #93-92',		2,	14,	1,	15),
(16,	sysdate(), DATE_ADD(sysdate(),INTERVAL 90 DAY), DATE_ADD(DATE_ADD(sysdate(),INTERVAL 90 DAY),INTERVAL 12 HOUR),	'Bogota',	'Villa Cindy',	' carrera 26 #93-92',		1,	15,	1,	16);

-- ---------------------------------------
insert into Turno(Id_turno, Fecha_inicio_turno, Fecha_fin_turno, PedidoId_pedido)
values 
(1,		DATE_ADD(sysdate(),INTERVAL 90 DAY), DATE_ADD(DATE_ADD(sysdate(),INTERVAL 90 DAY),INTERVAL 12 HOUR),	1),
(2,		DATE_ADD(sysdate(),INTERVAL 90 DAY), DATE_ADD(DATE_ADD(sysdate(),INTERVAL 90 DAY),INTERVAL 12 HOUR),	2),
(3,		DATE_ADD(sysdate(),INTERVAL 90 DAY), DATE_ADD(DATE_ADD(sysdate(),INTERVAL 90 DAY),INTERVAL 12 HOUR),	3),
(4,		DATE_ADD(sysdate(),INTERVAL 90 DAY), DATE_ADD(DATE_ADD(sysdate(),INTERVAL 90 DAY),INTERVAL 12 HOUR),	4),
(5,		DATE_ADD(sysdate(),INTERVAL 90 DAY), DATE_ADD(DATE_ADD(sysdate(),INTERVAL 90 DAY),INTERVAL 12 HOUR),	5),
(6,		DATE_ADD(sysdate(),INTERVAL 90 DAY), DATE_ADD(DATE_ADD(sysdate(),INTERVAL 90 DAY),INTERVAL 12 HOUR),	6),
(7,		DATE_ADD(sysdate(),INTERVAL 90 DAY), DATE_ADD(DATE_ADD(sysdate(),INTERVAL 90 DAY),INTERVAL 12 HOUR),	7),
(8,		DATE_ADD(sysdate(),INTERVAL 90 DAY), DATE_ADD(DATE_ADD(sysdate(),INTERVAL 90 DAY),INTERVAL 12 HOUR),	8),
(9,		DATE_ADD(sysdate(),INTERVAL 90 DAY), DATE_ADD(DATE_ADD(sysdate(),INTERVAL 90 DAY),INTERVAL 12 HOUR),	9),
(10,	DATE_ADD(sysdate(),INTERVAL 90 DAY), DATE_ADD(DATE_ADD(sysdate(),INTERVAL 90 DAY),INTERVAL 12 HOUR),	10),
(11,	DATE_ADD(sysdate(),INTERVAL 90 DAY), DATE_ADD(DATE_ADD(sysdate(),INTERVAL 90 DAY),INTERVAL 12 HOUR),	11),
(12,	DATE_ADD(sysdate(),INTERVAL 90 DAY), DATE_ADD(DATE_ADD(sysdate(),INTERVAL 90 DAY),INTERVAL 12 HOUR),	12),
(13,	DATE_ADD(sysdate(),INTERVAL 90 DAY), DATE_ADD(DATE_ADD(sysdate(),INTERVAL 90 DAY),INTERVAL 12 HOUR),	13),
(14,	DATE_ADD(sysdate(),INTERVAL 90 DAY), DATE_ADD(DATE_ADD(sysdate(),INTERVAL 90 DAY),INTERVAL 12 HOUR),	14),
(15,	DATE_ADD(sysdate(),INTERVAL 90 DAY), DATE_ADD(DATE_ADD(sysdate(),INTERVAL 90 DAY),INTERVAL 12 HOUR),	15),
(16,	DATE_ADD(sysdate(),INTERVAL 90 DAY), DATE_ADD(DATE_ADD(sysdate(),INTERVAL 90 DAY),INTERVAL 12 HOUR),	16);

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
(4, 'Tarjeta_Credito'),
(5, 'Paypal');
-- -------------------------------------------------------------------------
insert into pagos( Id_pago, UsuarioId_usuario, PedidoId_pedido, Tipos_de_pagoId_tipo_pago, Total_pago, Clave_transaccional, PaypalDatos, estado)
values
(1,		1,	01,	4, 0, '', '', ''),
(2,		2,	02,	4, 0, '', '', ''),
(3,		3,	03,	4, 0, '', '', ''),
(4,		4,	04,	4, 0, '', '', ''),
(5,		5,	05,	1, 0, '', '', ''),
(6,		6,	06,	3, 0, '', '', ''),
(7,		7,	07,	3, 0, '', '', ''),
(8,		8,	08,	3, 0, '', '', ''),
(9,		9,	09,	2, 0, '', '', ''),
(10,	10,	10,	1, 0, '', '', ''),
(11,	11,	11,	2, 0, '', '', ''),
(12,	12,	12,	1, 0, '', '', ''),
(13,	13,	13,	2, 0, '', '', ''),
(14,	14,	14,	3, 0, '', '', ''),
(15,	15,	15,	4, 0, '', '', ''),
(16,	16,	16,	2, 0, '', '', '')
;
-- -------------------------------------------------------------------------
