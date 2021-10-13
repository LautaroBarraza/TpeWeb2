<?php
/* Smarty version 3.1.39, created on 2021-10-12 21:21:56
  from '/opt/lampp/htdocs/web2/TpeWeb2/templates/deportistas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6165e0544f6455_91252055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd93fa2e61672a8f3881d5167e70cf8e3a6ec8759' => 
    array (
      0 => '/opt/lampp/htdocs/web2/TpeWeb2/templates/deportistas.tpl',
      1 => 1634065161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6165e0544f6455_91252055 (Smarty_Internal_Template $_smarty_tpl) {
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
            <div>
                <?php if ($_smarty_tpl->tpl_vars['nombreUsuario']->value != null) {?>
                <h1>hola <?php echo $_smarty_tpl->tpl_vars['nombreUsuario']->value;?>
</h1>
                <?php } else { ?>
                <a href="login">login</a>
                <?php }?>
                <a href="logOut">Log Out</a>
            </div>

            <div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['deportes']->value, 'deporte');
$_smarty_tpl->tpl_vars['deporte']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['deporte']->value) {
$_smarty_tpl->tpl_vars['deporte']->do_else = false;
?>
                        <a href='Deporte/<?php echo $_smarty_tpl->tpl_vars['deporte']->value->deporte;?>
'><?php echo $_smarty_tpl->tpl_vars['deporte']->value->deporte;?>
</a>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            

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
</li><a href="deleteDeportista/<?php echo $_smarty_tpl->tpl_vars['deportista']->value->id_deportista;?>
">borrar</a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <ul>

                <?php if ($_smarty_tpl->tpl_vars['rango']->value) {?>
                <form action="insertDeportista" method="post">
                    <input type="text" name="nombre" placeholder="nombre">
                    <input type="text" name="apellido" placeholder="apellido">
                    <input type="number" name="edad" placeholder="edad">
                    <select name="deporte" id="">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['deportes']->value, 'deporte');
$_smarty_tpl->tpl_vars['deporte']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['deporte']->value) {
$_smarty_tpl->tpl_vars['deporte']->do_else = false;
?>
                        <option value='<?php echo $_smarty_tpl->tpl_vars['deporte']->value->id_deporte;?>
'><?php echo $_smarty_tpl->tpl_vars['deporte']->value->deporte;?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                    <button type="submit">Agregar Deportista</button>
                </form>
                <?php }?>
    
       </body>
        </html><?php }
}
