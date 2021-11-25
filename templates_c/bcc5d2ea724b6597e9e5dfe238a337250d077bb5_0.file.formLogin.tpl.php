<?php
/* Smarty version 3.1.39, created on 2021-11-25 02:24:30
  from 'C:\xampp\htdocs\web2\TpeWeb2\templates\forms\formLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ee5ce9817b9_65124579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcc5d2ea724b6597e9e5dfe238a337250d077bb5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TpeWeb2\\templates\\forms\\formLogin.tpl',
      1 => 1637802031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
  ),
),false)) {
function content_619ee5ce9817b9_65124579 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div style="--bs-bg-opacity: .5;" class="bg-secondary min-vh-100 justify-content-center gap-3 d-flex">

<form action="confirmLogin" method="POST" class="d-flex flex-column align-items-center justify-items-center h-75 gap-3 rounded-3 p-4 mt-4 w-50 bg-white">
    
    <h1>Login</h1>
    <input type="text" name="username" placeholder="Nombre de usuario..." required>
    <input type="password" name="password" placeholder="Contraseña..." required>
    <button class="text-light w-50 p-2 border-0 rounded-1 bg-primary" type="submit">Iniciar sesion</button>
</form>    

</div>
<?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?>
 <h1><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h1>
<?php }
}
}
