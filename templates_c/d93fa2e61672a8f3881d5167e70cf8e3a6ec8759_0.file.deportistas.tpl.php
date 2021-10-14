<?php
/* Smarty version 3.1.39, created on 2021-10-14 22:39:45
  from '/opt/lampp/htdocs/web2/TpeWeb2/templates/deportistas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61689591453e96_54136536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd93fa2e61672a8f3881d5167e70cf8e3a6ec8759' => 
    array (
      0 => '/opt/lampp/htdocs/web2/TpeWeb2/templates/deportistas.tpl',
      1 => 1634243984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
  ),
),false)) {
function content_61689591453e96_54136536 (Smarty_Internal_Template $_smarty_tpl) {
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

                    <?php if ($_smarty_tpl->tpl_vars['rango']->value) {?>

                        <a style="--bs-bg-opacity: .4;" class="text-center rounded list-group-item bg-danger border-0 mt-1 text-decoration-none text-black text-capitalize" href="deleteDeportista/<?php echo $_smarty_tpl->tpl_vars['deportista']->value->id_deportista;?>
">borrar ↑</a>

                    <?php }?>

                    </li>

                
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            
            </ul>

                <?php if ($_smarty_tpl->tpl_vars['rango']->value) {?>

                <div>
            
                    <form style="--bs-bg-opacity: .2;" class="mb-4 p-3 border border-1 rounded-3 justify-content-center gap-3 d-flex flex-column" action="insertDeportista" method="post">

                        <h4 class="text-center pb-1 border-bottom">Nuevo Deportista</h4>
                        
                        <input type="text" name="nombre" placeholder="nombre">
                        <input type="text" name="apellido" placeholder="apellido">
                        <input type="number" name="edad" placeholder="edad">
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
                        <button class="text-light p-2 border-0 rounded-1 bg-primary" type="submit">Agregar Deportista</button>

                    </form>

                </div>

                <div>
                    <form action="insertDeporte" method="post" class="mb-4 p-3 border border-1 rounded-3 justify-content-center gap-3 d-flex flex-column">

                        <h4 class="text-center pb-1 border-bottom">Nuevo Deporte</h4>
                        
                        <input type="text" name="deporte">
                        <button class="text-light p-2 border-0 rounded-1 bg-primary" type="submit">Agregar Deporte</button>
                    </form>
                </div>
               
                <div>
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
                        <input type="text" name="nombreEdit" id="" placeholder="actualice nombre de deportista">
                        <input type="text" name="apellidoEdit" placeholder="apellido">
                        <input type="number" name="edadEdit" placeholder="edad">
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
                </div>
               
                <div>
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
                </div>

                <div class="d-flex">
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
                </div>

                <?php }?>

            </div>
        </div>
       </body>
        </html><?php }
}
