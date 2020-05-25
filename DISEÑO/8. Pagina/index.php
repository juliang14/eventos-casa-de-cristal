<?php

   //define('APP_URL','http://localhost/proyecto-eventos-casa-de-cristal-1/DISEÑO/8.%20Pagina/');


   session_start();

   //llamar modelos
   require_once('models/DataBase/DB.php');
   require_once('models/Security.php');
   require_once('models/Administrador.php');
   require_once('models/TipoDocumento.php');
   require_once('models/Cargo.php');
   require_once('models/Roles.php');
   require_once('models/Usuario.php');
   require_once('models/Empleado.php');
   require_once('models/EmpleadoTurno.php');


   /*-----------------------------------------------------*/

   $controller=isset($_REQUEST['class']) ? $_REQUEST['class']: 'Index';
   $method=isset($_REQUEST['method']) ? $_REQUEST['method']: 'index';


   // permite requerir un archivo .php en nuestro sitio
   require_once ('controllers/'.$controller.'Controller.php');

   $controller=$controller.'Controller';
   call_user_func(array($controller,$method));
   //$controller= new $controller();
   //$controller->$method();<?php

   ?> 