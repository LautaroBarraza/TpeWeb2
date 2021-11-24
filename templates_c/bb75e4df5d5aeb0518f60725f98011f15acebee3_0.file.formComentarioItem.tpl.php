<?php
/* Smarty version 3.1.39, created on 2021-11-23 17:29:03
  from 'C:\xampp\htdocs\web2\TpeParte2\templates\forms\formComentarioItem.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619d16cfdc8e28_93928261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb75e4df5d5aeb0518f60725f98011f15acebee3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TpeParte2\\templates\\forms\\formComentarioItem.tpl',
      1 => 1637684710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619d16cfdc8e28_93928261 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row justify-content-center">
        <div class="col-6">
            <h4>Comentar</h4>
            <form id="formComent" resource="comentar" method="post">
                <textarea class="form-control" aria-label="With textarea" id="comentario"></textarea>
                <select class="form-control" name="nota" id="nota-jugador">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <button class="btn btn-primary" id="btn-agregar-comentario">Agregar</button>
            </form>
            
        </div><?php }
}
