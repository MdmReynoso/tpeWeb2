<?php

require_once('view.php');

class UserView extends View {

    public function __construct() {
        parent::__construct();
    }

    //funcion para mostrar login, si hay algun error en el formulario(vacio, contraseña no coicide,etc)
    //se pasa por paramatro y se muestra.
    public function showLogin($error=null) {
        $this->getSmarty()->assign('title', "Login");
        $this->getSmarty()->assign('error', $error);        
        $this->getSmarty()->display('templates/login.tpl');
    }

     //funcion para mostrar register, si hay algun error en el formulario(vacio)
    //se pasa por paramatro y se muestra el error.
    public function showRegister($error=null) {
        $this->getSmarty()->assign('title', "Registro");
        $this->getSmarty()->assign('error', $error);        
        $this->getSmarty()->display('templates/register.tpl');
    }
}