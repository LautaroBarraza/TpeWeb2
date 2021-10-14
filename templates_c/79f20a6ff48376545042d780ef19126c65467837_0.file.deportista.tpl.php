<?php
/* Smarty version 3.1.39, created on 2021-10-13 03:49:21
  from '/opt/lampp/htdocs/web2/TpeWeb2/templates/deportista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61663b21eaa8b8_21740613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79f20a6ff48376545042d780ef19126c65467837' => 
    array (
      0 => '/opt/lampp/htdocs/web2/TpeWeb2/templates/deportista.tpl',
      1 => 1634072155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61663b21eaa8b8_21740613 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
        <html lang="en">
        <head>

            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        </head>
        <body>
        <a href="logOut">Log Out</a>
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
