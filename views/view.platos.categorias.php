<?php

require_once('view.php');
include_once('helpers/auth.helper.php');

class PlatosCategoriasView extends View{
    public function __construct() {
        parent::__construct();
        $authHelper = new AuthHelper();
        $username = $authHelper->getLoggedUserName();
        $this->getSmarty()->assign('username', $username);
    }
    
    //Funcion para mostrar el home
    public function home(){
      
        $this->getSmarty()->assign('url', BASE_URL);
        $this->getSmarty()->assign('title','Home');
        
        //llamo al template a mostrar al usuario.
        $this->getSmarty()->display('templates/home.tpl');
    }

    //funcion para mostrar la pagina de platos
    public function platos ($categorias, $platos){
        $this->getSmarty()->assign('url', BASE_URL);
        $this->getSmarty()->assign('title','Platos');
        $this->getSmarty()->assign('categorias', $categorias);
        $this->getSmarty()->assign('platos', $platos);

        //llamo al template a mostrar al usuario.
        $this->getSmarty()->display('templates/platos.tpl');
    }
    
    //funcion para mostrar la descripcion de un plato en particular
    public function descripcion($plato, $categorias){
        $this->getSmarty()->assign('url', BASE_URL);
        $this->getSmarty()->assign('title','Descripcion');
        $this->getSmarty()->assign('categorias', $categorias);
        $this->getSmarty()->assign('plato', $plato);    
        
        $this->getSmarty()->display('templates/descripcion.tpl');
    }

      //funcion para mostrar la nacionalidad de un plato en particular
      public function nacionalidad($plato, $categorias){
        $this->getSmarty()->assign('url', BASE_URL);
        $this->getSmarty()->assign('title','Nacionalidad');
        $this->getSmarty()->assign('categorias', $categorias);
        $this->getSmarty()->assign('plato', $plato);    
        
        $this->getSmarty()->display('templates/nacionalidad.tpl');
    }

    //funcion para mostrar la pagina de admin
    public function admin($categorias, $plato){
        $this->getSmarty()->assign('url', BASE_URL);
        $this->getSmarty()->assign('title','Admin');
        $this->getSmarty()->assign('categorias', $categorias);
        $this->getSmarty()->assign('platos', $plato);
        $this->getSmarty()->display('templates/admin.tpl');
    }

    //funcion para mostrar la pagina de editar categoria
    public function ShowEditCategoria($categoria, $error=null){
        $this->getSmarty()->assign('title','Edit');
        $this->getSmarty()->assign('categoria', $categoria);
        $this->getSmarty()->assign('error', $error);

        $this->getSmarty()->display('templates/form.editar.categoria.tpl');
    }

    //funcion para mostrar la pagina de editar plato
    public function ShowEditPlatos($plato, $error=null){
        $this->getSmarty()->assign('title','Edit');
        $this->getSmarty()->assign('plato', $plato);
        $this->getSmarty()->assign('error', $error);

        $this->getSmarty()->display('templates/form.editar.plato.tpl');
    }

    //creo una funcion general para mostrar errores, y recibo un mensaje por parametro
    //para poder utilizarla muchas veces en diferentes casos.
    public function showError($error){
        $this->getSmarty()->assign('error', "Error");
        $this->getSmarty()->assign('subtitle', $error);
      
        $this->getSmarty()->display('templates/showError.tpl');
    }


}