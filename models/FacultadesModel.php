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
    // public function getFacultad($fNombre){
    //     $query=$this->db->prepare('SELECT * FROM facultad WHERE nombre_facultad=?');
    //     $query->execute(array($fNombre));
    //     return $query->fetch(PDO::FETCH_OBJ);
    // }



    //Agrega una facultad
    public function addFacultad($facultad,$sede,$historia){
        $query=$this->db->prepare('INSERT INTO facultad (nombre_facultad,sede,historia) VALUES (?,?,?)');
        $query->execute(array($facultad,$sede,$historia));
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