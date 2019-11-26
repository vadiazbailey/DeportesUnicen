<?php
/* Smarty version 3.1.33, created on 2019-11-26 02:36:09
  from 'C:\xampp\htdocs\DeportesUnicen\templates\formularioEditar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddc8189708390_41985670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc8682a7419dc274a2fc66a119149e378b75b562' => 
    array (
      0 => 'C:\\xampp\\htdocs\\DeportesUnicen\\templates\\formularioEditar.tpl',
      1 => 1574731795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ddc8189708390_41985670 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form class="formS" method="POST" action="<?php echo BASE_URL;?>
editar">
     <label>Editar la facultad seleccionada</label>
    <input class= "facultad" name="facultad" type="text" value="<?php echo $_smarty_tpl->tpl_vars['facultad']->value->nombre_facultad;?>
"/>
    <input class="sede" name="sede" type="text" value="<?php echo $_smarty_tpl->tpl_vars['facultad']->value->sede;?>
"/>
    <input class="historia" name="historia" type="text" value="<?php echo $_smarty_tpl->tpl_vars['facultad']->value->historia;?>
"/>
    <input name="id"  type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['facultad']->value->id_facultad;?>
"/>
    <input type="file" name="imagen" id="imageToUpload"/>
    <button type="submit" class="enviarDatos">Editar</button>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
