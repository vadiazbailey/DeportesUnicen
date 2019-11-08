<?php
require_once ('controllers/FacultadesController.php');
require_once ('controllers/AlumnosController.php');
require_once ('controllers/UserController.php');

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("LOGIN", BASE_URL . 'login');
define("URL_OLIMPIADAS", BASE_URL);
define("ALUMNOS", BASE_URL . 'alumnos');


$action = $_GET['action'];//tomo el valor del action (accion que haga el usuario)
$facultadesController = new FacultadesController();
$alumnosController=new AlumnosController();
$userController = new UserController();

    if($action==''){//si action es nulo se muestra el index de las olimpiadas 
        $facultadesController -> showIndex();
    }
    else{
        if(isset($action)){
        //si el action está seteado
        $url = explode("/", $action);//divido con el explode un string en un array de strings
            if($url[0] == 'login'){
                $userController->displayLogIn();
        }
        elseif($url[0]=="registrarse"){
            $userController->displayRegistro();
            die();
        }
        elseif($url[0]=="registrar"){
            $userController->registerUser();
            die();
        }
        elseif($url[0]=="registrar"){
            $userController->registerUser();
            die();
        }
        elseif($url[0]=="identificar"){
         $userController->logIn();
         die();
        }
        elseif($url[0]=="logout"){
            $userController->logOut();
            die();
        }
        
        elseif($url[0]=="editar"){
         $facultadesController->editFacultad();
         die();
        }
         elseif($url[0]=="insertar"){
            $facultadesController->addFacultad();
            die();
        }
        //Llama a una funcion que muestre un formulario para editar
        elseif($url[0]=="formulario"){
            $facultadesController->displayForm($url[1]);
            die();
           }        
        elseif($url[0]=="eliminar"){
         $facultadesController->deleteFacultad($url[1]);
         die();
        }
        
        //----------------------ALUMNOS---------------------------------
        elseif($url[0]=="alumnos"){
            $alumnosController->getAlumnos();
        }
        // elseif($url[0]=="alumno"){
        //     $alumnosController->editAlumno();
        //     die();
        // }
        elseif($url[0]=="eliminarAlumno"){
            $alumnosController->deleteAlumno($url[1]);
            die();
        }        
        elseif($url[0]=="inscribirse"){
            $alumnosController->addAlumno();
            die();
        }  
        elseif($url[0]=="editAlumno"){
            $alumnosController->editAlumno();
            die();
           }     
        elseif($url[0]=="verMas"){
            $facultadesController->verMas($url[1]);
        }
    }

}