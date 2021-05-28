<?php
require_once('controllers/categorias.controller.php');
require_once('controllers/platos.controller.php');
require_once('controllers/user.controller.php');

    // definimos la base url de forma dinamica
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    // define una acción por defecto
    if (empty($_GET['action'])) {
        $_GET['action'] = 'menu';
    } 

    // toma la acción que viene del usuario y parsea los parámetros
    $accion = $_GET['action']; 
    $parametros = explode('/', $accion); //con el explode parseo la url

    $CategoriaController =new CategoriasController();
    $PlatosController = new PlatosController();
    $UserController = new UserController();

    // decide que camino tomar según TABLA DE RUTEO
    switch ($parametros[0]) {
        case 'home':
            $PlatosController -> showHome();
            break;
         case 'platos':
             $PlatosController -> showAllPlatos();
             break;
         case 'descripcion':
             $PlatosController -> showDescripcion($param[1]);
             break;

             case 'categoria':
                $PlatosController -> showNacionalidad($param[1]);
                break;
            
         case 'categoria':
             $PlatosController -> showPlatos($param[1]);
             break;
         case 'admin':
             $PlatosController -> showAdmin();
             break;
         case 'formEditarCategoria':
             $CategoriasController -> ShowEditar($param[1]);
             break;
         case 'editarCategoria':
             $CategoriasController -> editar();
             break;    
         case 'eliminarCategoria':
             $CategoriasController -> eliminar($param[1]);
             break;
         case 'agregarCategoria':
             $CategoriasController -> agregar();
             break;
         case 'formEditarPlato':
             $PlatosController -> ShowEditar($param[1]);
             break;
         case 'editarPlato':
             $PlatosController -> editar();
             break;
         case 'agregarPlato':
             $PlatosController -> agregar();
             break;
         case 'eliminarPlato':
             $PlatosController -> eliminar($param[1]);
             break;
         case 'formRegistro':
             $UserController -> showRegister();
             break;  
         case 'registrar':
             $UserController -> registrar();
             break;
         case 'login':
             $UserController -> showLogin();
             break;    
         case 'verificar':
             $UserController -> verificar();
             break;  
         case 'logout':
             $UserController -> logout();
             break;   
         default:
             $PlatosController -> showError("Pagina no encontrada");
     }
?>
