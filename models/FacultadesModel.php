<?php
class FacultadesModel{
    //Variables
    private $db;
    //Constructor-> le declaro con que base de datos se va a comunicar
    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=db_olimpiadas;charset=utf8','root','');
    }
    //Obtiene todas las facultades
    public function getFacultades(){
        $query = $this->db->prepare('SELECT * FROM facultad');
        $ok= $query-> execute();
        if(!$ok){
            var_dump($query->errorInfo());
            die();
        }
        $facultades = $query->fetchAll(PDO::FETCH_OBJ);
        return $facultades;
    }
    
    //Obtiene una facultad
    public function getFacultad($id_facultad){
        $query = $this->db->prepare('SELECT * FROM facultad WHERE id_facultad = ?');
        $query-> execute(array($id_facultad));
        $facultad = $query->fetch(PDO::FETCH_OBJ);
        return $facultad;
    }
    //Agrega una facultad
    public function addFacultad($facultad,$sede,$historia, $imagen=null){
        $filepath=null;
        if($imagen){
            $filepath= $this->moveFile($imagen);
        }
        $query=$this->db->prepare('INSERT INTO facultad (nombre_facultad,sede,historia,imagen) VALUES (?,?,?,?)');
        $query->execute(array($facultad,$sede,$historia, $filepath));
        //Devuelve el id de la ultima fila o secuencia insertada
        return $this->db->lastInsertId();
    }
    
    //Mueve el archivo
    private function moveFile($imagen){
        $filepath= "img/". uniqid(). ".".strtolower(pathinfo($imagen["name"], PATHINFO_EXTENSION));
        $filepath= "images/facultad". uniqid(). ".".strtolower(pathinfo($imagen["name"], PATHINFO_EXTENSION));
        move_uploaded_file($imagen['tmp_name'], $filepath);
        
        return $filepath;
    }
    //Edita una facultad
    public function editFacultad($id_facultad,$facultad,$sede,$historia){
        $query=$this->db->prepare('UPDATE facultad SET nombre_facultad=?, sede=?,historia=? WHERE id_facultad=?');
        $ok= $query->execute(array($facultad,$sede,$historia,$id_facultad));
        if(!$ok){
            var_dump($query->errorInfo());
            die();
        }
    }
    //Elimina una facultad
    public function deleteFacultad($id_facultad){
     $query=$this->db->prepare('DELETE FROM facultad WHERE id_facultad=?');
     $query->execute(array($id_facultad));
    }
}