<?php
require_once ("routerApi.php");
require_once ("ApiController.php");
    
define ("BASE_URL",'http://' .$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

//recurso solicitado
$resource=$_GET["resource"];

//método utilizado
$method=$_SERVER["REQUEST_METHOD"];

//instancio el router
$router= new Router();

//armo la tabla de ruteo
// rutas
$router->addRoute("Agregar", "POST", "ComentarioApiController", "agregarComentario");
$router->addRoute("facultad/comentarios", "GET", "ComentarioApiController", "getComentarios");
$router->addRoute("facultad/comentarios/:ID", "GET", "ComentarioApiController", "GetComentario");
$router->addRoute("Borrar/:ID", "GET", "ComentarioApiController", "borrarComentario");

//rutea
$router->route($resource,$method);

