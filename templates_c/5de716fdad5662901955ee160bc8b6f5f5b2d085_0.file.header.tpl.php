<?php
/* Smarty version 3.1.33, created on 2019-11-08 05:19:34
  from 'C:\xampp\htdocs\Deportes\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc4ecd694d4c1_04699264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5de716fdad5662901955ee160bc8b6f5f5b2d085' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Deportes\\templates\\header.tpl',
      1 => 1573186760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc4ecd694d4c1_04699264 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
    <html lang "es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"content="width=devicewidth", initial-scale="1.0">
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
css/style.css">
        <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>    
    </head>
    <body>
        <header>
        <a href="<?php echo BASE_URL;?>
" ><h1 class="titulo">Olimpiadas</h1></a>
        <div class= "log">
            <a class ="entrar" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
login"><p>LOGIN</p></a>
            <a class ="salir"href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
logout"><p>LOGOUT</p></a>
            <a class ="alumnos"href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
alumnos"><p>ALUMNO</p></a>
        </div>
                </header>

        <h2 id = "menu">Menú</h2>
        <nav class = nonav>
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facultades']->value, 'facultad');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['facultad']->value) {
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
verMas/<?php echo $_smarty_tpl->tpl_vars['facultad']->value->id_facultad;?>
"><?php echo $_smarty_tpl->tpl_vars['facultad']->value->nombre_facultad;?>
</a></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </nav><?php }
}
