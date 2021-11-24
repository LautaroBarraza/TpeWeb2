<?php
/* Smarty version 3.1.39, created on 2021-11-25 00:50:46
  from 'C:\xampp\htdocs\web2\TpeWeb2\templates\vue\comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ecfd60b8876_93058077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67177047bed9206cd211007cd0d7969a9f554668' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TpeWeb2\\templates\\vue\\comentarios.tpl',
      1 => 1637797843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619ecfd60b8876_93058077 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div class="row justify-content-center">
        <div class="col-6">
            <h4>Comentarios sobre el jugador</h4>
            <ul class="list-group list-group-flush" id="listadoComentarios">
            <li v-for="comentario in comentarios">{{ comentario.comentario}}, Nota: {{comentario.nota}}, comentario publicado por: {{comentario.nombreUsuario}}
                
            <?php if ($_smarty_tpl->tpl_vars['rol']->value == 1) {?>
                
                    <button v-on:click="borrarComentario(comentario.id_comentario)">borrar</button></li>
                
            <?php }?>
   

            </ul>
        </div>
    </div>
<?php }
}
