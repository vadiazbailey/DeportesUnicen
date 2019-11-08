<!DOCTYPE html>
    <html lang "es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"content="width=devicewidth", initial-scale="1.0">
        {*Estilo de los logos de las redes sociales*}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{$URL}css/style.css">
        <title>{$titulo}</title>    
    </head>
    <body>
        <header>
        <a href="{BASE_URL}" ><h1 class="titulo">Olimpiadas</h1></a>
        <div class= "log">
            <a class ="entrar" href="{$URL}login"><p>LOGIN</p></a>
            <a class ="salir"href="{$URL}logout"><p>LOGOUT</p></a>
            <a class ="alumnos"href="{$URL}alumnos"><p>ALUMNO</p></a>
        </div>
        {* <img class="logo" src="../images/logodeporte.jpg" alt="logo de deportes de la unicen" /> *}
        </header>

        <h2 id = "menu">Menú</h2>
        <nav class = nonav>
            <ul>
                {foreach from= $facultades item=facultad}
                    <li><a href="{$URL}verMas/{$facultad->id_facultad}">{$facultad->nombre_facultad}</a></li>
                {/foreach}
            </ul>
        </nav>