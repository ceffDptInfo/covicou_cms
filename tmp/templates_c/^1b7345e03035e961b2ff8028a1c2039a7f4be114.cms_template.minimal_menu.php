<?php /* Smarty version Smarty-3.1-DEV, created on 2020-03-16 11:42:38
         compiled from "cms_template:minimal_menu" */ ?>
<?php /*%%SmartyHeaderCode:20212190325e6f581ee2e456-49364330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b7345e03035e961b2ff8028a1c2039a7f4be114' => 
    array (
      0 => 'cms_template:minimal_menu',
      1 => '1505808053',
      2 => 'cms_template',
    ),
  ),
  'nocache_hash' => '20212190325e6f581ee2e456-49364330',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'depth' => 0,
    'nodes' => 0,
    'node' => 0,
    'liclass' => 0,
    'aclass' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5e6f581ee4f558_19424386',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e6f581ee4f558_19424386')) {function content_5e6f581ee4f558_19424386($_smarty_tpl) {?>



<?php if (!isset($_smarty_tpl->tpl_vars['depth']->value)) {?><?php if (isset($_smarty_tpl->tpl_vars['depth'])) {$_smarty_tpl->tpl_vars['depth'] = clone $_smarty_tpl->tpl_vars['depth'];
$_smarty_tpl->tpl_vars['depth']->value = 0; $_smarty_tpl->tpl_vars['depth']->nocache = null; $_smarty_tpl->tpl_vars['depth']->scope = 0;
} else $_smarty_tpl->tpl_vars['depth'] = new Smarty_variable(0, null, 0);?><?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['nodes']->value)) {?><ul class='reduire'><?php  $_smarty_tpl->tpl_vars['node'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['node']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nodes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['node']->key => $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['node']->value->type=='sectionheader') {?><li class="sectionheader<?php if ($_smarty_tpl->tpl_vars['node']->value->parent) {?> activeparent<?php }?>"><?php if (isset($_smarty_tpl->tpl_vars['node']->value->children)) {?><input type="checkbox" name="sous_menu" id="menu_<?php echo $_smarty_tpl->tpl_vars['node']->value->id;?>
" class="nav-trigger"><label for="menu_<?php echo $_smarty_tpl->tpl_vars['node']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
<img src="http://www.propaj.ch/uploads/images/images_site/fleche_menu_mobile_3.png"></label><?php echo $_smarty_tpl->getSubTemplate (basename($_smarty_tpl->source->filepath), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('nodes'=>$_smarty_tpl->tpl_vars['node']->value->children,'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), 0);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
<?php }?></li><?php } elseif ($_smarty_tpl->tpl_vars['node']->value->type=='separator') {?><li style="list-style-type: none;"><hr class="separator"/></li><?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['liclass'])) {$_smarty_tpl->tpl_vars['liclass'] = clone $_smarty_tpl->tpl_vars['liclass'];
$_smarty_tpl->tpl_vars['liclass']->value = ''; $_smarty_tpl->tpl_vars['liclass']->nocache = null; $_smarty_tpl->tpl_vars['liclass']->scope = 0;
} else $_smarty_tpl->tpl_vars['liclass'] = new Smarty_variable('', null, 0);?><?php if (isset($_smarty_tpl->tpl_vars['aclass'])) {$_smarty_tpl->tpl_vars['aclass'] = clone $_smarty_tpl->tpl_vars['aclass'];
$_smarty_tpl->tpl_vars['aclass']->value = ''; $_smarty_tpl->tpl_vars['aclass']->nocache = null; $_smarty_tpl->tpl_vars['aclass']->scope = 0;
} else $_smarty_tpl->tpl_vars['aclass'] = new Smarty_variable('', null, 0);?><?php if ($_smarty_tpl->tpl_vars['node']->value->current) {?><?php if (isset($_smarty_tpl->tpl_vars['liclass'])) {$_smarty_tpl->tpl_vars['liclass'] = clone $_smarty_tpl->tpl_vars['liclass'];
$_smarty_tpl->tpl_vars['liclass']->value = 'currentpage'; $_smarty_tpl->tpl_vars['liclass']->nocache = null; $_smarty_tpl->tpl_vars['liclass']->scope = 0;
} else $_smarty_tpl->tpl_vars['liclass'] = new Smarty_variable('currentpage', null, 0);?><?php if (isset($_smarty_tpl->tpl_vars['aclass'])) {$_smarty_tpl->tpl_vars['aclass'] = clone $_smarty_tpl->tpl_vars['aclass'];
$_smarty_tpl->tpl_vars['aclass']->value = 'currentpage'; $_smarty_tpl->tpl_vars['aclass']->nocache = null; $_smarty_tpl->tpl_vars['aclass']->scope = 0;
} else $_smarty_tpl->tpl_vars['aclass'] = new Smarty_variable('currentpage', null, 0);?><?php } elseif ($_smarty_tpl->tpl_vars['node']->value->parent) {?><?php if (isset($_smarty_tpl->tpl_vars['liclass'])) {$_smarty_tpl->tpl_vars['liclass'] = clone $_smarty_tpl->tpl_vars['liclass'];
$_smarty_tpl->tpl_vars['liclass']->value = 'activeparent'; $_smarty_tpl->tpl_vars['liclass']->nocache = null; $_smarty_tpl->tpl_vars['liclass']->scope = 0;
} else $_smarty_tpl->tpl_vars['liclass'] = new Smarty_variable('activeparent', null, 0);?><?php if (isset($_smarty_tpl->tpl_vars['aclass'])) {$_smarty_tpl->tpl_vars['aclass'] = clone $_smarty_tpl->tpl_vars['aclass'];
$_smarty_tpl->tpl_vars['aclass']->value = 'activeparent'; $_smarty_tpl->tpl_vars['aclass']->nocache = null; $_smarty_tpl->tpl_vars['aclass']->scope = 0;
} else $_smarty_tpl->tpl_vars['aclass'] = new Smarty_variable('activeparent', null, 0);?><?php }?><li<?php if ($_smarty_tpl->tpl_vars['liclass']->value!='') {?> class="<?php echo $_smarty_tpl->tpl_vars['liclass']->value;?>
"<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['node']->value->children)) {?><a<?php if ($_smarty_tpl->tpl_vars['aclass']->value!='') {?> class="<?php echo $_smarty_tpl->tpl_vars['aclass']->value;?>
"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['node']->value->url;?>
"<?php if ($_smarty_tpl->tpl_vars['node']->value->target!='') {?> target="<?php echo $_smarty_tpl->tpl_vars['node']->value->target;?>
"<?php }?>><label for="menu_<?php echo $_smarty_tpl->tpl_vars['node']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</label></a><input type="radio" name="sous_menu" id="menu_<?php echo $_smarty_tpl->tpl_vars['node']->value->id;?>
" class="nav-trigger"><?php echo $_smarty_tpl->getSubTemplate (basename($_smarty_tpl->source->filepath), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('nodes'=>$_smarty_tpl->tpl_vars['node']->value->children,'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), 0);?>
<?php } else { ?><a<?php if ($_smarty_tpl->tpl_vars['aclass']->value!='') {?> class="<?php echo $_smarty_tpl->tpl_vars['aclass']->value;?>
"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['node']->value->url;?>
"<?php if ($_smarty_tpl->tpl_vars['node']->value->target!='') {?> target="<?php echo $_smarty_tpl->tpl_vars['node']->value->target;?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</a><?php }?></li><?php }?><?php } ?></ul><?php }?><?php }} ?>
