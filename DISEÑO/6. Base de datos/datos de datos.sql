insert into Tipo_documento
(Id_documento, Siglas, Nombre_tipo_documento)
values
(1, 'CC', 'Cedula_de_ciudadania'),
(2, 'CE', 'Cedula_de_extranjeria'),
(3, 'NIT', 'Numero_de_Identificación_Tributaria');


-----------------------------------------
insert into Cargo
(Id_cargo, Nombre_de_cago)
values
(1, 'Mesero'),
(2, 'Cocinero'),
(3, 'Organizador'),
(4, 'Dj'),
(5, 'Animador'),
(6, 'Fotografos'),
(7, 'Director_de_Marketing'),
(8, 'Presidente');

----------------------------------------
insert into Rol
(Id_rol, Nombre_rol)
values 
(1, 'Clierte'),
(2, 'Empleado'),
(3, 'Administrador');


---------------------------------------------

insert into Usuario
(Id_usuario, Primer_nombre, Segundo_nombre, Primer_apellido, Segundo_apellido, Tipo_documentoId_documento, Numero_documento, Edad, Telefono, Direccion, Email, RolId_rol)
values
(1, 'Leonel', 'Alexander', 'Vargas', 'Rodriguez', 1, '1256896558', 22, 3157845689, 'cra15 #12-78', 'leonelvargas@hotmail.com', 1),
(2, 'Ana', 'Milena', 'Forero', 'Rodriguez', 1, '1235698685', 35, 1023856989, 'Calle 56 #56-8', 'mileforero26@gmail.com', 1),
(3, 'Bryan', 'Steven', 'Ladino', 'Hernandez', 1, '156897556', 40, 3198745289, 'cr15 #56-7', 'bryanstevenladino@gmai.com', 1),
(4, 'Doris', 'Johanna', 'Ramirez', 'Ramirez', 1, '1126589331', 25, 3125698745, 'av 39 #22-8', 'dorisjforero@hotmail.com', 1),
(5, 'Angie', 'Tatiana', 'Gomez', 'Agudelo', 1, '102356899', 38, 312568974, 'cr 24 #25-3', 'gomezangie12@hotmail.com', 1),
(6, 'Brenda', 'Dayana', 'Lombana', 'Murcia', 1, '102356889', 32, 3102589663, 'calle 45 #56-9', 'brenlombana25@gmail.com', 1),
(7, 'Claudia', 'Liliana', 'Lopez', 'Perez', 1, '1256369556', 22, 3215896259, 'cra25 #25-9', 'claudial@gmail.com', 1),
(8, 'Angie', 'Lorena', 'Perdomo', 'Zapata', 1, '1256899665', 46, 34589654878, 'calle 25 # 25-6', 'angie265@hotmail.com', 1),
(9, 'Cristian', 'Andres', 'Rubiano', 'Ruiz', 1, '1236589778', 40, 3215896258, 'calle 40 #25-5', 'cristianandre25@hotmail.com', 1),
(10, 'Johan', 'Camilo', 'Sanchez', 'Avila', 1, '1023565889', 26, 3256985689, 'ave 39 # 25-8', 'cristian367@hotmail.com', 1),
(11, 'Felipe', 'Armando', 'Ruiz', 'Fiquitiva', 1, '1025689556', 36, 3102568994, 'cra 25 #25-6', 'feliperuiz1234567@gmail.com', 1),
(12, 'Sandra', 'Patricia', 'Rosa', 'Botero', 1, '1013684005', 30, 3105895214, 'Ave56 # 23-6', 'sandraprosa@hotmail.com', 1),
(13, 'Jhon', 'Anderson', 'Molina', 'Gomez', 1, '1232457872', 45, 3125689586, 'cra 23 #23-6', 'jhon@gmail.com', 1),
(14, 'Lizeth', 'Natalia', 'Ramos', 'Avila', 1, '1023665899', 40, 3112589632, 'calle 72 #25-6', 'Lizeth@gmail.com', 1),
(15, 'Pablo', 'Andres', 'Rodriguez', 'Gomez', 1, '1023669888', 20, 3108965269, 'calle 56 #25-6', 'Pablo@gmail.com', 1),
(16, 'Pedro', 'Ignacio', 'Calvo', 'Churque', 1, '1036598226', 36, 3125698569, 'cra 25 #12-5', 'Pedro@gmail.com', 1),
(17, 'Mauricio', 'Brandon', 'Churque', 'Rodruigez', 1, '1032569885', 25, 3145286258, 'cra 23 #26-8', 'Mauricio1@gmail.com', 1),
(18, 'Oscar', 'Armando', 'Gomez', 'Ramirez', 1, '1023668995', 19, 3125896259, 'calle 57 #56-89', 'Oscar@gmail.com', 1),
(19, 'Liz', 'Amanda', 'Hernandez', 'Ramos', 1, '1023698885', 33, 3124576891, 'cra 26 #26-2', 'Liz@gmail.com', 1),
(20, 'Sandra', 'Janeth', 'Calderon', 'Ruiz', 1, '1234568709', 45, 3152368956, 'av39 #25-9', 'Sandra@gmail.com',1),
(21, 'Edison', 'Alexander', 'Hernandez', 'Cordoba', 1, '1324567831', 28, 3105896552, 'cra26 #25-22', 'Edison@gmail.com',1),
(22, 'Giovany', 'Andres', 'Garcia', 'Florez', 1, '1023698559', 28, 3125689256, 'Cra 18f #47a58', 'giovany31@hotmail.com', 1),
(23, 'Stefany', NULL, 'Lopez', 'Castro', 1, '1235697784', 52, 3154785263, 'av39 #12h-9', 'stefalopez23@gmail.com', 1),
(24, 'Aylin', 'Camila', 'Novoa', 'Calvo', 1, '1056236995', 46, 3165896242, 'Cra17g bis #74a28', 'aylin2324@hotmail.com', 1);

