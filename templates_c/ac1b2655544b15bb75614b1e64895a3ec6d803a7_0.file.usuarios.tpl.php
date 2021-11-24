<?php
/* Smarty version 3.1.39, created on 2021-11-22 19:21:50
  from 'C:\xampp\htdocs\web2\TpeParte2\templates\usuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619bdfbe6987f8_87317494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac1b2655544b15bb75614b1e64895a3ec6d803a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TpeParte2\\templates\\usuarios.tpl',
      1 => 1637605244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./head.tpl' => 1,
    'file:./nav.tpl' => 1,
  ),
),false)) {
function content_619bdfbe6987f8_87317494 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container">
        <h1 class="justify-content-center">Usuarios</h1>
       <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Usuario</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Permisos</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
$_smarty_tpl->tpl_vars['usuario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->do_else = false;
?>
            <tr scope="row">
                <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->nombreUsuario;?>
</td>
                <?php if ($_smarty_tpl->tpl_vars['usuario']->value->rol == 1) {?>
                <td>Administrador</td>
                <td><button type="submit" class="btn btn-light"><a href="quitarPermiso/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuarios;?>
">Quitar permiso</a></button></td>
                
                   <?php } else { ?>
                    <td>Registrado</td>
                    <td><button type="submit" class="btn btn-light"><a href="darPermiso/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuarios;?>
">Dar permiso</a></button></td>
                    <?php }?>
                <td><button type="submit" class="btn btn-light"><a href="deleteUsuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuarios;?>
">Eliminar</a></button></td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div><?php }
}
