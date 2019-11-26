<?php
require_once ("FacultadesModel.php");
require_once ("./api/ApiController.php"); 
require_once ("./api/JSONView.php"); 

class FacultadesApiController extends ApiController{

    public function agregarComentario($params = []){
        $body = $this->getData();

        //inserta el comentario
        $id_facultad = $body->id_facultad;
        $usuario = $body-> usuario;
        $comentario = $body-> comentario;
        $facultad = $this->model-> addFacultad(id_facultad,$usuario,$comentario);
    }

    public function getComentarios($params=null){
        $comentario = $this->model->getComentarios();
        $this->view-> response($comentario, 200);
    }

    public function getComentario($params = []){
        $id_facultad = $params[':ID'];
        $comentario= $this->model->getComentario($id_facultad);
        $this->view->response($comentario, 200);
    }

    public function borrarComentario($params= []){
        $id_facultad= $params [':ID'];
        $comentario= $this->model->getComentario($id_facultad);

        if($comentario){
            $this->model->borrarComentario();
            $this->view->response("Comentario ID: $id_facultad eliminado con éxito", 200);
        }
        else{
            $this->view->response("Comentario ID:$id_facultad not found", 404);
        }
    }
}