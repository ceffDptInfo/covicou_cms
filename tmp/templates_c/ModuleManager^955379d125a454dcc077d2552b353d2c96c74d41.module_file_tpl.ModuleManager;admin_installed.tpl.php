<?php /* Smarty version Smarty-3.1-DEV, created on 2020-03-16 11:42:04
         compiled from "module_file_tpl:ModuleManager;admin_installed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12615123115e6f57fc5bebf7-11958723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '955379d125a454dcc077d2552b353d2c96c74d41' => 
    array (
      0 => 'module_file_tpl:ModuleManager;admin_installed.tpl',
      1 => 1496384393,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '12615123115e6f57fc5bebf7-11958723',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ModuleManager' => 0,
    'actionid' => 0,
    'module_info' => 0,
    'allow_export' => 0,
    'rowclass' => 0,
    'item' => 0,
    'system_img' => 0,
    'star_img' => 0,
    'missingdep_img' => 0,
    'deprecated_img' => 0,
    'op' => 0,
    'tmp' => 0,
    'one' => 0,
    'ops' => 0,
    'allow_modman_uninstall' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5e6f57fc66c625_42395161',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e6f57fc66c625_42395161')) {function content_5e6f57fc66c625_42395161($_smarty_tpl) {?><?php if (!is_callable('smarty_function_form_start')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/plugins/function.form_start.php';
if (!is_callable('smarty_function_cms_help')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/admin/plugins/function.cms_help.php';
if (!is_callable('smarty_function_form_end')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/plugins/function.form_end.php';
if (!is_callable('smarty_function_admin_icon')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/admin/plugins/function.admin_icon.php';
if (!is_callable('smarty_function_cycle')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/lib/smarty/plugins/function.cycle.php';
if (!is_callable('smarty_cms_function_cms_action_url')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/plugins/function.cms_action_url.php';
?><script type="text/javascript">
$(document).ready(function(){
  $('a.mod_upgrade').click( function(){ return confirm('<?php echo strtr($_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('confirm_upgrade'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'); });
  $('a.mod_remove').click( function(){ return confirm('<?php echo strtr($_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('confirm_remove'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'); });
  $('a.mod_chmod').click( function(){ return confirm('<?php echo strtr($_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('confirm_chmod'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'); });
  $('a.mod_uninstall').click( function(){ return confirm('<?php echo strtr($_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('confirm_uninstall'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'); });

  $('#importbtn').click(function(){
    $('#importdlg').dialog({
      modal: true,
      buttons: {
        <?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('submit');?>
: function() {
          var file = $('#xml_upload').val();
          if( file.length == 0 ) {
            alert('<?php echo strtr($_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('error_nofileuploaded'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
            return;
          }
          var ext  = file.split('.').pop().toLowerCase();
          if($.inArray(ext, ['xml','cmsmod']) == -1) {
            alert('<?php echo strtr($_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('error_invaliduploadtype'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
            return;
          }
          $(this).dialog('close');
          $('#local_import').submit();
        },
        <?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('cancel');?>
: function() {
          $(this).dialog('close');
        }
      }
    });
  });
});
</script>

<div id="importdlg" title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('importxml');?>
" style="display: none;">
  <?php echo smarty_function_form_start(array('id'=>'local_import','action'=>'local_import'),$_smarty_tpl);?>

  <div class="pageoverflow">
    <p class="pagetext"><label for="xml_upload"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('uploadfile');?>
:</label>
       <?php echo smarty_function_cms_help(array('title'=>$_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_mm_importxml'),'key'=>'help_mm_importxml'),$_smarty_tpl);?>

    </p>
    <p class="pageinput">
      <input id="xml_upload" type="file" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
upload" accept="text/xml"/>
    </p>
  </div>
  <?php echo smarty_function_form_end(array(),$_smarty_tpl);?>

</div>

<?php if (isset($_smarty_tpl->tpl_vars['module_info']->value)) {?>
<div class="pageoptions">
  <a id="importbtn"><?php echo smarty_function_admin_icon(array('icon'=>'import.gif'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('importxml');?>
</a>
</div>

<table class="pagetable">
  <thead>
    <tr>
      <th></th>
      <th><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('nametext');?>
</th>
      <th><span title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_moduleversion');?>
"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('vertext');?>
</span></th>
      <th><span title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_modulestatus');?>
"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('status');?>
</span></th>
      <th><span title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_moduleaction');?>
"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('action');?>
</span></th>
      <th class="pageicon"><span title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_moduleactive');?>
"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('active');?>
</span></th>
      <th class="pageicon"><span title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_modulehelp');?>
"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('helptxt');?>
</span></th>
      <th class="pageicon"><span title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_moduleabout');?>
"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('abouttxt');?>
</span></th>
      <?php if ($_smarty_tpl->tpl_vars['allow_export']->value) {?><th class="pageicon"><span title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_moduleexport');?>
"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('export');?>
</span></th><?php }?>
    </tr>
  </thead>
  <tbody>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['module_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <?php echo smarty_function_cycle(array('values'=>"row1,row2",'assign'=>'rowclass'),$_smarty_tpl);?>

    <tr class="<?php echo $_smarty_tpl->tpl_vars['rowclass']->value;?>
" id="_<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
">
      <td><?php if ($_smarty_tpl->tpl_vars['item']->value['system_module']) {?><?php echo $_smarty_tpl->tpl_vars['system_img']->value;?>
<?php }?>
           <?php if ($_smarty_tpl->tpl_vars['item']->value['e_status']=='newer_available') {?><?php echo $_smarty_tpl->tpl_vars['star_img']->value;?>
<?php }?>
	   <?php if ($_smarty_tpl->tpl_vars['item']->value['missing_deps']) {?><?php echo $_smarty_tpl->tpl_vars['missingdep_img']->value;?>
<?php }?>
           <?php if ($_smarty_tpl->tpl_vars['item']->value['deprecated']) {?><?php echo $_smarty_tpl->tpl_vars['deprecated_img']->value;?>
<?php }?>
      </td>
      <td>
          <?php if (!$_smarty_tpl->tpl_vars['item']->value['installed']||$_smarty_tpl->tpl_vars['item']->value['e_status']=='need_upgrade') {?>
            <span title="<?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
" class="important"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</span>
          <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['deprecated']) {?>
            <span title="<?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
" style="color: red;"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</span>
          <?php } else { ?>
            <span title="<?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['system_module']) {?> style="color: green;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</span>
          <?php }?>
      </td>
      <td><?php if ($_smarty_tpl->tpl_vars['item']->value['e_status']=='newer_available') {?>
            <strong title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('status_newer_available');?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['installed_version'];?>
</strong>
          <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['item']->value['installed_version'];?>

          <?php }?>
      </td>
      <td>
          <?php if (isset($_smarty_tpl->tpl_vars['ops'])) {$_smarty_tpl->tpl_vars['ops'] = clone $_smarty_tpl->tpl_vars['ops'];
$_smarty_tpl->tpl_vars['ops']->value = array(); $_smarty_tpl->tpl_vars['ops']->nocache = null; $_smarty_tpl->tpl_vars['ops']->scope = 0;
} else $_smarty_tpl->tpl_vars['ops'] = new Smarty_variable(array(), null, 0);?>
          <?php if (!$_smarty_tpl->tpl_vars['item']->value['installed']) {?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['can_install']) {?>
              <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'op', null); ob_start(); ?><strong title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_notinstalled');?>
"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('notinstalled');?>
</strong><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->createLocalArrayVariable('ops', null, 0);
$_smarty_tpl->tpl_vars['ops']->value[] = $_smarty_tpl->tpl_vars['op']->value;?>
	    <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['missing_deps']) {?>
              <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'op', null); ob_start(); ?><a class="modop mod_missingdeps important" style="color: red;" title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_missingdeps');?>
" href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'local_missingdeps','mod'=>$_smarty_tpl->tpl_vars['item']->value['name']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('missingdeps');?>
</a><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->createLocalArrayVariable('ops', null, 0);
$_smarty_tpl->tpl_vars['ops']->value[] = $_smarty_tpl->tpl_vars['op']->value;?>
            <?php }?>
          <?php } else { ?>
            <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'op', null); ob_start(); ?><?php if (isset($_smarty_tpl->tpl_vars['tmp'])) {$_smarty_tpl->tpl_vars['tmp'] = clone $_smarty_tpl->tpl_vars['tmp'];
$_smarty_tpl->tpl_vars['tmp']->value = ('status_').($_smarty_tpl->tpl_vars['item']->value['status']); $_smarty_tpl->tpl_vars['tmp']->nocache = null; $_smarty_tpl->tpl_vars['tmp']->scope = 0;
} else $_smarty_tpl->tpl_vars['tmp'] = new Smarty_variable(('status_').($_smarty_tpl->tpl_vars['item']->value['status']), null, 0);?><span title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang($_smarty_tpl->tpl_vars['tmp']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang($_smarty_tpl->tpl_vars['item']->value['status']);?>
</span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->createLocalArrayVariable('ops', null, 0);
$_smarty_tpl->tpl_vars['ops']->value[] = $_smarty_tpl->tpl_vars['op']->value;?>
	    <?php if ($_smarty_tpl->tpl_vars['item']->value['missing_deps']) {?>
              <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'op', null); ob_start(); ?><a class="modop mod_missingdeps important" style="color: red;" title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_missingdeps');?>
" href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'local_missingdeps','mod'=>$_smarty_tpl->tpl_vars['item']->value['name']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('missingdeps');?>
</a><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->createLocalArrayVariable('ops', null, 0);
$_smarty_tpl->tpl_vars['ops']->value[] = $_smarty_tpl->tpl_vars['op']->value;?>
	    <?php }?>
  	    <?php if (!$_smarty_tpl->tpl_vars['item']->value['can_uninstall']) {?>
              <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'op', null); ob_start(); ?><span title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_cantuninstall');?>
"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('cantuninstall');?>
</span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->createLocalArrayVariable('ops', null, 0);
$_smarty_tpl->tpl_vars['ops']->value[] = $_smarty_tpl->tpl_vars['op']->value;?>
	    <?php }?>
          <?php }?>
          <?php if (isset($_smarty_tpl->tpl_vars['item']->value['e_status'])) {?>
            <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'op', null); ob_start(); ?><?php if (isset($_smarty_tpl->tpl_vars['tmp'])) {$_smarty_tpl->tpl_vars['tmp'] = clone $_smarty_tpl->tpl_vars['tmp'];
$_smarty_tpl->tpl_vars['tmp']->value = ('status_').($_smarty_tpl->tpl_vars['item']->value['e_status']); $_smarty_tpl->tpl_vars['tmp']->nocache = null; $_smarty_tpl->tpl_vars['tmp']->scope = 0;
} else $_smarty_tpl->tpl_vars['tmp'] = new Smarty_variable(('status_').($_smarty_tpl->tpl_vars['item']->value['e_status']), null, 0);?><span <?php if ($_smarty_tpl->tpl_vars['item']->value['e_status']=='db_newer') {?>class="important"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang($_smarty_tpl->tpl_vars['tmp']->value);?>
" style="color: orange;"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang($_smarty_tpl->tpl_vars['item']->value['e_status']);?>
</span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->createLocalArrayVariable('ops', null, 0);
$_smarty_tpl->tpl_vars['ops']->value[] = $_smarty_tpl->tpl_vars['op']->value;?>
          <?php }?>
	  <?php if (!$_smarty_tpl->tpl_vars['item']->value['ver_compatible']) {?>
            <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'op', null); ob_start(); ?><span class="important" title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_notcompatible');?>
"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('notcompatible');?>
</span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->createLocalArrayVariable('ops', null, 0);
$_smarty_tpl->tpl_vars['ops']->value[] = $_smarty_tpl->tpl_vars['op']->value;?>
          <?php }?>
          <?php if (!$_smarty_tpl->tpl_vars['item']->value['writable']) {?>
            <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'op', null); ob_start(); ?><span title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_cantremove');?>
"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('cantremove');?>
</span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->createLocalArrayVariable('ops', null, 0);
$_smarty_tpl->tpl_vars['ops']->value[] = $_smarty_tpl->tpl_vars['op']->value;?>
          <?php }?>
          <?php if (isset($_smarty_tpl->tpl_vars['item']->value['dependants'])) {?>
	    <?php if (isset($_smarty_tpl->tpl_vars['tmp'])) {$_smarty_tpl->tpl_vars['tmp'] = clone $_smarty_tpl->tpl_vars['tmp'];
$_smarty_tpl->tpl_vars['tmp']->value = array(); $_smarty_tpl->tpl_vars['tmp']->nocache = null; $_smarty_tpl->tpl_vars['tmp']->scope = 0;
} else $_smarty_tpl->tpl_vars['tmp'] = new Smarty_variable(array(), null, 0);?>
	    <?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['dependants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
	      <?php ob_start();?><?php echo smarty_cms_function_cms_action_url(array(),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('tmp', null, 0);
$_smarty_tpl->tpl_vars['tmp']->value[] = "<a href=\"".$_tmp1."#_".((string)$_smarty_tpl->tpl_vars['one']->value)."\">".((string)$_smarty_tpl->tpl_vars['one']->value)."</a>";?>
	    <?php } ?>
            <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'op', null); ob_start(); ?><span title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_depends_upon');?>
"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('depends_upon');?>
</span>: <?php echo implode(', ',$_smarty_tpl->tpl_vars['tmp']->value);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->createLocalArrayVariable('ops', null, 0);
$_smarty_tpl->tpl_vars['ops']->value[] = $_smarty_tpl->tpl_vars['op']->value;?>
          <?php }?>
          <?php echo implode('<br/>',$_smarty_tpl->tpl_vars['ops']->value);?>

      </td>
      <td>
        
        <?php if (isset($_smarty_tpl->tpl_vars['ops'])) {$_smarty_tpl->tpl_vars['ops'] = clone $_smarty_tpl->tpl_vars['ops'];
$_smarty_tpl->tpl_vars['ops']->value = array(); $_smarty_tpl->tpl_vars['ops']->nocache = null; $_smarty_tpl->tpl_vars['ops']->scope = 0;
} else $_smarty_tpl->tpl_vars['ops'] = new Smarty_variable(array(), null, 0);?>
        <?php if (!$_smarty_tpl->tpl_vars['item']->value['installed']) {?>
          <?php if ($_smarty_tpl->tpl_vars['item']->value['can_install']) {?>
            <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'op', null); ob_start(); ?><a class="modop mod_install" href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'local_install','mod'=>$_smarty_tpl->tpl_vars['item']->value['name']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_install');?>
"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('install');?>
</a><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->createLocalArrayVariable('ops', null, 0);
$_smarty_tpl->tpl_vars['ops']->value[] = $_smarty_tpl->tpl_vars['op']->value;?>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['item']->value['writable']) {?>
            <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'op', null); ob_start(); ?><a class="modop mod_remove" href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'local_remove','mod'=>$_smarty_tpl->tpl_vars['item']->value['name']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_remove');?>
"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('remove');?>
</a><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->createLocalArrayVariable('ops', null, 0);
$_smarty_tpl->tpl_vars['ops']->value[] = $_smarty_tpl->tpl_vars['op']->value;?>
          <?php } else { ?>
            <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'op', null); ob_start(); ?><a class="modop mod_chmod" href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'local_chmod','mod'=>$_smarty_tpl->tpl_vars['item']->value['name']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_chmod');?>
"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('changeperms');?>
</a><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->createLocalArrayVariable('ops', null, 0);
$_smarty_tpl->tpl_vars['ops']->value[] = $_smarty_tpl->tpl_vars['op']->value;?>
          <?php }?>
        <?php } else { ?>
	  <?php if ($_smarty_tpl->tpl_vars['item']->value['can_uninstall']) {?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['name']!='ModuleManager'||$_smarty_tpl->tpl_vars['allow_modman_uninstall']->value) {?>
              <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'op', null); ob_start(); ?><a class="modop mod_uninstall" href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'local_uninstall','mod'=>$_smarty_tpl->tpl_vars['item']->value['name']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_uninstall');?>
"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('uninstall');?>
</a><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->createLocalArrayVariable('ops', null, 0);
$_smarty_tpl->tpl_vars['ops']->value[] = $_smarty_tpl->tpl_vars['op']->value;?>
	    <?php }?>
	  <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['item']->value['e_status']=='need_upgrade') {?>
              <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'op', null); ob_start(); ?><a class="modop mod_upgrade" href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'local_upgrade','mod'=>$_smarty_tpl->tpl_vars['item']->value['name']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_upgrade');?>
"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('upgrade');?>
</a><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	      <?php $_smarty_tpl->createLocalArrayVariable('ops', null, 0);
$_smarty_tpl->tpl_vars['ops']->value[] = $_smarty_tpl->tpl_vars['op']->value;?>
          <?php }?>
        <?php }?>
        <?php echo implode('<br/>',$_smarty_tpl->tpl_vars['ops']->value);?>

      </td>
      <td>
	
        <?php if ($_smarty_tpl->tpl_vars['item']->value['can_uninstall']) {?>
          <?php if ($_smarty_tpl->tpl_vars['item']->value['active']) {?>
            <a class="modop mod_inactive" href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'local_active','mod'=>$_smarty_tpl->tpl_vars['item']->value['name'],'state'=>0),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('toggle_inactive');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'true.gif'),$_smarty_tpl);?>
</a>
          <?php } else { ?>
            <a class="modop mod_active" href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'local_active','mod'=>$_smarty_tpl->tpl_vars['item']->value['name'],'state'=>1),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('toggle_active');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'false.gif'),$_smarty_tpl);?>
</a>
          <?php }?>
        <?php }?>
      </td>
      <td>
        <a class="modop mod_help" href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'local_help','mod'=>$_smarty_tpl->tpl_vars['item']->value['name']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_modulehelp');?>
"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('helptxt');?>
</a>
      </td>
      <td>
        <a class="modop mod_about" href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'local_about','mod'=>$_smarty_tpl->tpl_vars['item']->value['name']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_moduleabout');?>
"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('abouttxt');?>
</a>
      </td>
      <?php if ($_smarty_tpl->tpl_vars['allow_export']->value) {?><td>
        <?php if ($_smarty_tpl->tpl_vars['item']->value['active']&&$_smarty_tpl->tpl_vars['item']->value['root_writable']) {?>
          <a class="modop mod_export" href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'local_export','mod'=>$_smarty_tpl->tpl_vars['item']->value['name']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('title_moduleexport');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'xml_rss.gif'),$_smarty_tpl);?>
</a>
        <?php }?>
      </td><?php }?>
    </tr>
    <?php } ?>
  </tbody>
</table>
<?php } else { ?>
  <div class="warning"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('error_nomodules');?>
</div>
<?php }?>
<?php }} ?>