-------------------------------------------
insert into Empleado
(Id_empleado, Primer_nombre, Segundo_nombre, Primer_apellido, Segundo_apellido, Tipo_documentoId_documento, Numero_documento, CargoId_cargo, Edad, Telefono, Direccion, Email, RolId_rol)
values
(1,   'Maria', 	  'Mireya', 'Acevedo', 'Manríquez', 1, '1354689712', 1, 22, 3157845689, 'cra15 #12-78', 'AcevedoMM@hotmail.com', 2),
(2,   'Enrique',   null,    'Acevedo', 'Mejia',     1, '1512365874', 1, 35, 1023856989, 'Calle 56 #56-8', 'Mejia14@gmail.com', 2),
(3,   'Carolina',  null,    'Acevedo', 'Ruiz',      1, '1265328496', 2, 40, 3198745289, 'cr15 #56-7', 'CarolinaRui@gmai.com', 2),
(4,   'Tomas',    'Jose',   'Acosta',  'Canto',     1, '745368791' , 8, 25, 3125698745, 'av 39 #22-8', 'tomas59jose@hotmail.com', 2),
(5,   'Celina',    null,    'Acosta',  'Gomez',     1, '102356833' , 3, 38, 312568974, 'cr 24 #25-3', 'celina1111@hotmail.com', 2),
(6,   'irma',      null,    'Aguilar', 'Dorantes',  1, '1027520041', 3, 32, 3102589663, 'calle 45 #56-9', 'irma788@gmail.com', 2),
(7,   'Maria',    'celia',  'Aguilar', 'lemus',     1, '1253458963', 4, 22, 3215896259, 'cra25 #25-9', 'maria12@gmail.com', 2),
(8,   'Marcela',   null,    'Aguilar', 'loranca',   1, '1065320855', 4, 46, 34589654878, 'calle 25 # 25-6', 'marcelaaguil89@hotmail.com', 2),
(9,   'pascual',  'Gerardo','Alonso',  'Ibarra',    1, '847982549' , 2, 40, 3215896258, 'calle 40 #25-5', 'pascualger@hotmail.com', 2),
(10,  'Oscar',     null,    'Alvarado','Mendoza',   1, '1352087496', 3, 26, 3256985689, 'ave 39 # 25-8', 'mendoza56@hotmail.com', 2),
(11,  'Felipe',    null,    'Alvarez', 'Medellin',  1, '1166335508', 5, 36, 3102568994, 'cra 25 #25-6', 'felipe7@gmail.com', 2),
(12,  'Oscar',     null,    'Alvarado','Mendoza',   1, '1299852490', 7, 30, 3105895214, 'Ave56 # 23-6', 'osalvarado65@hotmail.com', 2),
(13,  'Gustavo',   null,    'Aquiles', 'Caigo',     1, '1015879623', 6, 45, 3125689586, 'cra 23 #23-6', 'gustavo26@gmail.com', 3),
(14,  'Socorro',   null,    'Arias',   'Rodríguez', 1, '1004876948', 1, 40, 3112589632, 'calle 72 #25-6', 'socorroar12@gmail.com', 3);


