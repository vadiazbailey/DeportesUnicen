<?php
/* Smarty version 3.1.33, created on 2019-11-26 00:15:35
  from 'C:\xampp\htdocs\DeportesUnicen\templates\comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddc6097387827_70775555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '297faf0d3f72285a6d3938899e179aad56daa796' => 
    array (
      0 => 'C:\\xampp\\htdocs\\DeportesUnicen\\templates\\comentarios.tpl',
      1 => 1574723726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddc6097387827_70775555 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="app">
    <form id="form-comentario" action="insertar" method="post">
                <input type="text" name="comentario" placeholder="comentario">
        <select name="puntaje">
            <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
    <input type="text" name="id_usuario" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->nombre;?>
">    
    <input type="submit" value="agregar">

</form>
</div>
            </body>

<?php }
}
