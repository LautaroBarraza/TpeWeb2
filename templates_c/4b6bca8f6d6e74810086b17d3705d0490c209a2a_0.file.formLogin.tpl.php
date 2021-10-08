<?php
/* Smarty version 3.1.39, created on 2021-10-08 18:48:23
  from 'C:\xampp\htdocs\web2\TpeWeb2\templates\formLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61607657070444_90421695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b6bca8f6d6e74810086b17d3705d0490c209a2a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TpeWeb2\\templates\\formLogin.tpl',
      1 => 1633711696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61607657070444_90421695 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Login</h1>

<form action="confirmLogin" method="post">
    <input type="text" name="username" placeholder="Escriba aqui su nombre de usuario" />
    <input type="password" name="password" placeholder="Escriba aqui su contraseña" />
    <button type="submit">Iniciar sesion</button>
</form>    <?php }
}