--------------------
insert into Usuario_sistema
(Id_Usuariosistema, Nombre_usuario, Clave, UsuarioId_usuario, EmpleadoId_empleado)
values
(01, 'Leonel2019', 'Leonel2019', 1, null),
(02, 'Mile1256', 'Mile1256', 2, null),
(03, 'Ladino1548', 'Ladino1548',3, null),
(04, 'dorijforerorz', 'dorijforerorz', 4, null),
(05, 'g15269', 'g15269', 5, null),
(06, '6325lombana', '6325lombana', 6, null),
(07, 'lopezclaudia789', 'lopezclaudia789', 7, null),
(08, 'angie265', 'angie265', 8, null),                                   
(09, 'cristianandre25', 'cristianandre25', 9, null),
(010, 'camilo14', 'camilo14', 10, null),
(011, 'felipe12', 'felipe12', 11, null),
(012, 'sandrap23', 'sandrap23', 12, null),
(013, 'jhon12345', 'jhon12345', 13, null),
(014, 'Lizeth12345', 'Lizeth12345', 14, null),
(015, 'Pablo12345', 'Pablo12345', 15, NULL),
(016, 'Pedro12345', 'Pedro12345', 16, NULL),
(017, 'Mauricio12345', 'Mauricio12345', 17, NULL),
(018, 'Oscar15', 'Oscar15', 18, NULL),
(019, 'Liz12345', 'Liz12345', 19, NULL),
(020, 'Sandra12345', 'Sandra12345', 20, NULL),
(021, 'Edison25', 'Edison25', 21, NULL),
(022, 'gagarcia31', 'gagarcia31', 22, NULL),
(023, 'slopez2', 'slopez2', 23, NULL),
(024, 'aylin2324', 'aylin2324', 24, NULL),
(025, 'AcevedoMM', 'AcevedoMM', null, 1),
(026, 'Mejia14', 'Mejia14', null, 2),
(027, 'CarolinaRui', 'CarolinaRui', null, 3),
(028, 'tomas59jose', 'tomas59jose', null, 4),
(029, 'celina1111', 'celina1111', null, 5),
(030, 'irma788', 'irma788', null, 6),
(031, 'maria12', 'maria12', null, 7),
(032, 'marcelaaguil89', 'marcelaaguil89', null, 8),
(033, 'mendoza56', 'mendoza56', null, 9),
(034, 'felipe7', 'felipe7', null, 10),
(035, 'pascualger', 'pascualger', null, 11),
(036, 'osalvarado65', 'osalvarado65', null, 12),
(037, 'gustavo26', 'gustavo26', null, 13),
(038, 'socorroar12', 'socorroar12', null, 14);


----------------------------------------------------
insert into Turno(Id_turno, Turno, fecha_de_turno, Hora_de_turno_inicio, Hora_de_turno_fin)
values 
(01,1,'2025-05-20','06:00:00','14:00:00'),
(02,2,'2025-05-20','14:00:00','22:00:00'),
(03,3,'2025-05-20','22:00:00','06:00:00');

insert into Empleado_turno( EmpleadoId_empleado, TurnoId_turno)
values 
(1,01),
(2,02),
(3,03),
(4,01),
(5,02),
(6,03),
(7,01),
(8,02),
(9,03),
(10,01),
(11,02),
(12,03),
(13,01),
(14,02)
;

