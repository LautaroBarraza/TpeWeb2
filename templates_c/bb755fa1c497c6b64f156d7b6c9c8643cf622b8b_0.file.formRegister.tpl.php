<?php
/* Smarty version 3.1.39, created on 2021-11-22 17:27:34
  from 'C:\xampp\htdocs\web2\TpeParte2\templates\formRegister.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619bc4f603de64_77107638',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb755fa1c497c6b64f156d7b6c9c8643cf622b8b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TpeParte2\\templates\\formRegister.tpl',
      1 => 1634254858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
  ),
),false)) {
function content_619bc4f603de64_77107638 (Smarty_Internal_Template $_smarty_tpl) {
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
