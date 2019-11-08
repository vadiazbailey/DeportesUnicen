<?php
/* Smarty version 3.1.33, created on 2019-11-08 14:50:12
  from 'C:\xampp\htdocs\Deportes\templates\formularioEditar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc57294b43bf7_24269925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '939dab56300e25abda83bb46dfda1859cc991559' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Deportes\\templates\\formularioEditar.tpl',
      1 => 1573186760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dc57294b43bf7_24269925 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form class="formulario" method="POST" action="<?php echo BASE_URL;?>
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
    <button type="submit" class="enviarDatos">Editar</button>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
