<?php
/* Smarty version 3.1.33, created on 2019-11-07 21:58:22
  from 'C:\xampp\htdocs\WEB2\Deportes\templates\verMas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc4856eeb7af8_16549136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8768181cfdd100cc89d5c91a0a3a42942638646f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\Deportes\\templates\\verMas.tpl',
      1 => 1573160301,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dc4856eeb7af8_16549136 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h3><?php echo $_smarty_tpl->tpl_vars['facultad']->value->nombre_facultad;?>
</h3>
<h4><?php echo $_smarty_tpl->tpl_vars['facultad']->value->sede;?>
</h4>
<p><?php echo $_smarty_tpl->tpl_vars['facultad']->value->historia;?>
</p>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
