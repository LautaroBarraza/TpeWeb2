<?php
/* Smarty version 3.1.39, created on 2021-11-23 07:01:30
  from 'C:\xampp\htdocs\web2\TpeParte2\templates\deportista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619c83bac4a990_53372508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '052339c02d16f72e7897ad721481e09cacb090b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TpeParte2\\templates\\deportista.tpl',
      1 => 1637645381,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:./vue/comentarios.tpl' => 1,
    'file:./forms/formComentarioItem.tpl' => 1,
  ),
),false)) {
function content_619c83bac4a990_53372508 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
            <li id="id_deportista"><?php echo $_smarty_tpl->tpl_vars['deportista']->value->id_deportista;?>
</li> 
            <ul>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("file:./vue/comentarios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php if ($_smarty_tpl->tpl_vars['logeado']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("file:./forms/formComentarioItem.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>    
        <?php echo '<script'; ?>
 src="../js/comentarios.js"><?php echo '</script'; ?>
>
    </body><?php }
}
