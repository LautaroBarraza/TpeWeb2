<?php
/* Smarty version 3.1.39, created on 2021-11-22 19:23:58
  from 'C:\xampp\htdocs\web2\TpeParte2\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619be03e291803_70509873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a08756a89e2e34166784b9753a85a1fe7e0f763' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TpeParte2\\templates\\error.tpl',
      1 => 1634254858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
  ),
),false)) {
function content_619be03e291803_70509873 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<body>
    <h1><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h1>
</body>
</html><?php }
}