insert into Evento(Id_evento, Tipo_de_evento)
values
(01,'Matrimonio'),
(02,'Bautizo'),
(03,'15 Años'),
(04,'Despedida de soltero'),
(05,'Primeras comuniones'),
(06,'Grados'),
;

insert into Pedido(I d_pedido, PaqueteId_paquete, UsuarioId_usuario, EventoId_evento)
values
;

insert into Paquete(Id_paquete, valor_paquete, Tipo_de_paquete)
values
;

insert into Inventario_paquete(InventarioId_inventario, PaqueteId_paquete)
values
;

insert into Inventario(Id_inventario, Inventario, Cantidad, Categoria)
values
;

insert into Factura(Id_factura, Valor_sin_iva, Iva, Valor_Total, Tipo_de_factura, Descripcion_factura, PedidoId_pedido)
values
;



insert into Tarjeta_Credito(Id_tarjeta_credito, Titular_de_la_tarjeta, Numero_de_tarjeta, Fecha_de_vencimiento, CVV, FacturaId_factura)
values
(1,  'Leonel_Vargas',   10236981, '2020-05-02', 4589, 01),
(2,  'Milena_Forero',   59831127, '2020-08-25', 8956, 01),
(3,  'Bryan_Ladino' ,   12457863, '2020-10-06', 8452, 02),
(4,  'Johanna_Ramirez', 78523694, '2020-11-09', 2365, 03),
(5,  'Tatiana_Gomez',   12365978, '2020-04-12', 1254, 01),
(6,  'Brenda_Lombana',  15478932, '2020-05-15', 3698, 01),
(7,  'Claudia_Lopez',   14785236, '2020-03-08', 2548, 03),
(8,  'Lorena_Perdomo',  15698742, '2020-11-12', 3287, 03),
(9,  'Cristan_Rubiano', 13659874, '2020-12-15', 0145, 02),
(10, 'Camilo_Sanchez',  18967542, '2020-01-07', 3615, 01);
;


insert into Tarjeta_Debito(Id_tarjeta_Debito, Titular_de_la_tarjeta_Debito, Numero_de_tarjeta, Fecha_de_vencimiento, FacturaId_factura)
values
(01, 'Leonel_Vargas',   12345678, '2020-11-23', 01),
(02, 'Milena_Forero',   25638945, '2020-10-07', 03),
(03, 'Bryan_Ladino',    58964522, '2020-12-06', 01),
(04, 'Johanna_Ramirez', 56982136, '2020-05-15', 01),
(05, 'Tatiana_Gomez',   12356986, '2020-06-23', 01),
(06, 'Brenda_Lombana',  15896323, '2020-08-26', 01),
(07, 'Claudia_Lopez',   25639848, '2020-08-25', 01),
(08, 'Lorena_Perdomo',  98653254, '2020-07-08', 01),
(09, 'Cristan_Rubiano', 89653269, '2020-05-03', 01),
(10, 'Camilo_Sanchez',  36589445, '2020-10-10', 01);
;

insert into Efectivo(Id_Efectivo, Numero_de_celular, Valor_de_pago, FacturaId_factura)
values
(1,  31087150, 16900, 01),
(2,  32087771, 32900, 03),
(3,  31151023, 24900, 02),
(4,  32156893, 32900, 03),
(5,  32056987, 32900, 03),
(6,  31256931, 16900, 01),
(7,  30058962, 24900, 02),
(8,  31125849, 24900, 02),
(9,  31059630, 16900, 01),
(10, 32145789, 32900, 03);
;

insert into Log_de_errores(Id_error, Fecha_de_error, Request, Response, Descripcion_de_error)
values
(1, '2020-23-12', 'telefono:3198745289, nombre:Leonel Alexander Vargas Rodriguez, pedido:2', 'Error al realizar la transacción', 'error al realizar el pago')
;

insert into Servidor_de_correo(Id, Fecha_de_registro, Fecha_de_envio, Enviado_de, Enviado_A, Estado)
values
;



