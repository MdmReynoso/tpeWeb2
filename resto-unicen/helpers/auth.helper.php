<?php

class AuthHelper {

    public function __construct() {
    
    }
    //inicia sesion.
    static private function start() {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
    }

    //inicia sesion y guarda la info de quien inicio la misma.
    static public function login($user) {
        self::start();
        $_SESSION['IS_LOGGED'] = true;
        $_SESSION['ID_USER'] = $user->id;
        $_SESSION['USERNAME'] = $user->nombre;
    }

    //destruye la sesion.
    public static function logout() {
        self::start();
        session_destroy();
    }

    //obtengo el nombre del usuario loggeado.
    public static function getLoggedUserName() {
        self::start();
        if (isset($_SESSION['USERNAME'])) {
            return $_SESSION['USERNAME'];
        } else {
            return false;
        }
    }

}