<?php
/* Smarty version 3.1.39, created on 2021-10-14 22:41:51
  from '/opt/lampp/htdocs/web2/TpeWeb2/templates/deportista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168960f833a10_14889913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79f20a6ff48376545042d780ef19126c65467837' => 
    array (
      0 => '/opt/lampp/htdocs/web2/TpeWeb2/templates/deportista.tpl',
      1 => 1634244110,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
  ),
),false)) {
function content_6168960f833a10_14889913 (Smarty_Internal_Template $_smarty_tpl) {
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
            <ul>
        </div>
    </body><?php }
}
