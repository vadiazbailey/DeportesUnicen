<?php
/* Smarty version 3.1.33, created on 2019-11-08 02:03:52
  from 'C:\xampp\htdocs\Deportes\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc4bef8332343_32142763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5b85d6c8657bfbd3a42a195401a4a5234ec51f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Deportes\\templates\\login.tpl',
      1 => 1573174918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dc4bef8332343_32142763 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <form action="identificar" method="POST">
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
                <button type="submit">Log In</button>
                <a href="registrarse"><input type="button" value="Registrarse" name="register"></a>
            </div>
        </div>
    </form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
