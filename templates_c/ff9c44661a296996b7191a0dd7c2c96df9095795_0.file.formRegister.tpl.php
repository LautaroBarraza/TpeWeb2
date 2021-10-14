<?php
/* Smarty version 3.1.39, created on 2021-10-14 01:36:28
  from 'C:\xampp\htdocs\web2\TpeWeb2\templates\formRegister.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61676d7cef1dc2_75009519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff9c44661a296996b7191a0dd7c2c96df9095795' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TpeWeb2\\templates\\formRegister.tpl',
      1 => 1634087359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61676d7cef1dc2_75009519 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<h1>Register</h1>

<form action="confirmRegister" method="POST">
    <input type="text" name="username" placeholder="Escriba aqui su nombre de usuario" />
    <input type="password" name="password" placeholder="Escriba aqui su contraseña" />
    <input type="password" name="verifypassword" placeholder="Vuelva a escribir su contraseña" />
    <button type="submit">Registrar usuario</button>
</form>
<?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?>
<h1><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h1>
<?php }
}
}
