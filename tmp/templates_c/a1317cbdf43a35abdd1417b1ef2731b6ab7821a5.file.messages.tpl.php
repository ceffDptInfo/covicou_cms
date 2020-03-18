<?php /* Smarty version Smarty-3.1-DEV, created on 2020-03-16 11:42:04
         compiled from "/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/admin/themes/OneEleven/templates/messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5102098775e6f57fc7c67c1-51186585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1317cbdf43a35abdd1417b1ef2731b6ab7821a5' => 
    array (
      0 => '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/admin/themes/OneEleven/templates/messages.tpl',
      1 => 1496384393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5102098775e6f57fc7c67c1-51186585',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
    'messages' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5e6f57fc7d7d47_33499931',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e6f57fc7d7d47_33499931')) {function content_5e6f57fc7d7d47_33499931($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['errors']->value)&&$_smarty_tpl->tpl_vars['errors']->value[0]!='') {?><aside class="message pageerrorcontainer" role="alert"><?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['error']->value) {?><p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p><?php }?><?php } ?></aside><?php }?><?php if (isset($_smarty_tpl->tpl_vars['messages']->value)&&$_smarty_tpl->tpl_vars['messages']->value[0]!='') {?><aside class="message pagemcontainer" role="status"><?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['message']->value) {?><p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p><?php }?><?php } ?></aside><?php }?>
<?php }} ?>
