<?php

//Llama a la libreria de Smarty
require_once ('./libs/Smarty.class.php');

class AlumnosView{
    //Variables
    private $smarty;

    //Constructor
    public function __construct(){
        //Inicializa smarty
        $this->smarty = new Smarty();
        $this->smarty->assign('BASEURL', BASE_URL); 
    }

    //Vista de los alumnos
    public function displayAlumnos($alumnos, $facultades){
        $this->smarty->assign('URL', URL_OLIMPIADAS);
        $this->smarty->assign('ALUMNOS', ALUMNOS);
        $this->smarty->assign('titulo', 'Olimpiadas');
        $this ->smarty->assign('alumnos', $alumnos);
        $this ->smarty->assign('facultades', $facultades);
        $this ->smarty-> display('templates/listadoAlumnos.tpl');
    }

    public function displayFormAlumno($alumno){
        $this ->smarty-> assign ('alumno', $alumno);
        $this ->smarty-> display('templates/formEditarAlumno.tpl');
    }

    public function displayAdministrador($alumnos, $facultades){
        $this ->smarty->assign('facultades', $facultades);
        $this ->smarty->assign('alumnos', $alumnos);
        $this ->smarty->display('templates/facuForm.tpl');
        $this ->smarty-> display('templates/formularioEditar.tpl');
    }
}