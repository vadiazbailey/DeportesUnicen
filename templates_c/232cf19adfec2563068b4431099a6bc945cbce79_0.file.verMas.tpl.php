<?php
/* Smarty version 3.1.33, created on 2019-11-08 04:44:11
  from 'C:\xampp2\htdocs\Deportes\templates\verMas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc4e48b18ffb1_57544672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '232cf19adfec2563068b4431099a6bc945cbce79' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\Deportes\\templates\\verMas.tpl',
      1 => 1573183434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dc4e48b18ffb1_57544672 (Smarty_Internal_Template $_smarty_tpl) {
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
