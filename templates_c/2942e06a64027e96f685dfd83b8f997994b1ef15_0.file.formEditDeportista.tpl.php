<?php
/* Smarty version 3.1.39, created on 2021-11-25 02:01:01
  from 'C:\xampp\htdocs\web2\TpeWeb2\templates\forms\formEditDeportista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ee04dbb76d9_25230456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2942e06a64027e96f685dfd83b8f997994b1ef15' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TpeWeb2\\templates\\forms\\formEditDeportista.tpl',
      1 => 1637801972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619ee04dbb76d9_25230456 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
                    <form class="p-3 border border-1 rounded-3 justify-content-center gap-3 d-flex flex-column" action="updateDeportista" method="post">
                        <h4 class="text-center pb-1 border-bottom">Editar Deportista</h4>
                        <select name="deportistaEdit" id="">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['deportistas']->value, 'deportista');
$_smarty_tpl->tpl_vars['deportista']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['deportista']->value) {
$_smarty_tpl->tpl_vars['deportista']->do_else = false;
?>
                                <option value='<?php echo $_smarty_tpl->tpl_vars['deportista']->value->id_deportista;?>
'><?php echo $_smarty_tpl->tpl_vars['deportista']->value->apellido;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <input type="text" name="nombreEdit" id="" placeholder="actualice nombre de deportista" required>
                        <input type="text" name="apellidoEdit" placeholder="apellido" required>
                        <input type="number" name="edadEdit" placeholder="edad" required>
                        <select name="deporteEdit" id="">
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
                        <button class="text-light p-2 border-0 rounded-1 bg-primary" type="submit">actualizar deportista</button>
                    </form>
                </div><?php }
}
