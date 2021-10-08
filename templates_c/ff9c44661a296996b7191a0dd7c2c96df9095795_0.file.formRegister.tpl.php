<?php
/* Smarty version 3.1.39, created on 2021-10-08 18:50:09
  from 'C:\xampp\htdocs\web2\TpeWeb2\templates\formRegister.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616076c1dfa3e9_64448985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff9c44661a296996b7191a0dd7c2c96df9095795' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TpeWeb2\\templates\\formRegister.tpl',
      1 => 1633711807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616076c1dfa3e9_64448985 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>Register</h1>

<form action="confirmRegister" method="post">
    <input type="text" name="username" placeholder="Escriba aqui su nombre de usuario" />
    <input type="password" name="password" placeholder="Escriba aqui su contraseña" />
    <input type="password" name="verifypassword" placeholder="Vuelva a escribir su contraseña" />
    <button type="submit">Registrar usuario</button>
</form><?php }
}
