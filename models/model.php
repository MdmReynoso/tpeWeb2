<?php

class Model {

    private $db;

    function __construct()
    {
        $this->db = $this->create_connection();
    }

    public function create_connection() {
        $db = new PDO('mysql:host=localhost;dbname=comidas_unicen;charset=utf8', 'root', '');
        $host = 'localhost';
        $userName = 'root';
        $password = '';
        $database = 'comidas_unicen';

        try {
            $db = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $userName, $password);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        } catch (Exception $e) {
            var_dump($e);
        }

        return $db;
    }

    public function getDb() {
        return $this->db;
    }
}