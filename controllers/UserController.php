<?php
    require_once ("./views/userView.php");
    require_once ("./models/userModel.php");

    require_once ('./models/FacultadesModel.php');

    class UserController{
        private $viewUser;
        private $modelUser;

        private $modelFacultades;
        private $modelAlumnos;

        public function __construct(){
            $this->modelUser = new UserModel();

            $this->modelFacultades = new FacultadesModel();
            $facultades= $this->modelFacultades->getFacultades();
            $this->viewUser = new UserView($facultades);
        }

        public function displayRegistro(){
            $this->viewUser->displayRegistro();
        }

        public function registerUser(){
            $name = $_POST['nombre'];
            $mail = $_POST['email'];
            $password = $_POST['password'];
            $users = $this->modelUser->getUsers();
            if ((isset($users))&&($users!=null)){
                foreach ($users as $user) {
                    if ($mail==$user->email){
                        $this->viewUser->repeatedMail();
                    }
                }
            }
            $this->modelUser->insertUser($name, $mail, $password);
            header("Location: " . BASE_URL);
        }

        public function logIn(){
            
            $password = $_POST['password'];

            $usuario = $this->modelUser->getUser($_POST['email']);

            if (isset($usuario) && $usuario != null && password_verify($password, $usuario->password)){
                session_start();
                $_SESSION['user'] = $usuario->email;
                $_SESSION['userId'] = $usuario->id_usuario;
                header("Location: " . BASE_URL);
            }else{
                $message = "Usuario o contraseña incorrectos"; //Preguntar como mandar alerta
                echo "<script type='text/javascript'>alert('$message');</script>";
                header("Location: " . URL_LOGIN);
            }
        }

        public function logOut(){
            session_start();
            session_destroy();
            header("Location: ". BASE_URL);
        }

        public function displayLogIn(){
            $this->viewUser->displayLogIn();
        }


        public function checkLogIn(){  //Chequea que haya algún usuario logueado
            session_start();
            
            if(!isset($_SESSION['userId'])){
                header("Location: " . BASE_URL);
                die();
            }
            if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 5000)) { 
                header("Location: " . URL_LOGOUT);
                die(); // destruye la sesión, y vuelve al login
            } 
            $_SESSION['LAST_ACTIVITY'] = time();
        }
    }