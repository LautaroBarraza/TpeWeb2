<?php
/* Smarty version 3.1.39, created on 2021-10-03 18:23:30
  from 'C:\xampp\htdocs\web2\TpeWeb2\templates\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6159d902337ac3_61865887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2590c83c7f97ed1c36d2dd550725bc2bf601483b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TpeWeb2\\templates\\form.tpl',
      1 => 1632411917,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6159d902337ac3_61865887 (Smarty_Internal_Template $_smarty_tpl) {
?>            <form action="insert" method="post">
                <input type="text" name="titulo" id="titulo">
                <input type="text" name="descripcion" id="descripcion">
                <input type="number" name="prioridad" id="prioridad">
                <input type="checkbox" name="completada" id="completada">
                <input type="submit" value="enviar">
            </form><?php }
}
