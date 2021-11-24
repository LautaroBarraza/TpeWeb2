<?php
/* Smarty version 3.1.39, created on 2021-11-24 19:41:48
  from 'C:\xampp\htdocs\web2\TpeWeb2\templates\forms\formBienvenido.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619e876cc6e061_65519491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c971987e38b03dcc81aa9af02c422e52dbf67b07' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TpeWeb2\\templates\\forms\\formBienvenido.tpl',
      1 => 1637779183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
  ),
),false)) {
function content_619e876cc6e061_65519491 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div style="--bs-bg-opacity: .5;" class="bg-secondary min-vh-100 justify-content-center gap-3 d-flex ">
        <div class="d-flex flex-column align-items-center justify-items-center h-75 gap-3 rounded-3 p-4 mt-4 w-50 bg-white">
            <h1 class="text-center">TPE Web 2 - Deportistas</h1>
            <button class="w-50 p-2 border-0 rounded-1 bg-primary"><a class="text-light text-decoration-none" href="login">Tengo una cuenta</a> </button>
            <button class="w-50 p-2 bg-primary border-0 rounded-1"><a class="text-light text-decoration-none" href="register">Crear una cuenta</a></button>
            <button class="w-50 p-2 border-0 rounded-1 bg-primary"><a class="text-light text-decoration-none" href="home">Invitado</a></button>
        </div>
    </div><?php }
}
