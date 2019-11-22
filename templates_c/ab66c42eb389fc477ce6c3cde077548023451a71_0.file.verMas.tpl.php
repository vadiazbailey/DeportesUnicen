<?php
/* Smarty version 3.1.33, created on 2019-11-22 23:41:37
  from 'C:\xampp\htdocs\DeportesUnicen\templates\verMas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd86421086156_75528582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab66c42eb389fc477ce6c3cde077548023451a71' => 
    array (
      0 => 'C:\\xampp\\htdocs\\DeportesUnicen\\templates\\verMas.tpl',
      1 => 1574462427,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dd86421086156_75528582 (Smarty_Internal_Template $_smarty_tpl) {
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
