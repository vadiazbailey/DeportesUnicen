<?php
    class UserModel{
        private $db;

        public function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_olimpiadas;charset=utf8', 'root', '');
        }

        public function insertUser($nombre, $mail, $password){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $query = $this->db->prepare('INSERT INTO usuarios(nombre, email, password) VALUES (?,?,?)');
            $ok = $query->execute(array($nombre, $mail, $hash));
            if (!$ok){
                var_dump($query->errorInfo());
                die();
            }
        }

        public function getUsers(){

            $query = $this->db->prepare('SELECT * FROM usuarios');
            $ok = $query->execute();
            if (!$ok){
                var_dump($query->errorInfo());
                die();
            }
            $users = $query->fetchALL(PDO::FETCH_OBJ);
            return $users;
        }

        public function getUser($mail){
            
            $sentencia = $this->db->prepare( "SELECT * FROM usuarios WHERE email = ?");
            $sentencia->execute(array($mail));
        
            $user = $sentencia->fetch(PDO::FETCH_OBJ);
        
            return $user;
        }
    }