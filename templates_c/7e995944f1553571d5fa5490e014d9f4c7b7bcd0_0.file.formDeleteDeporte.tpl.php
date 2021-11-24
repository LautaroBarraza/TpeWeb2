<?php
/* Smarty version 3.1.39, created on 2021-11-24 01:44:41
  from 'C:\xampp\htdocs\web2\TpeWeb2\templates\forms\formDeleteDeporte.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619d8af970f465_19489976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e995944f1553571d5fa5490e014d9f4c7b7bcd0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TpeWeb2\\templates\\forms\\formDeleteDeporte.tpl',
      1 => 1637596985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619d8af970f465_19489976 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
                    <form action="deleteDeporte" method="post" class="p-3 border border-1 rounded-3 justify-content-center gap-3 d-flex flex-column">
                        <h4 class="text-center pb-1 border-bottom">Eliminar Deporte</h4>
                        <select name="deporte" id="">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['deportes']->value, 'deporte');
$_smarty_tpl->tpl_vars['deporte']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['deporte']->value) {
$_smarty_tpl->tpl_vars['deporte']->do_else = false;
?>
                                <option value='<?php echo $_smarty_tpl->tpl_vars['deporte']->value->id_deporte;?>
'><?php echo $_smarty_tpl->tpl_vars['deporte']->value->deporte;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <button class="text-light p-2 border-0 rounded-1 bg-primary" type="submit">Borrar Deporte</button>
                    </form>
                </div><?php }
}
