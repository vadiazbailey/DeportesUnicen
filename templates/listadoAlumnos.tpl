{include file="header.tpl" }
{* Usuario *}
{* Formulario para insertar, editar y eliminar alumnos *}
{* se conecta con otro formulario "formEditarAlumno.tpl" *}

<form class="formS" method="POST" action="inscribirse">

<label>Datos del alumno</label>

<input class="nombre" name="nombre" type="text" placeholder="Nombre" value=""/>
<input class="apellido" name="apellido" type="text" placeholder="Apellido" value=""/>
<input class="DNI" name="DNI" type="number" placeholder="DNI" value=""/>
<input class="email" name="email" type="email" placeholder="Email" value=""/>
<input class="celular" name="celular" type="number" placeholder="Celular" value=""/>
<select name="facultad">
    {foreach from=$facultades item=facultad }
        <option value="{$facultad->id_facultad}">{$facultad->nombre_facultad}</option>   
    {/foreach}
</select>
    <button type="submit" class="enviarDatos">Inscribirse</button>
</form>
{* crea una lista de los alumnos *}
{foreach from=$alumnos item=alumno}
<li>{$alumno->nombre}:{$alumno->apellido}:{$alumno->DNI}:{$alumno->email}:{$alumno->celular}-<a href='editAlumno/{$alumno->id_alumno}'>Editar</a> - <a href='eliminarAlumno/{$alumno->id_alumno}'>Eliminar</a></li>
{/foreach}
{include file ="footer.tpl"}