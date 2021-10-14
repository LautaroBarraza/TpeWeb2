<?php
/* Smarty version 3.1.39, created on 2021-10-13 07:49:51
  from '/opt/lampp/htdocs/web2/TpeWeb2/templates/error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6166737f0c3bc4_87398038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91fe0c3d100d0798dad7ff7c8d1d79689755996f' => 
    array (
      0 => '/opt/lampp/htdocs/web2/TpeWeb2/templates/error.tpl',
      1 => 1634104126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
  ),
),false)) {
function content_6166737f0c3bc4_87398038 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<body>
    <h1><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h1>
</body>
</html><?php }
}
