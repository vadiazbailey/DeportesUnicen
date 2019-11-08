<?php
/* Smarty version 3.1.33, created on 2019-11-08 20:45:52
  from 'C:\xampp\htdocs\Deportes\templates\formEditarAlumno.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc5c5f0a482a3_96320811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '373e5aecfaaa10e1f9a4baeabff0aaa76d166907' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Deportes\\templates\\formEditarAlumno.tpl',
      1 => 1573242315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dc5c5f0a482a3_96320811 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form class="formS" method="POST" action="<?php echo BASE_URL;?>
editAlumno">
     <label>Editar información sobre alumno seleccionado</label>
    <input class= "alumno" name="nombre" type="text" value="<?php echo $_smarty_tpl->tpl_vars['alumno']->value->nombre;?>
"/>
    <input class="apellido" name="apellido" type="text" value="<?php echo $_smarty_tpl->tpl_vars['alumno']->value->apellido;?>
"/>
    <input class="DNI" name="DNI" type="number" value="<?php echo $_smarty_tpl->tpl_vars['alumno']->value->DNI;?>
"/>
    <input class="email" name="email" type="email" value="<?php echo $_smarty_tpl->tpl_vars['alumno']->value->email;?>
"/>
    <input class="celular" name="celular" type="number" value="<?php echo $_smarty_tpl->tpl_vars['alumno']->value->celular;?>
"/>
    <input class="facultad" name="facultad" type="text" value="<?php echo $_smarty_tpl->tpl_vars['alumno']->value->id_facultad;?>
"/>
    <input name="id"  type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['alumno']->value->id_alumno;?>
"/>
    <button type="submit" class="enviarDatos">Editar Alumno</button>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
