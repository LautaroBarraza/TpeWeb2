<?php
/* Smarty version 3.1.39, created on 2021-11-25 02:15:15
  from 'C:\xampp\htdocs\web2\TpeWeb2\templates\deportistas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ee3a31aade7_72239221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfe1bd06756a06cc4807e04feef3aed57dabcb40' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TpeWeb2\\templates\\deportistas.tpl',
      1 => 1637802912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:./forms/formInsertDeportista.tpl' => 1,
    'file:./forms/formInsertDeporte.tpl' => 1,
    'file:./forms/formEditDeportista.tpl' => 1,
    'file:./forms/formDeleteDeporte.tpl' => 1,
    'file:./forms/formEditDeporte.tpl' => 1,
  ),
),false)) {
function content_619ee3a31aade7_72239221 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <div style="--bs-bg-opacity: .5;" class=" bg-secondary min-vh-100 justify-content-center gap-3 d-flex ">
        <div class="mb-4 d-flex flex-column align-items-center justify-items-center h-75 gap-4 rounded-3 p-4 mt-4 w-75 bg-white">
            <h1 class="text-center text-capitalize"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
            <div class="d-flex flex-column align-items-center">
                <?php if ($_smarty_tpl->tpl_vars['nombreUsuario']->value != null) {?>
                    <h1 class="text-center text-capitalize">hola <?php echo $_smarty_tpl->tpl_vars['nombreUsuario']->value;?>
</h1>
                    <a class="p-2 rounded-3 border border-2 border-danger text-danger fw-bold text-center text-capitalize text-decoration-none" href="logOut">Log Out</a>

                <?php } else { ?>
                <a class="p-2 rounded-3 border border-2 border-primary text-primary text-center fw-bold text-capitalize text-decoration-none" href="login">login</a>
                <?php }?>
            </div>

            <div class="my-3 d-flex flex-column p-3 border">
                <h3 class="border-bottom pb-2 ">Filtrar Deportes</h3>


                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['deportes']->value, 'deporte');
$_smarty_tpl->tpl_vars['deporte']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['deporte']->value) {
$_smarty_tpl->tpl_vars['deporte']->do_else = false;
?>
                        <a class="text-center text-capitalize text-decoration-none" href='Deporte/<?php echo $_smarty_tpl->tpl_vars['deporte']->value->deporte;?>
'><?php echo $_smarty_tpl->tpl_vars['deporte']->value->deporte;?>
</a>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>

            <h4 class="pb-1 border-bottom">Deportistas</h4>

            <ul class="w-100 list-group align-items-center p-3">

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['deportistas']->value, 'deportista');
$_smarty_tpl->tpl_vars['deportista']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['deportista']->value) {
$_smarty_tpl->tpl_vars['deportista']->do_else = false;
?>
                
                    <li class="mb-3 d-flex w-75 flex-column justify-content-center border border-1 rounded-3 list-group-item ">
                        Deporte: 
                            <a class="fw-bold text-capitalize text-decoration-none" href="Deporte/<?php echo $_smarty_tpl->tpl_vars['deportista']->value->deporte;?>
"><?php echo $_smarty_tpl->tpl_vars['deportista']->value->deporte;?>
</a> 
                        Deportista:
                            <a class="fw-bold text-capitalize text-decoration-none" href="Deportistas/<?php echo $_smarty_tpl->tpl_vars['deportista']->value->id_deportista;?>
"><?php echo $_smarty_tpl->tpl_vars['deportista']->value->nombre;?>
 <?php echo $_smarty_tpl->tpl_vars['deportista']->value->apellido;?>
</a>

                    <?php if ($_smarty_tpl->tpl_vars['logeado']->value) {?>

                        <a style="--bs-bg-opacity: .4;" class="text-center rounded list-group-item bg-danger border-0 mt-1 text-decoration-none text-black text-capitalize" href="deleteDeportista/<?php echo $_smarty_tpl->tpl_vars['deportista']->value->id_deportista;?>
">borrar ↑</a>
                        <div class="alert alert-warning"><p>ALERTA: Si borras un deportista borraras los comentarios publicados acerca del mismo</p></div>
                    <?php }?>

                    </li>

                
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            
            </ul>

                <?php if ($_smarty_tpl->tpl_vars['logeado']->value) {?>

                <?php $_smarty_tpl->_subTemplateRender("file:./forms/formInsertDeportista.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php $_smarty_tpl->_subTemplateRender("file:./forms/formInsertDeporte.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php $_smarty_tpl->_subTemplateRender("file:./forms/formEditDeportista.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php $_smarty_tpl->_subTemplateRender("file:./forms/formDeleteDeporte.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <div class="alert alert-warning"><p>ALERTA: Si borras un deporte borraras los deportistas y comentarios publicados del mismo</p></div>
               
                <?php $_smarty_tpl->_subTemplateRender("file:./forms/formEditDeporte.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['rol']->value) {?>
                    <a href="showUsers">Usuarios</a>
                <?php }?>

            </div>
        </div>
    </body>
</html><?php }
}
