<?php

require_once('model.php');

class UserModel extends Model {

    /**
     * @param $username
     * Trae toda la info de un usuario que coincida con el nombre pasado por parametro.
     */
    public function getUserByUsername($username) {
        $query = $this->getDb()->prepare('SELECT * FROM `user` WHERE nombre = ?');
        $query->execute(array(($username)));
        return $query->fetch(PDO::FETCH_OBJ);
    }

     /**
     * @param $user $name
     * Cargo un usuario en la base de datos
     */
    public function add($user, $pass) {
        //encripto la contraseña
        $passEnc = password_hash($pass, PASSWORD_DEFAULT);
        
        $query = $this->getDb()->prepare("INSERT INTO user (nombre, password) VALUES (?, ?)");
        $query->execute([$user, $passEnc]);

    }
}