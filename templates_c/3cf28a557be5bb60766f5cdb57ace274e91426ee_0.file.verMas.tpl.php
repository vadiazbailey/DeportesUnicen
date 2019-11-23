<?php
/* Smarty version 3.1.33, created on 2019-11-23 04:35:14
  from 'C:\xampp2\htdocs\DeportesUnicen\templates\verMas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd8a8f2dbfdc5_42030848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cf28a557be5bb60766f5cdb57ace274e91426ee' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\DeportesUnicen\\templates\\verMas.tpl',
      1 => 1574462880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dd8a8f2dbfdc5_42030848 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h3><?php echo $_smarty_tpl->tpl_vars['facultad']->value->nombre_facultad;?>
</h3>
<h4><?php echo $_smarty_tpl->tpl_vars['facultad']->value->sede;?>
</h4>
<p><?php echo $_smarty_tpl->tpl_vars['facultad']->value->historia;?>
</p>
<figure>
    <img class="mascota" src="<?php echo $_smarty_tpl->tpl_vars['facultad']->value->imagen;?>
">
</figure>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
