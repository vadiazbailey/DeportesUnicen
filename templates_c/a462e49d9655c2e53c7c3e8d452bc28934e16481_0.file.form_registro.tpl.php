<?php
/* Smarty version 3.1.33, created on 2019-11-08 02:40:10
  from 'C:\xampp\htdocs\Deportes\templates\form_registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc4c77aa1a957_80099168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a462e49d9655c2e53c7c3e8d452bc28934e16481' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Deportes\\templates\\form_registro.tpl',
      1 => 1573176447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dc4c77aa1a957_80099168 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="registrar" method="POST">
    <div>
            <label>Nombre</label>
            <div>
                <input type="text" name="nombre" required autofocus>
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
