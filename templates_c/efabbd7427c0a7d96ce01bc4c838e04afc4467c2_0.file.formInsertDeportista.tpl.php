<?php
/* Smarty version 3.1.39, created on 2021-11-22 17:00:21
  from 'C:\xampp\htdocs\web2\TpeParte2\templates\forms\formInsertDeportista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619bbe95b82d51_64976468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efabbd7427c0a7d96ce01bc4c838e04afc4467c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TpeParte2\\templates\\forms\\formInsertDeportista.tpl',
      1 => 1637596797,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619bbe95b82d51_64976468 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
            
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

                </div><?php }
}
