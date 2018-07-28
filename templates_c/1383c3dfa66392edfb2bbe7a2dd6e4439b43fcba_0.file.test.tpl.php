<?php
/* Smarty version 3.1.32, created on 2018-07-28 09:27:08
  from 'C:\xampp\web\templates\test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5c1acc5d1749_02447877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1383c3dfa66392edfb2bbe7a2dd6e4439b43fcba' => 
    array (
      0 => 'C:\\xampp\\web\\templates\\test.tpl',
      1 => 1532762822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5c1acc5d1749_02447877 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
    <h1><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</h1>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
