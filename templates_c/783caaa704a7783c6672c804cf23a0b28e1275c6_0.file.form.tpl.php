<?php
/* Smarty version 3.1.39, created on 2021-09-23 17:46:09
  from 'C:\xampp\htdocs\web2\pruebatpe\templates\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614ca1419847c3_48756925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '783caaa704a7783c6672c804cf23a0b28e1275c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\pruebatpe\\templates\\form.tpl',
      1 => 1632411917,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614ca1419847c3_48756925 (Smarty_Internal_Template $_smarty_tpl) {
?>            <form action="insert" method="post">
                <input type="text" name="titulo" id="titulo">
                <input type="text" name="descripcion" id="descripcion">
                <input type="number" name="prioridad" id="prioridad">
                <input type="checkbox" name="completada" id="completada">
                <input type="submit" value="enviar">
            </form><?php }
}
