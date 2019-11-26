<div id="app">
    <form id="form-comentario" action="insertar" method="post">
        {* {if isset($userName)} *}
        <input type="text" name="comentario" placeholder="comentario">
        <select name="puntaje">
            <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
    <input type="text" name="id_usuario" value="{$usuario->nombre}">    
    {* {foreach from=$comentarios item=comentario}
    <li>{$comentario->comentario}:{$comentario->puntaje}:{$comentario->id_usuario}-<a href='formulario/{$comentario->id_comentario}'>Editar</a> - <a href='eliminar/{$comentario->id_comentario}'>Eliminar</a></li>
    {/foreach} *}
<input type="submit" value="agregar">

</form>
</div>
    {* {/if} *}
    {* <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="js/comentarios.js"></script> *}
    </body>

