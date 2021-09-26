<?php
/* Smarty version 3.1.39, created on 2021-09-23 17:56:41
  from 'C:\xampp\htdocs\web2\pruebatpe\templates\deportista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614ca3b9e6a654_39785596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08e440f691447809d868b5430f5794b93641e054' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\pruebatpe\\templates\\deportista.tpl',
      1 => 1632412598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614ca3b9e6a654_39785596 (Smarty_Internal_Template $_smarty_tpl) {
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
            <li><?php echo $_smarty_tpl->tpl_vars['deportista']->value->nombre;?>
,<?php echo $_smarty_tpl->tpl_vars['deportista']->value->apellido;?>
</li>
            <li><?php echo $_smarty_tpl->tpl_vars['deportista']->value->edad;?>
</li>
            <li><?php echo $_smarty_tpl->tpl_vars['deportista']->value->deporte;?>
</li>
            <ul>
    
       </body>
        </html><?php }
}
