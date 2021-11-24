<?php
/* Smarty version 3.1.39, created on 2021-11-22 18:21:32
  from 'C:\xampp\htdocs\web2\TpeParte2\templates\forms\formEditUsuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619bd19cdc2344_97786680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c77c7cfee17865046b9b9b2cfd69e0f43f5cbf13' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TpeParte2\\templates\\forms\\formEditUsuarios.tpl',
      1 => 1637597549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619bd19cdc2344_97786680 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="d-flex">
                    <form class="d-flex flex-column gap-3 p-3 mb-4 border border-1 rounded-3" action="updateRolUsuario" method="post">
                        <h4 class="text-center pb-1 border-bottom">Actualizar roles de usuario</h4>
                        <select name="usuarios" id="">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
$_smarty_tpl->tpl_vars['usuario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->do_else = false;
?>
                                <option value='<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
'><?php echo $_smarty_tpl->tpl_vars['usuario']->value->nombreUsuario;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <select name="rol">
                            <option value=0>no admin</option>
                            <option value=1>admin</option>
                        </select>
                        <button class="text-light p-2 border-0 rounded-1 bg-primary" type="submit">Actualizar</button>
                    </form>
                </div><?php }
}
