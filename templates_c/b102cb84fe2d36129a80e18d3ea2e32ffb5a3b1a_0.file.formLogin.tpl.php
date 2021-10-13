<?php
/* Smarty version 3.1.39, created on 2021-10-12 22:55:17
  from '/opt/lampp/htdocs/web2/TpeWeb2/templates/formLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6165f63575f644_94206906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b102cb84fe2d36129a80e18d3ea2e32ffb5a3b1a' => 
    array (
      0 => '/opt/lampp/htdocs/web2/TpeWeb2/templates/formLogin.tpl',
      1 => 1634072116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6165f63575f644_94206906 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<h1>Login</h1>

<form action="confirmLogin" method="POST">
    <input type="text" name="username" placeholder="Escriba aqui su nombre de usuario" />
    <input type="password" name="password" placeholder="Escriba aqui su contraseña" />
    <button type="submit">Iniciar sesion</button>
</form>    

<?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?>
 <h1><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h1>
<?php }
}
}
