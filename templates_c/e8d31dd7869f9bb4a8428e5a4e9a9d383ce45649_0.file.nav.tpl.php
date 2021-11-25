<?php
/* Smarty version 3.1.39, created on 2021-11-25 02:33:21
  from 'C:\xampp\htdocs\web2\TpeWeb2\templates\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ee7e14fc5d6_75959835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8d31dd7869f9bb4a8428e5a4e9a9d383ce45649' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TpeWeb2\\templates\\nav.tpl',
      1 => 1637803938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619ee7e14fc5d6_75959835 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="http://localhost/web2/TpeWeb2/home">home</a>
<?php if ($_smarty_tpl->tpl_vars['logeado']->value) {?>
    <a href="logOut">LogOut</a>
<?php } else { ?>
    <a href="login">login</a>
<?php }
}
}
