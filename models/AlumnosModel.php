<?php

class AlumnosModel{
    //Variables
    private $db;

    //Constructor-> le declaro con que base de datos se va a comunicar
    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=db_olimpiadas;charset=utf8','root','');
    }

    //Obtiene el listado de alumnos
    public function getAlumnos(){
        $query= $this->db->prepare('SELECT * FROM alumno');
        $query->execute();
        $alumnos = $query->fetchAll(PDO::FETCH_OBJ);
        return $alumnos;
    }
    //Agrega un alumno
    public function addAlumno($nombre,$apellido,$DNI,$email,$celular, $facultad){
        $query=$this->db->prepare('INSERT INTO alumno (nombre,apellido,DNI,email,celular,id_facultad_fk) VALUES (?,?,?,?,?,?)');
        $query->execute(array($nombre,$apellido,$DNI,$email,$celular, $facultad));  

    }
    //Elimina un alumno
    public function deleteAlumno($id_alumno){
        $query=$this->db->prepare('DELETE FROM alumno WHERE id_alumno=?');
        $query->execute(array($id_alumno));
    }
    
}