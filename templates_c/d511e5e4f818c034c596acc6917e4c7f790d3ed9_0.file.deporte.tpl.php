<?php
/* Smarty version 3.1.39, created on 2021-10-03 19:12:53
  from 'C:\xampp\htdocs\web2\TpeWeb2\templates\deporte.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6159e4956a2c30_06465848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd511e5e4f818c034c596acc6917e4c7f790d3ed9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TpeWeb2\\templates\\deporte.tpl',
      1 => 1633281088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6159e4956a2c30_06465848 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
        <html lang="en">
        <head>

            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

            <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['deportistas']->value, 'deportista');
$_smarty_tpl->tpl_vars['deportista']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['deportista']->value) {
$_smarty_tpl->tpl_vars['deportista']->do_else = false;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['deportista']->value->nombre;?>
,<?php echo $_smarty_tpl->tpl_vars['deportista']->value->apellido;?>
</li>
            <li><?php echo $_smarty_tpl->tpl_vars['deportista']->value->edad;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <ul>
    
       </body>
        </html><?php }
}
