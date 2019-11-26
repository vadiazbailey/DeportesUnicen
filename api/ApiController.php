<?php
abstract class ApiController {
    protected $model;
    protected $view;
    private $data; 
    public function __construct() {
        $this->view = new JSONView();
        //Lee todo el archivo en una cadena
        $this->data = file_get_contents("php://input"); 
        //
        $this->model= new  ComentariosModel();
    }
    //decodifica una cadena json(json_decode)
    public function getData(){ 
        return json_decode($this->data); 
    }  
}