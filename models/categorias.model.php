<?php

require_once('model.php');

class CategoriasModel extends Model{

    /**
     * 
     * Retorna todos las categorias almacenadas en la tabla categorias
     */
    public function getAll() {
        $query = $this->getDb()->prepare('SELECT * FROM categorias ORDER BY nombre ASC');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * @param $id
     * return array
     * Retorna toda la info de una categoria que coincida con el id.
     */
    public function get($id) {
        $query = $this->getDb()->prepare('SELECT * FROM categorias WHERE id = ?');
        $query->execute(array($id));

        return $query->fetch(PDO::FETCH_OBJ);
    }

     /**
     * @param $nombre $id
     * Edita una categoria en base al nombre y el id pasado por parámetro
     */
    public function edit($id, $nombre){
        $query = $this->getDb()->prepare('UPDATE categorias SET nombre = ? WHERE id = ?');
        $query->execute([$nombre, $id]);
    }

    /**
     * @param $nombre
     * Agrega un categoria en base al nombre pasado por parámetro
     */
    public function agregar($nombre){
        
        $query = $this->getDb()->prepare("INSERT INTO categorias (nombre) VALUES (?)");
        $query->execute([$nombre]);    
    }

    /**
     * @param $id
     * Elimina un categoria en base al id pasado por parámetro
     */
    public function eliminar($id){
        $query = $this->getDb()->prepare('DELETE FROM categorias WHERE id = ?');
        $query->execute([$id]);
    }
}