<?php
require_once('models/categorias.model.php');
require_once('views/view.platos.categorias.php');

class CategoriasController {
    
    private $view;
    private $modelcategorias;

    //En el constructor hago las conecciones a las 2 bases de datos y
    //a la vista para poder usarlas dentro de esta clase.
    public function __construct(){
        $this->modelcategorias = new CategoriasModel();
        $this->view = new PlatosCategoriasView();  
    }
    
//funcion para mostrar el formulario de editar con la info precargada del categoria que coincida
    //con el id pasado por parametro (cuando aprieto el boton en la lista de categorias)
    public function ShowEditar($id, $error=null){
        
        if (!empty($_POST['categoria'])) {
            $id = $_POST['categoria'];  
        } 
        $categoria= $this->modelcategorias->get($id);
        
        $this->view->ShowEditCategoria($categoria, $error);
    }

    //funcion para editar una categoria,si esta vacio el nombre, vuelve a mostrar el formulario con un
    //mensaje de error
    public function editar(){
        
        $id = $_POST['categoria'];
        $nombre = $_POST['nombre'];

        if(!empty($_POST['nombre'])) {
            $this->modelcategorias->edit($id, $nombre);
            header("Location: " . BASE_URL . 'platos');
         } else
            $this->ShowEditar($id, "Error, nombre vacio");
    }
    //funcion para agregar una categoria
    public function agregar(){
        $nombre = $_POST['nombre'];

        //chequeo que no este vacio y ahi si lo agrego
        if (!empty($_POST['nombre'])) {
            $this->modelcategorias->agregar($nombre);
            header("Location: " . BASE_URL . 'platos');
        } else  $this->view->showError("No es posible agregar categorias vacios");
    }
    //funcion para eliminar una categoria de la base que coincida con el id 
    public function eliminar($id){
        if (!empty($_POST['categoria'])) {
            $id = $_POST['categoria'];  
        } 
        $this->modelcategorias->eliminar($id);
        header("Location: " . BASE_URL . 'platos');
    }
}