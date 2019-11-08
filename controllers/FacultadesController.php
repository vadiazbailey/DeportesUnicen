<?php

require_once ('./models/FacultadesModel.php');
require_once ('./views/FacultadesView.php');

require_once ('./controllers/UserController.php');

class FacultadesController{
    //Variables
    private $model;
    private $view;

    private $userController;

    //Constructor
    public function __construct(){
        $this->model = new FacultadesModel();
        //Creamos esta variable en el contructor porque se reitera en varias funciones.
        $facultades= $this->model->getFacultades();
        $this->view = new FacultadesView($facultades);

        $this->userController = new UserController();

        session_start(); //Fijarme si esta bien esto!!!!!
    }

    //Función que muestra el Home
    public function showIndex(){
        $this->view->displayIndex();
    }

    //Función que muestra todas las facultades
    public function getFacultades(){
        $this->view->displayFacultades();
    }

    //Función que muestra una facultad
    public function getFacultad($id_facultad){
        $facultad = $this->model->getFacultad($id_facultad);
        $this->view->displayFacultad($facultad);
    }
    
    //Función que agrega una facultad
    public function addFacultad(){
        $this->userController->checklogin();

        if(isset($_POST['facultad'])&&($_POST['sede'])&&($_POST['historia'])){
            $facultad=($_POST['facultad']);
            $sede=($_POST['sede']);
            $historia=($_POST['historia']);
        }
        $this->model->addFacultad($facultad,$sede,$historia);
        header ("Location: " . URL_OLIMPIADAS);
    }
    //Función que edita una facultad
  
    public function editFacultad(){
        $this->userController->checklogin();

        if(isset($_POST['facultad'])&&($_POST['sede'])&&($_POST['historia'])){

            $id_facultad = ($_POST['id']);
            $facultad=($_POST['facultad']);
            $sede=($_POST['sede']);
            $historia=($_POST['historia']);
        }

         $this->model->editFacultad($id_facultad, $facultad, $sede, $historia);
         header ("Location: " . URL_OLIMPIADAS);
    }
    

   //Función que muestra un formulario para editar
    public function displayForm($id_facultad){
        $facultad = $this->model->getFacultad($id_facultad);
        $this->view->displayForm($facultad);
    }

    //Función que elimina una facultad
    public function deleteFacultad($id_facultad){
        $this->userController->checklogin();

        $this->model->deleteFacultad($id_facultad);
        header ("Location: " . URL_OLIMPIADAS);
    }

    public function verMas($id) {
        $facultad = $this->model->getFacultad($id);
        $this->view->displayVerMas($facultad);
    }
}
