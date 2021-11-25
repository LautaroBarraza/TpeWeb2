<?php
/* Smarty version 3.1.39, created on 2021-11-25 02:45:43
  from 'C:\xampp\htdocs\web2\TpeWeb2\templates\deportista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619eeac79f4a04_81624595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f17ca47f4271558d299ed9198f61cd754e8e2da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TpeWeb2\\templates\\deportista.tpl',
      1 => 1637804494,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:./vue/comentarios.tpl' => 1,
    'file:./forms/formComentarioItem.tpl' => 1,
  ),
),false)) {
function content_619eeac79f4a04_81624595 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <body>

        <div class="d-flex flex-column align-items-center justify-items-center align-items-center h-75 gap-3 rounded-3 p-4 mt-4 w-100 bg-white">
            <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
            <ul class="d-flex flex-column w-100 list-group p-3">
            <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['deportista']->value->nombre;?>
 <?php echo $_smarty_tpl->tpl_vars['deportista']->value->apellido;?>
</li>
            <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['deportista']->value->edad;?>
</li>
            <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['deportista']->value->deporte;?>
</li>
            <li  id="id_deportista"><?php echo $_smarty_tpl->tpl_vars['deportista']->value->id_deportista;?>
</li> 
            <ul>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("file:./vue/comentarios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php if ($_smarty_tpl->tpl_vars['logeado']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("file:./forms/formComentarioItem.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <p id="nombreUsuario"><?php echo $_smarty_tpl->tpl_vars['nombreUsuario']->value;?>
<p>
    <?php }?>    
    
    
        <?php echo '<script'; ?>
 src="./js/comentarios.js"><?php echo '</script'; ?>
>
    </body>
    </html><?php }
}
