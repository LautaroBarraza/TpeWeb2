<?php
/* Smarty version 3.1.39, created on 2021-09-23 17:46:09
  from 'C:\xampp\htdocs\web2\pruebatpe\templates\deportistas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614ca14195fb85_64844849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc4ec2fb8d7b8adae7dbc9cceedd577367fc5ed7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\pruebatpe\\templates\\deportistas.tpl',
      1 => 1632411963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./form.tpl' => 1,
  ),
),false)) {
function content_614ca14195fb85_64844849 (Smarty_Internal_Template $_smarty_tpl) {
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
            <li>Deporte: <?php echo $_smarty_tpl->tpl_vars['deportista']->value->deporte;?>
 Deportista: <a href="Deportistas/<?php echo $_smarty_tpl->tpl_vars['deportista']->value->id_deportista;?>
"><?php echo $_smarty_tpl->tpl_vars['deportista']->value->nombre;?>
</a>,<?php echo $_smarty_tpl->tpl_vars['deportista']->value->apellido;?>
</li><a href="deleteTask/<?php echo $_smarty_tpl->tpl_vars['deportista']->value->id_deportista;?>
">borrar</a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <ul>
            <?php $_smarty_tpl->_subTemplateRender("file:./form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
       </body>
        </html><?php }
}
