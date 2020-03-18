<?php /* Smarty version Smarty-3.1-DEV, created on 2020-03-16 11:42:04
         compiled from "module_file_tpl:AceEditor2;about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19938384405e6f57fc572cf1-15617307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4202dc18ef9a00343be2e5cc47dd7f29f655df8' => 
    array (
      0 => 'module_file_tpl:AceEditor2;about.tpl',
      1 => 1496384982,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '19938384405e6f57fc572cf1-15617307',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5e6f57fc573367_05816715',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e6f57fc573367_05816715')) {function content_5e6f57fc573367_05816715($_smarty_tpl) {?><h3>Version 1.03</h3>
<b>Versions before 1.03 were pulled from the forge because they simply do not work.</b>
<ul>
	<li>Initial working release</li>
</ul>
<h3>Version 1.05 (17 januari 2016)</h3>
<ul>
	<li>Reworks the way the hidden textarea (the one that CMSMS actually saves) is generated so that Ace Editor also works with third party modules.</li>
	<li>Adds keybinding CTRL + S. Using this hotkey while in editor will trigger the 'apply' button.
</ul>
<?php }} ?>
