<?php /* Smarty version Smarty-3.1-DEV, created on 2020-03-16 11:42:04
         compiled from "module_file_tpl:ModuleManager;adminprefs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19567509335e6f57fc6a1e24-29788151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e896ccb3b0aedbcc655df506781bc5df5016b85e' => 
    array (
      0 => 'module_file_tpl:ModuleManager;adminprefs.tpl',
      1 => 1496384393,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '19567509335e6f57fc6a1e24-29788151',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ModuleManager' => 0,
    'message' => 0,
    'module_repository' => 0,
    'actionid' => 0,
    'dl_chunksize' => 0,
    'latestdepends' => 0,
    'developer_mode' => 0,
    'allowuninstall' => 0,
    'disable_caching' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5e6f57fc6b94f2_25294294',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e6f57fc6b94f2_25294294')) {function content_5e6f57fc6b94f2_25294294($_smarty_tpl) {?><?php if (!is_callable('smarty_function_form_start')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/plugins/function.form_start.php';
if (!is_callable('smarty_function_cms_help')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/admin/plugins/function.cms_help.php';
if (!is_callable('smarty_cms_function_cms_yesno')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/plugins/function.cms_yesno.php';
if (!is_callable('smarty_function_form_end')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/plugins/function.form_end.php';
?><script type="text/javascript">
$(document).ready(function(){
  $(document).on('click','#reseturl',function(){
    return confirm('<?php echo strtr($_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('confirm_reseturl'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
  });
  $(document).on('click','#settings_submit',function(){
    return confirm('<?php echo strtr($_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('confirm_settings'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
  });
});
</script>
<?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?><p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p><?php }?>

<?php echo smarty_function_form_start(array('action'=>'setprefs'),$_smarty_tpl);?>

<?php if (isset($_smarty_tpl->tpl_vars['module_repository']->value)) {?>
  <div class="pageoverflow">
    <p class="pagetext"><label for="mr_url"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('prompt_repository_url');?>
:</label></p>
    <p class="pageinput">
      <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
url" id="mr_url" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['module_repository']->value;?>
"/>
      <input type="submit" id="reseturl" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
reseturl" value="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('reset');?>
"/>
    </p>
  </div>

<?php }?>

  <div class="pageoverflow">
    <p class="pagetext"><label><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('prompt_dl_chunksize');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_dl_chunksize','title'=>$_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('prompt_dl_chunksize')),$_smarty_tpl);?>
</p>
    <p class="pageinput">
      <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
dl_chunksize" value="<?php echo $_smarty_tpl->tpl_vars['dl_chunksize']->value;?>
" size="3" maxlength="3"/>
    </p>
  </div>

  <div class="pageoverflow">
    <p class="pagetext"><label for="latestdepends"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('latestdepends');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_latestdepends','title'=>$_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('latestdepends')),$_smarty_tpl);?>
</p>
    <p class="pageinput">
      <select id="latestdepends" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
latestdepends"><?php echo smarty_cms_function_cms_yesno(array('selected'=>$_smarty_tpl->tpl_vars['latestdepends']->value),$_smarty_tpl);?>
</select>
    </p>
  </div>

<?php if (isset($_smarty_tpl->tpl_vars['developer_mode']->value)) {?>
  <div class="pageoverflow">
    <p class="pagetext"><label for="allowuninstall"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('allowuninstall');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_allowuninstall','title'=>$_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('allowuninstall')),$_smarty_tpl);?>
</p>
    <p class="pageinput">
      <select id="allowuninstall" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
allowuninstall"><?php echo smarty_cms_function_cms_yesno(array('selected'=>$_smarty_tpl->tpl_vars['allowuninstall']->value),$_smarty_tpl);?>
</select>
    </p>
  </div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['disable_caching']->value)) {?>
  <div class="pageoverflow">
    <p class="pagetext"><label for="disable_caching"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('prompt_disable_caching');?>
:</label>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_disable_caching','title'=>$_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('prompt_disable_caching')),$_smarty_tpl);?>
</p>
    <p class="pageinput">
      <select id="disable_caching" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
disable_caching"><?php echo smarty_cms_function_cms_yesno(array('selected'=>$_smarty_tpl->tpl_vars['disable_caching']->value),$_smarty_tpl);?>
</select>
    </p>
  </div>
<?php }?>

  <div class="pageoverflow">
    <p class="pagetext"></p>
    <p class="pageinput">
      <input type="submit" id="settings_submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
submit" value="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('submit');?>
"/>
    </p>
  </div>
<?php echo smarty_function_form_end(array(),$_smarty_tpl);?>

<?php }} ?>
