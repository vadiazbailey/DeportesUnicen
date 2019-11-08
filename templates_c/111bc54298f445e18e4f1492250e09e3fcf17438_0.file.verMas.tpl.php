<?php
/* Smarty version 3.1.33, created on 2019-11-08 05:20:10
  from 'C:\xampp\htdocs\Deportes\templates\verMas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc4ecfa720fd2_72291908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '111bc54298f445e18e4f1492250e09e3fcf17438' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Deportes\\templates\\verMas.tpl',
      1 => 1573186314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dc4ecfa720fd2_72291908 (Smarty_Internal_Template $_smarty_tpl) {
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
