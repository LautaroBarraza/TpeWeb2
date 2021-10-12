<?php
/* Smarty version 3.1.39, created on 2021-10-12 08:05:27
  from 'C:\xampp\htdocs\web2\TpeWeb2\templates\deportistas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616525a7be20f4_76001588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfe1bd06756a06cc4807e04feef3aed57dabcb40' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TpeWeb2\\templates\\deportistas.tpl',
      1 => 1634018721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616525a7be20f4_76001588 (Smarty_Internal_Template $_smarty_tpl) {
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

            <a href="logOut">Log Out</a>

            <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['deportistas']->value, 'deportista');
$_smarty_tpl->tpl_vars['deportista']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['deportista']->value) {
$_smarty_tpl->tpl_vars['deportista']->do_else = false;
?>
            <li>Deporte: <a href="Deporte/<?php echo $_smarty_tpl->tpl_vars['deportista']->value->deporte;?>
"><?php echo $_smarty_tpl->tpl_vars['deportista']->value->deporte;?>
</a> Deportista: <a href="Deportistas/<?php echo $_smarty_tpl->tpl_vars['deportista']->value->id_deportista;?>
"><?php echo $_smarty_tpl->tpl_vars['deportista']->value->nombre;?>
</a>,<?php echo $_smarty_tpl->tpl_vars['deportista']->value->apellido;?>
</li><a href="deleteTask/<?php echo $_smarty_tpl->tpl_vars['deportista']->value->id_deportista;?>
">borrar</a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <ul>

                <?php if ($_smarty_tpl->tpl_vars['rango']->value) {?>
                <form action="" method="post">
                    <input type="text" name="deportista">
                    <input type="text" name="deporte">
                    <input type="text" name="nombre">
                </form>
                <?php }?>
    
       </body>
        </html><?php }
}
