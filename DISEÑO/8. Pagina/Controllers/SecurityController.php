<?php

class SecurityController extends Security{

    //Pagina de login usuario
	public function loginUsuario(){
		require_once('views/Security/loginUsuario.php');
    }
    
    //Pagina inicio usuario
    public function usuario(){
        $ResponseAutenticate = parent::autenticarUsuario($_POST['usuario'],$_POST['password']);
        if(!$ResponseAutenticate){
            header('location:?class=security&method=loginUsuario');
        }else if($ResponseAutenticate->Clave ==$_POST['password']){
            var_dump($ResponseAutenticate);
            //require_once('views/usuarios/usuario.php');
        }else{
            //header('location:?class=IndexHome&method=loginUsuario');
        }
        
    }

}

?>