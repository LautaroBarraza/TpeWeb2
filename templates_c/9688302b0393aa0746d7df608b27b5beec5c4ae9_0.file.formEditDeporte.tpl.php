<?php
/* Smarty version 3.1.39, created on 2021-11-22 17:04:39
  from 'C:\xampp\htdocs\web2\TpeParte2\templates\forms\formEditDeporte.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619bbf9745ade3_32415200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9688302b0393aa0746d7df608b27b5beec5c4ae9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TpeParte2\\templates\\forms\\formEditDeporte.tpl',
      1 => 1637597057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619bbf9745ade3_32415200 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="d-flex">
                    <form class="d-flex flex-column gap-3 p-3 mb-4 border border-1 rounded-3" action="updateDeporte" method="post">
                        <h4 class="text-center pb-1 border-bottom">Actualizar Deporte</h4>
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
                        <input type="text" name="deporteEditado" id="" placeholder="actualice nombre de deporte">
                        <button class="text-light p-2 border-0 rounded-1 bg-primary" type="submit">Actualizar</button>
                    </form>
                </div><?php }
}
