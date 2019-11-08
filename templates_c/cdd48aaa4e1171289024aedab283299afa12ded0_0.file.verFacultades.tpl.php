<?php
/* Smarty version 3.1.33, created on 2019-11-07 03:40:45
  from 'C:\xampp\htdocs\Deportes\templates\verFacultades.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc3842debff20_20294850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdd48aaa4e1171289024aedab283299afa12ded0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Deportes\\templates\\verFacultades.tpl',
      1 => 1573094440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dc3842debff20_20294850 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class= "historia">
    <h2><?php echo $_smarty_tpl->tpl_vars['facultad']->value->nombre_facultad;?>
</h2>
    <h3>Historia</h3> 
    <p><?php echo $_smarty_tpl->tpl_vars['facultad']->value->historia;?>
</p> 
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
