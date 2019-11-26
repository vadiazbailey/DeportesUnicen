<?php
/* Smarty version 3.1.33, created on 2019-11-26 05:01:29
  from 'C:\xampp\htdocs\DeportesUnicen\templates\form_registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddca399106091_41938725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '352310479aebed6e5296f4a1410895564a30896d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\DeportesUnicen\\templates\\form_registro.tpl',
      1 => 1573222805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ddca399106091_41938725 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form action="registrar" method="POST">

        <div>
            <label>Nombre</label>
            <div>
                <input type="text" name="nombre" required autofocus>
            </div>
        </div>

        <div>
            <label>E-Mail</label>
            <div>
                <input type="email" name="email" required autofocus>
            </div>
        </div>

        <div>
            <label>Password</label>
            <div>
                <input type="password" name="password" required>
            </div>
        </div>

        <div>
            <button type="submit">Enviar</button>
        </div>
    </div>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
