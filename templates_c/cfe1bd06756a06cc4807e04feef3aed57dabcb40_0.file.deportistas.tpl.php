<?php
/* Smarty version 3.1.39, created on 2021-10-14 03:17:13
  from 'C:\xampp\htdocs\web2\TpeWeb2\templates\deportistas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616785195748d3_99215732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfe1bd06756a06cc4807e04feef3aed57dabcb40' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TpeWeb2\\templates\\deportistas.tpl',
      1 => 1634174199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616785195748d3_99215732 (Smarty_Internal_Template $_smarty_tpl) {
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
</li>
                    <?php if ($_smarty_tpl->tpl_vars['rango']->value) {?>
                        <a href="deleteDeportista/<?php echo $_smarty_tpl->tpl_vars['deportista']->value->id_deportista;?>
">borrar</a>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <ul>

                <?php if ($_smarty_tpl->tpl_vars['rango']->value) {?>
                <div>
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
                </div>
                <div>
                    <form action="insertDeporte" method="post">
                        <input type="text" name="deporte">
                        <button type="submit">Agregar Deporte</button>
                    </form>
                </div>
               
                <div>
                    <form action="updateDeportista" method="post">
                        <select name="deportistaEdit" id="">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['deportistas']->value, 'deportista');
$_smarty_tpl->tpl_vars['deportista']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['deportista']->value) {
$_smarty_tpl->tpl_vars['deportista']->do_else = false;
?>
                                <option value='<?php echo $_smarty_tpl->tpl_vars['deportista']->value->id_deportista;?>
'><?php echo $_smarty_tpl->tpl_vars['deportista']->value->apellido;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <input type="text" name="nombreEdit" id="" placeholder="actualice nombre de deportista">
                        <input type="text" name="apellidoEdit" placeholder="apellido">
                        <input type="number" name="edadEdit" placeholder="edad">
                        <select name="deporteEdit" id="">
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
                        <button type="submit">actualizar deportista</button>
                    </form>
                </div>
               
                <div>
                    <form action="deleteDeporte" method="post">
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
                        <button type="submit">borrar Deporte</button>
                    </form>
                </div>
                <div>
                    <form action="updateDeporte" method="post">
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
                        <input type="text" name="deporteEditado" id="" placeholder="actualice nombre de deporte">
                        <button type="submit">actualizar Deporte</button>
                    </form>
                </div>
                <?php }?>
    
       </body>
        </html><?php }
}
