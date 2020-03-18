<?php /* Smarty version Smarty-3.1-DEV, created on 2020-03-16 14:38:10
         compiled from "/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/admin/themes/OneEleven/templates/topcontent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5579071095e6f81428b6b78-22514836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f42bcf0a158f5b01e76932a67405ffaccab8037' => 
    array (
      0 => '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/admin/themes/OneEleven/templates/topcontent.tpl',
      1 => 1496384393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5579071095e6f81428b6b78-22514836',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nodes' => 0,
    'node' => 0,
    'module' => 0,
    'icon' => 0,
    'one' => 0,
    'is_sitedown' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5e6f8142904f20_53850424',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e6f8142904f20_53850424')) {function content_5e6f8142904f20_53850424($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['node'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['node']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nodes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['box']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['node']->key => $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['box']['index']++;
?><?php if (isset($_smarty_tpl->tpl_vars['icon'])) {$_smarty_tpl->tpl_vars['icon'] = clone $_smarty_tpl->tpl_vars['icon'];
$_smarty_tpl->tpl_vars['icon']->value = "themes/OneEleven/images/icons/topfiles/".((string)$_smarty_tpl->tpl_vars['node']->value['name']); $_smarty_tpl->tpl_vars['icon']->nocache = null; $_smarty_tpl->tpl_vars['icon']->scope = 0;
} else $_smarty_tpl->tpl_vars['icon'] = new Smarty_variable("themes/OneEleven/images/icons/topfiles/".((string)$_smarty_tpl->tpl_vars['node']->value['name']), null, 0);?><?php if (isset($_smarty_tpl->tpl_vars['module'])) {$_smarty_tpl->tpl_vars['module'] = clone $_smarty_tpl->tpl_vars['module'];
$_smarty_tpl->tpl_vars['module']->value = "../modules/".((string)$_smarty_tpl->tpl_vars['node']->value['name'])."/images/icon"; $_smarty_tpl->tpl_vars['module']->nocache = null; $_smarty_tpl->tpl_vars['module']->scope = 0;
} else $_smarty_tpl->tpl_vars['module'] = new Smarty_variable("../modules/".((string)$_smarty_tpl->tpl_vars['node']->value['name'])."/images/icon", null, 0);?><?php if ($_smarty_tpl->tpl_vars['node']->value['show_in_menu']&&$_smarty_tpl->tpl_vars['node']->value['url']&&$_smarty_tpl->tpl_vars['node']->value['title']) {?><div class="dashboard-box<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['box']['index']%3==2) {?> last<?php }?>"><nav class="dashboard-inner cf"><a href="<?php echo $_smarty_tpl->tpl_vars['node']->value['url'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['target'])) {?> target="<?php echo $_smarty_tpl->tpl_vars['node']->value['target'];?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['node']->value['selected']) {?> class="selected"<?php }?>><?php if (file_exists(($_smarty_tpl->tpl_vars['module']->value).('.png'))) {?><img src="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
.png" width="48" height="48" alt="<?php echo $_smarty_tpl->tpl_vars['node']->value['title'];?>
"<?php if ($_smarty_tpl->tpl_vars['node']->value['description']) {?> title="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['node']->value['description']);?>
"<?php }?> /><?php } elseif (file_exists(($_smarty_tpl->tpl_vars['module']->value).('.gif'))) {?><img src="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
.gif" width="48" height="48" alt="<?php echo $_smarty_tpl->tpl_vars['node']->value['title'];?>
"<?php if ($_smarty_tpl->tpl_vars['node']->value['description']) {?> title="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['node']->value['description']);?>
"<?php }?> /><?php } elseif (file_exists(($_smarty_tpl->tpl_vars['icon']->value).('.png'))) {?><img src="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
.png" width="48" height="48" alt="<?php echo $_smarty_tpl->tpl_vars['node']->value['title'];?>
"<?php if ($_smarty_tpl->tpl_vars['node']->value['description']) {?> title="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['node']->value['description']);?>
"<?php }?> /><?php } elseif (file_exists(($_smarty_tpl->tpl_vars['icon']->value).('.gif'))) {?><img src="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
.gif" width="48" height="48" alt="<?php echo $_smarty_tpl->tpl_vars['node']->value['title'];?>
"<?php if ($_smarty_tpl->tpl_vars['node']->value['description']) {?> title="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['node']->value['description']);?>
"<?php }?> /><?php } else { ?><img src="themes/OneEleven/images/icons/topfiles/modules.png" width="48" height="48" alt="<?php echo $_smarty_tpl->tpl_vars['node']->value['title'];?>
"<?php if ($_smarty_tpl->tpl_vars['node']->value['description']) {?> title="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['node']->value['description']);?>
"<?php }?> /><?php }?></a><h3><a href="<?php echo $_smarty_tpl->tpl_vars['node']->value['url'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['target'])) {?> target="<?php echo $_smarty_tpl->tpl_vars['node']->value['target'];?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['node']->value['selected']) {?> class="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['node']->value['title'];?>
</a></h3><?php if ($_smarty_tpl->tpl_vars['node']->value['description']) {?><span class="description"><?php echo $_smarty_tpl->tpl_vars['node']->value['description'];?>
</span><?php }?><?php if (isset($_smarty_tpl->tpl_vars['node']->value['children'])) {?><h4><?php echo lang('subitems');?>
</h4><ul class="subitems cf"><?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?><li><a href="<?php echo $_smarty_tpl->tpl_vars['one']->value['url'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['one']->value['target'])) {?> target="<?php echo $_smarty_tpl->tpl_vars['one']->value['target'];?>
"<?php }?> <?php if (substr($_smarty_tpl->tpl_vars['one']->value['url'],0,6)=='logout'&&isset($_smarty_tpl->tpl_vars['is_sitedown']->value)) {?>onclick="return confirm('<?php echo strtr(lang('maintenance_warning'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
')"<?php }?>><?php echo $_smarty_tpl->tpl_vars['one']->value['title'];?>
</a></li><?php } ?></ul><?php }?></nav></div><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['box']['index']%3==2) {?><div class="clear"></div><?php }?><?php }?><?php } ?><?php }} ?>
