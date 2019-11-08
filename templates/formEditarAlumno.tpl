{* Formulario para editar alumnos *}
{include file= header.tpl}
<form class="formulario" method="POST" action="{BASE_URL}editAlumno">
     <label>Editar información sobre alumno seleccionado</label>
    <input class= "alumno" name="alumno" type="text" value="{$alumno->nombre}"/>
    <input class="apellido" name="apellido" type="text" value="{$alumno->apellido}"/>
    <input class="DNI" name="DNI" type="number" value="{$alumno->DNI}"/>
    <input class="email" name="email" type="email" value="{$alumno->email}"/>
    <input class="celular" name="celular" type="number" value="{$alumno->celular}"/>
    <input name="id"  type="hidden" value="{$alumno->id_alumno}"/>
    <button type="submit" class="enviarDatos">Editar Alumno</button>
</form>
{include file=footer.tpl}