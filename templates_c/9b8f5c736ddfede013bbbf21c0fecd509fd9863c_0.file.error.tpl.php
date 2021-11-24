<?php
/* Smarty version 3.1.39, created on 2021-11-24 20:07:53
  from 'C:\xampp\htdocs\web2\TpeWeb2\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619e8d8972a835_13473731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b8f5c736ddfede013bbbf21c0fecd509fd9863c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TpeWeb2\\templates\\error.tpl',
      1 => 1637780871,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:nav.tpl' => 1,
  ),
),false)) {
function content_619e8d8972a835_13473731 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <h1><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h1>
</body>
</html><?php }
}
