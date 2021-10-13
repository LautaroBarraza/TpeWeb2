<?php
/* Smarty version 3.1.39, created on 2021-10-13 00:18:49
  from '/opt/lampp/htdocs/web2/TpeWeb2/templates/formBienvenido.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616609c9a2fc90_41812594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87a5eb3383d62def0f8401ff24c8a183e511d8b7' => 
    array (
      0 => '/opt/lampp/htdocs/web2/TpeWeb2/templates/formBienvenido.tpl',
      1 => 1634077128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616609c9a2fc90_41812594 (Smarty_Internal_Template $_smarty_tpl) {
?>    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <div class="min-vh-100 justify-content-center gap-3 d-flex flex-column flex-col ">
        <div style="--bs-bg-opacity: .2;" " class= "vh-100 bg-secondary  justify-content-center gap-3 d-flex flex-column flex-col pt-4">
            <h1 class="text-center">TPE Web 2 - Deportistas</h1>
            <button class="p-2 border-0 rounded-1 bg-primary"><a class="text-light text-decoration-none" href="login">Tengo una cuenta</a> </button>
            <button class="p-2 bg-primary border-0 rounded-1"><a class="text-light text-decoration-none" href="register">Crear una cuenta</a></button>
            <button class="p-2 border-0 rounded-1 bg-primary"><a class="text-light text-decoration-none" href="home">Invitado</a></button>
        </div>
    </div><?php }
}
