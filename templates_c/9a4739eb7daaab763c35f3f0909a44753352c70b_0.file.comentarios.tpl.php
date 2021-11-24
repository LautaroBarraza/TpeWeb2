<?php
/* Smarty version 3.1.39, created on 2021-11-23 18:16:40
  from 'C:\xampp\htdocs\web2\TpeParte2\templates\vue\comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619d21f864b3a9_56369093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a4739eb7daaab763c35f3f0909a44753352c70b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TpeParte2\\templates\\vue\\comentarios.tpl',
      1 => 1637687794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619d21f864b3a9_56369093 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div class="row justify-content-center">
        <div class="col-6">
            <h4>Comentarios sobre el jugador</h4>
            <ul class="list-group list-group-flush" id="listadoComentarios">
            <li v-for="comentario in comentarios">{{ comentario.comentario}} Nota: {{comentario.nota}}
                
            <?php if ($_smarty_tpl->tpl_vars['rol']->value == 1) {?>
                
                    <button v-on:click="borrarComentario(comentario.id_comentario)">borrar</button></li>
                
            <?php }?>
   

            </ul>
        </div>
    </div>
<?php }
}
