<?php
require_once ("routerApi.php");
require_once ("FacultadesApiController.php");
    
define ("BASE_URL",'http://' .$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

//recurso solicitado
$resource=$_GET["resource"];

//método utilizado
$method=$_SERVER["REQUEST_METHOD"];

//instancio el router
$router= new Router();

//armo la tabla de ruteo
$router->addRoute("facultades","GET","FacultadesApiController.php","getFacultades"); 


//seguir






//rutea
$router->route($resource,$method);

