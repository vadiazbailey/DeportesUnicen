<?php
/* Smarty version 3.1.33, created on 2019-11-07 21:22:02
  from 'C:\xampp\htdocs\WEB2\Deportes\templates\facuForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc47cea55a901_75554471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '500404655c0af20c42aafa2ded69b41743780e5b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\Deportes\\templates\\facuForm.tpl',
      1 => 1573158062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc47cea55a901_75554471 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="formS" method="POST" action="insertar">
     <label>Insertar nueva facultad</label>
    <input class= "facultad" name="facultad" type="text" placeholder="facultad"value=""/>
    <input class="sede" name="sede" type="text" placeholder="sede"value=""/>
    <input class="historia" name="historia" type="text" placeholder="historia"value=""/>
    <button type="submit" class="enviarDatos">Insertar</button>
</form>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facultades']->value, 'facultad');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['facultad']->value) {
?>
<li><?php echo $_smarty_tpl->tpl_vars['facultad']->value->nombre_facultad;?>
:<?php echo $_smarty_tpl->tpl_vars['facultad']->value->sede;?>
-<a href='formulario/<?php echo $_smarty_tpl->tpl_vars['facultad']->value->id_facultad;?>
'>Editar</a> - <a href='eliminar/<?php echo $_smarty_tpl->tpl_vars['facultad']->value->id_facultad;?>
'>Eliminar</a></li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
