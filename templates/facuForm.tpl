{* Administrador *}
{* Formulario para insertar, editar y eliminar facultades *}
{* se conecta con otro formulario "formularioEditar.tpl" *}

<form class="formS" method="POST" action="insertar" enctype="multipart/form-data">
    <label>Insertar nueva facultad</label>
    <input class= "facultad" name="facultad" type="text" placeholder="facultad"value=""/>
    <input class="sede" name="sede" type="text" placeholder="sede"value=""/>
    <input class="historia" name="historia" type="text" placeholder="historia"value=""/>
    <input type="file" name="imagen" id="imageToUpload">
    <button type="submit" class="enviarDatos">Insertar</button>
</form>
{* crea una lista de las facultades *}
{foreach from=$facultades item=facultad}
<li>{$facultad->nombre_facultad}:{$facultad->sede}-<a href='formulario/{$facultad->id_facultad}'>Editar</a> - <a href='eliminar/{$facultad->id_facultad}'>Eliminar</a></li>
{/foreach}
