<?php
/* Smarty version 3.1.39, created on 2021-10-25 17:38:15
  from 'C:\xampp\htdocs\web2\TpeWeb2\templates\formRegister.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6176cf67dfdb47_26762473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff9c44661a296996b7191a0dd7c2c96df9095795' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TpeWeb2\\templates\\formRegister.tpl',
      1 => 1634254858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
  ),
),false)) {
function content_6176cf67dfdb47_26762473 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div style="--bs-bg-opacity: .5;" class="bg-secondary min-vh-100 justify-content-center gap-3 d-flex">
<form class="d-flex flex-column align-items-center justify-items-center h-75 gap-3 rounded-3 p-4 mt-4 w-50 bg-white" action="confirmRegister" method="POST">
    <h1>Register</h1>
    <input type="text" name="username" placeholder="Nombre de usuario..." />
    <input type="password" name="password" placeholder="Contraseña..." />
    <input type="password" name="verifypassword" placeholder="Repetir contraseña..." />
    <button type="submit" class="text-light p-2 border-0 rounded-1 bg-primary">Registrar usuario</button>
</form>
</div>
<?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?>
<h1><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h1>
<?php }
}
}
