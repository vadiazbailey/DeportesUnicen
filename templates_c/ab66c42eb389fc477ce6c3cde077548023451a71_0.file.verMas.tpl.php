<?php
/* Smarty version 3.1.33, created on 2019-11-26 04:18:08
  from 'C:\xampp\htdocs\DeportesUnicen\templates\verMas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddc9970825b86_58138990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab66c42eb389fc477ce6c3cde077548023451a71' => 
    array (
      0 => 'C:\\xampp\\htdocs\\DeportesUnicen\\templates\\verMas.tpl',
      1 => 1574738283,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:comentarios.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ddc9970825b86_58138990 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section>
    <h1><?php echo $_smarty_tpl->tpl_vars['facultad']->value->nombre_facultad;?>
</h3>
    <h4>Sede: <?php echo $_smarty_tpl->tpl_vars['facultad']->value->sede;?>
</h4>
    <p><?php echo $_smarty_tpl->tpl_vars['facultad']->value->historia;?>
</p>
</section>
<figure>
    <img class="mascota" src="<?php echo $_smarty_tpl->tpl_vars['facultad']->value->imagen;?>
">
</figure>
<?php $_smarty_tpl->_subTemplateRender("file:comentarios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
