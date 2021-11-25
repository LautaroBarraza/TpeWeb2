<?php
/* Smarty version 3.1.39, created on 2021-11-25 03:15:37
  from 'C:\xampp\htdocs\web2\TpeWeb2\templates\deporte.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ef1c9807253_49649870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd511e5e4f818c034c596acc6917e4c7f790d3ed9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TpeWeb2\\templates\\deporte.tpl',
      1 => 1637806510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:nav.tpl' => 1,
  ),
),false)) {
function content_619ef1c9807253_49649870 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <body>
            <div style="--bs-bg-opacity: .5;" class="bg-secondary min-vh-100 justify-content-center gap-3 d-flex ">
                <div class="d-flex flex-column align-items-center justify-items-center h-75 gap-3 rounded-3 p-4 mt-4 w-50 bg-white">
                                        
                        <h1 class="text-capitalize"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

                        <ul class="list-group">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['deportistas']->value, 'deportista');
$_smarty_tpl->tpl_vars['deportista']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['deportista']->value) {
$_smarty_tpl->tpl_vars['deportista']->do_else = false;
?>
                                <li class="list-group-item text-capitalize"><?php echo $_smarty_tpl->tpl_vars['deportista']->value->nombre;?>
 <?php echo $_smarty_tpl->tpl_vars['deportista']->value->apellido;?>
</li>
                                <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['deportista']->value->edad;?>
 años</li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <ul>
                </div>
            </div>
            
        </body>

    </html><?php }
}
