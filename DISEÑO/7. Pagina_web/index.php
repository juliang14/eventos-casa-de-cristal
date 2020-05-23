<?php
   //llamar Conexion BD
   require_once('models/Database/DB.php');
   require_once('models/IndexConection.php');

   require_once('models/Security.php');
   require_once('models/UserSesion.php');

   /*-----------------------------------------------------*/

   $controller=isset($_REQUEST['class']) ? $_REQUEST['class']: 'IndexHome';
   $method=isset($_REQUEST['method']) ? $_REQUEST['method']: 'index';


   // permite requerir un archivo .php en nuestro sitio
   require_once ('controllers/'.$controller.'Controller.php');

   $controller=$controller.'Controller';
   call_user_func(array($controller,$method));
   //$controller= new $controller();
   //$controller->$method();<?php

   ?> 