{* Formulario para editar facultades *}
{include file = "header.tpl"}
<form class="formS" method="POST" action="{BASE_URL}editar">
     <label>Editar la facultad seleccionada</label>
    <input class= "facultad" name="facultad" type="text" value="{$facultad->nombre_facultad}"/>
    <input class="sede" name="sede" type="text" value="{$facultad->sede}"/>
    <input class="historia" name="historia" type="text" value="{$facultad->historia}"/>
    <input name="id"  type="hidden" value="{$facultad->id_facultad}"/>
    <button type="submit" class="enviarDatos">Editar</button>
</form>

{include file = "footer.tpl"}