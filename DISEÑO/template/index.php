<?php

   //define('APP_URL','http://localhost/proyecto-eventos-casa-de-cristal-1/DISEÑO/8.%20Pagina/');

   //llamar Conexion BD
   /*require_once('models/DataBase/DB.php');
   require_once('models/Security.php');
   require_once('models/Administrador.php');
   require_once('models/Empleado.php');*/


   /*-----------------------------------------------------*/

   $controller=isset($_REQUEST['class']) ? $_REQUEST['class']: 'Index';
   $method=isset($_REQUEST['method']) ? $_REQUEST['method']: 'index';


   // permite requerir un archivo .php en nuestro sitio
   require_once ('controller/'.$controller.'Controller.php');

   $controller=$controller.'Controller';
   call_user_func(array($controller,$method));
   //$controller= new $controller();
   //$controller->$method();<?php

   ?> 