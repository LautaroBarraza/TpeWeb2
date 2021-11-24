<?php
/* Smarty version 3.1.39, created on 2021-11-22 17:01:24
  from 'C:\xampp\htdocs\web2\TpeParte2\templates\forms\formInsertDeporte.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619bbed40701a5_99772828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '483a9b7b65484a116ab2b26315e10c7afef737a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TpeParte2\\templates\\forms\\formInsertDeporte.tpl',
      1 => 1637596865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619bbed40701a5_99772828 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
                    <form action="insertDeporte" method="post" class="mb-4 p-3 border border-1 rounded-3 justify-content-center gap-3 d-flex flex-column">

                        <h4 class="text-center pb-1 border-bottom">Nuevo Deporte</h4>
                        
                        <input type="text" name="deporte">
                        <button class="text-light p-2 border-0 rounded-1 bg-primary" type="submit">Agregar Deporte</button>
                    </form>
                </div><?php }
}
