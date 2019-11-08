<?php
    require_once("./libs/Smarty.class.php");
    
    class UserView{
        private $smarty;

        public function __construct($facultades){
            //Inicializa smarty
            $this->smarty = new Smarty();
            $this->smarty->assign('URL', URL_OLIMPIADAS); 
            $this->smarty->assign('titulo', 'Olimpiadas');
            //Declaro una variable con el valor de la variable pasada por parametro
            $this->smarty->assign('facultades', $facultades);
        }

        public function displayRegistro(){
            $this->smarty->assign('URL', URL_OLIMPIADAS); 
            $this->smarty->display('./templates/form_registro.tpl');
        }

        public function repeatedMail(){
            $this->smarty->assign('URL', URL_OLIMPIADAS); 
            $this->smarty->display('./templates/form_registro.tpl');
        }

        public function displayLogIn(){
            $this->smarty->assign('URL', URL_OLIMPIADAS); 
            $this->smarty->display('./templates/login.tpl');
        }

    }