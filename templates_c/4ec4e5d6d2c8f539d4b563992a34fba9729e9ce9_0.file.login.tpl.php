<?php
/* Smarty version 3.1.33, created on 2019-11-22 23:30:13
  from 'C:\xampp2\htdocs\DeportesUnicen\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd86175bc9db9_63789141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ec4e5d6d2c8f539d4b563992a34fba9729e9ce9' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\DeportesUnicen\\templates\\login.tpl',
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
function content_5dd86175bc9db9_63789141 (Smarty_Internal_Template $_smarty_tpl) {
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
