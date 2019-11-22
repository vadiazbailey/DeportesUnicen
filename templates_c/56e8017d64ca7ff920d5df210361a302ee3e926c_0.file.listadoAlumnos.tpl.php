<?php
/* Smarty version 3.1.33, created on 2019-11-22 23:30:04
  from 'C:\xampp2\htdocs\DeportesUnicen\templates\listadoAlumnos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd8616c1d0048_72554415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56e8017d64ca7ff920d5df210361a302ee3e926c' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\DeportesUnicen\\templates\\listadoAlumnos.tpl',
      1 => 1574460675,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dd8616c1d0048_72554415 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form class="formS" method="POST" action="inscribirse">

<label>Datos del alumno</label>

<input class="nombre" name="nombre" type="text" placeholder="Nombre" value=""/>
<input class="apellido" name="apellido" type="text" placeholder="Apellido" value=""/>
<input class="DNI" name="DNI" type="number" placeholder="DNI" value=""/>
<input class="email" name="email" type="email" placeholder="Email" value=""/>
<input class="celular" name="celular" type="number" placeholder="Celular" value=""/>
<select name="facultad">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facultades']->value, 'facultad');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['facultad']->value) {
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['facultad']->value->id_facultad;?>
"><?php echo $_smarty_tpl->tpl_vars['facultad']->value->nombre_facultad;?>
</option>   
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
    <button type="submit" class="enviarDatos">Inscribirse</button>
</form>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['alumnos']->value, 'alumno');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['alumno']->value) {
?>
<li><?php echo $_smarty_tpl->tpl_vars['alumno']->value->nombre;?>
:<?php echo $_smarty_tpl->tpl_vars['alumno']->value->apellido;?>
:<?php echo $_smarty_tpl->tpl_vars['alumno']->value->DNI;?>
:<?php echo $_smarty_tpl->tpl_vars['alumno']->value->email;?>
:<?php echo $_smarty_tpl->tpl_vars['alumno']->value->celular;?>
-<a href='edit/<?php echo $_smarty_tpl->tpl_vars['alumno']->value->id_alumno;?>
'>Editar</a> - <a href='eliminarAlumno/<?php echo $_smarty_tpl->tpl_vars['alumno']->value->id_alumno;?>
'>Eliminar</a></li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
