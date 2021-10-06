<?php
/* Smarty version 3.1.39, created on 2021-10-06 23:52:50
  from 'C:\xampp\htdocs\web2\TpeWeb2\templates\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615e1ab2df3431_39856199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2590c83c7f97ed1c36d2dd550725bc2bf601483b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TpeWeb2\\templates\\form.tpl',
      1 => 1633544508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615e1ab2df3431_39856199 (Smarty_Internal_Template $_smarty_tpl) {
?>            <form action="insert" method="post">
                <input type="text" name="titulo" id="titulo">
                <input type="text" name="descripcion" id="descripcion">
                <input type="number" name="prioridad" id="prioridad">
                <input type="checkbox" name="completada" id="completada">
                <input type="submit" value="enviar">
            </form>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>
        <button><a href="login">Tengo una cuenta</a> </button>
        <button>Crear una cuenta</button>
    </div>



    <form method="post">
        <input type="text" name="username" placeholder="Escriba aqui su nombre de usuario" />
        <input type="password" name="password" placeholder="Escriba aqui su contraseña" />
        <button type="submit">Iniciar sesion</button>
    </form>    

    </body>
</html><?php }
}
