<?php /* Smarty version Smarty-3.1-DEV, created on 2020-03-16 14:38:40
         compiled from "module_file_tpl:CMSContentManager;ajax_get_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4805778595e6f8160ee4724-51441457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfb6b21f65f4aa114b45d2ad3949b70b47fbc561' => 
    array (
      0 => 'module_file_tpl:CMSContentManager;ajax_get_content.tpl',
      1 => 1496384393,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '4805778595e6f8160ee4724-51441457',
  'function' => 
  array (
    'do_content_row' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'can_add_content' => 0,
    'mod' => 0,
    'content_list' => 0,
    'can_reorder_content' => 0,
    'have_locks' => 0,
    'npages' => 0,
    'actionid' => 0,
    'pagelist' => 0,
    'curpage' => 0,
    'columns' => 0,
    'flag' => 0,
    'column' => 0,
    'row' => 0,
    'indent' => 0,
    'tooltip_pageinfo' => 0,
    'tooltip_lockinfo' => 0,
    'prettyurls_ok' => 0,
    'tooltip_ownerinfo' => 0,
    'error' => 0,
    'coltitle_page' => 0,
    'colhdr_page' => 0,
    'rowclass' => 0,
    'multiselect' => 0,
    'bulk_options' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5e6f8161082479_43687366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e6f8161082479_43687366')) {function content_5e6f8161082479_43687366($_smarty_tpl) {?><?php if (!is_callable('smarty_cms_function_cms_action_url')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/plugins/function.cms_action_url.php';
if (!is_callable('smarty_function_admin_icon')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/admin/plugins/function.admin_icon.php';
if (!is_callable('smarty_function_form_start')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/plugins/function.form_start.php';
if (!is_callable('smarty_function_html_options')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/lib/smarty/plugins/function.html_options.php';
if (!is_callable('smarty_function_form_end')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/plugins/function.form_end.php';
if (!is_callable('smarty_function_cycle')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/lib/smarty/plugins/function.cycle.php';
?><div class="row c_full">
  <div class="pageoptions grid_6">
    <ul class="options-menu">

      <?php if ($_smarty_tpl->tpl_vars['can_add_content']->value) {?>
      <li>
        <a  href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'admin_editcontent'),$_smarty_tpl);?>
" accesskey="n" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('addcontent');?>
" class="pageoptions"><?php echo smarty_function_admin_icon(array('icon'=>'newobject.gif','alt'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('addcontent')),$_smarty_tpl);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('addcontent');?>
</a>
      </li>
      <?php }?>

      <?php if (isset($_smarty_tpl->tpl_vars['content_list']->value)) {?>
        <li class="parent"><?php echo smarty_function_admin_icon(array('icon'=>'run.gif','alt'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_options')),$_smarty_tpl);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_options');?>

        <ul id="popupmenucontents">
          <li><a class="expandall" href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'defaultadmin','expandall'=>1),$_smarty_tpl);?>
" accesskey="e" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_expandall');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'expandall.gif','alt'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('expandall')),$_smarty_tpl);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('expandall');?>
</a></li>
	    <li><a class="collapseall" href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'defaultadmin','collapseall'=>1),$_smarty_tpl);?>
" accesskey="c" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_collapseall');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'contractall.gif','alt'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('contractall')),$_smarty_tpl);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('contractall');?>
</a></li>

	  <?php if ($_smarty_tpl->tpl_vars['can_reorder_content']->value) {?>
	    <li><a id="ordercontent" href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'admin_ordercontent'),$_smarty_tpl);?>
" accesskey="r" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_ordercontent');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'reorder.gif','alt'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('reorderpages')),$_smarty_tpl);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('reorderpages');?>
</a></li>
	  <?php }?>
	  <li><a id="myoptions" accesskey="o" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_settings');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'edit.gif','alt'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_settings')),$_smarty_tpl);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['mod']->value->lang('prompt_settings');?>
</a></li>
	  <?php if ($_smarty_tpl->tpl_vars['have_locks']->value) {?>
	    <li><a id="clearlocks" href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'admin_clearlocks'),$_smarty_tpl);?>
" accesskey="l" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_clearlocks');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'run.gif','alt'=>''),$_smarty_tpl);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_clearlocks');?>
</a></li>
	  <?php }?>
	</ul>
        </li>
      <?php }?>
    </ul>
  </div>

  <div class="pageoptions options-form grid_6">
    <?php if (isset($_smarty_tpl->tpl_vars['content_list']->value)) {?>
    <span><label for="ajax_find"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('find');?>
:</label>&nbsp;<input type="text" id="ajax_find" name="ajax_find" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_listcontent_find');?>
" value="" size="25"/></span>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['content_list']->value)&&$_smarty_tpl->tpl_vars['npages']->value>1) {?>
      <?php echo smarty_function_form_start(array('action'=>'defaultadmin'),$_smarty_tpl);?>

        <span><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('page');?>
:&nbsp;
        <select name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
curpage" id="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
curpage">
          <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['pagelist']->value,'selected'=>$_smarty_tpl->tpl_vars['curpage']->value),$_smarty_tpl);?>

        </select>
        <button name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
submitpage" class="invisible ui-button ui-widget ui-corner-all ui-state-default ui-button-text-icon-primary">
          <span class="ui-button-icon-primary ui-icon ui-icon-circle-check"></span>
          <span class="ui-button-text"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('go');?>
</span>
        </button>
        </span>
      <?php echo smarty_function_form_end(array(),$_smarty_tpl);?>

    <?php }?>
  </div>
</div>

<?php echo smarty_function_form_start(array('action'=>'defaultadmin','id'=>'listform'),$_smarty_tpl);?>

  <div id="contentlist">
  <?php if (isset($_smarty_tpl->tpl_vars['content_list']->value)) {?>
    <?php if (!is_callable('smarty_function_admin_icon')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/admin/plugins/function.admin_icon.php';
if (!is_callable('smarty_function_repeat')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/plugins/function.repeat.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/lib/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_relative_time')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/plugins/modifier.relative_time.php';
if (!is_callable('smarty_modifier_cms_date_format')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/plugins/modifier.cms_date_format.php';
?><?php if (!function_exists('smarty_template_function_do_content_row')) {
    function smarty_template_function_do_content_row($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['do_content_row']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
      <?php  $_smarty_tpl->tpl_vars['flag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['flag']->_loop = false;
 $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['columns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->key => $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->_loop = true;
 $_smarty_tpl->tpl_vars['column']->value = $_smarty_tpl->tpl_vars['flag']->key;
?>
        <?php if (!$_smarty_tpl->tpl_vars['flag']->value) {?><?php continue 1?><?php }?>
	<td>
	  <?php if ($_smarty_tpl->tpl_vars['column']->value=='expand') {?>
	    <?php if ($_smarty_tpl->tpl_vars['row']->value['expand']=='open') {?>
	    <a href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'defaultadmin','collapse'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
" class="page_collapse" accesskey="C" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_page_collapse');?>
">
	      <?php echo smarty_function_admin_icon(array('icon'=>'contract.gif','class'=>"hier_contract"),$_smarty_tpl);?>

	    </a>
	    <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['expand']=='closed') {?>
	      <a href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'defaultadmin','expand'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
" class="page_expand" accesskey="c" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_page_expand');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'expand.gif','class'=>"hier_expand"),$_smarty_tpl);?>
</a>
	    <?php }?>
	  <?php } elseif ($_smarty_tpl->tpl_vars['column']->value=='icon1') {?>
	    <?php if (isset($_smarty_tpl->tpl_vars['row']->value['lock'])) {?>
	      <?php echo smarty_function_admin_icon(array('icon'=>'warning.gif','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('title_locked')),$_smarty_tpl);?>

	    <?php }?>
	  <?php } elseif ($_smarty_tpl->tpl_vars['column']->value=='hier') {?>
	    <?php echo $_smarty_tpl->tpl_vars['row']->value['hier'];?>

	  <?php } elseif ($_smarty_tpl->tpl_vars['column']->value=='page') {?>
	    <?php if ($_smarty_tpl->tpl_vars['row']->value['can_edit']) {?>
	      <?php if ($_smarty_tpl->tpl_vars['indent']->value) {?><?php echo smarty_function_repeat(array('string'=>'-&nbsp;&nbsp;','times'=>$_smarty_tpl->tpl_vars['row']->value['depth']-2),$_smarty_tpl);?>
<?php }?>
	      
	      <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'tooltip_pageinfo', null); ob_start(); ?><strong><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_content_id');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
<br/><strong><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_title');?>
:</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
<br/><strong><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_name');?>
:</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['menutext'], ENT_QUOTES, 'UTF-8', true);?>
<br/><?php if (isset($_smarty_tpl->tpl_vars['row']->value['alias'])) {?><strong><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_alias');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['row']->value['alias'];?>
<br/><?php }?><?php if ($_smarty_tpl->tpl_vars['row']->value['secure']) {?><strong><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_secure');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('yes');?>
<br/><?php }?><strong><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_cachable');?>
:</strong> <?php if ($_smarty_tpl->tpl_vars['row']->value['cachable']) {?><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('yes');?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('no');?>
<?php }?><br/><strong><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_showinmenu');?>
:</strong> <?php if ($_smarty_tpl->tpl_vars['row']->value['showinmenu']) {?><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('yes');?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('no');?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

	      <a href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'admin_editcontent','content_id'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
" class="page_edit tooltip" accesskey="e" data-cms-content='<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
' data-cms-description='<?php echo cms_htmlentities($_smarty_tpl->tpl_vars['tooltip_pageinfo']->value);?>
'><?php echo (($tmp = @$_smarty_tpl->tpl_vars['row']->value['page'])===null||$tmp==='' ? '' : $tmp);?>
</a>
	    <?php } else { ?>
	      <?php if (isset($_smarty_tpl->tpl_vars['row']->value['lock'])) {?>
	        <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'tooltip_lockinfo', null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['row']->value['can_steal']) {?><strong><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('locked_steal');?>
:</strong><br/><?php }?><strong><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('locked_by');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['row']->value['lockuser'];?>
<br/><strong><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('locked_since');?>
:</strong> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['lock']['created'],'%x %H:%M');?>
<br/><?php if ($_smarty_tpl->tpl_vars['row']->value['lock']['expires']<time()) {?><span style="color: red;"><strong><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('lock_expired');?>
:</strong> <?php echo smarty_modifier_relative_time($_smarty_tpl->tpl_vars['row']->value['lock']['expires']);?>
</span><?php } else { ?><strong><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('lock_expires');?>
:</strong> <?php echo smarty_modifier_relative_time($_smarty_tpl->tpl_vars['row']->value['lock']['expires']);?>
<?php }?><br/><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	        <?php if (!$_smarty_tpl->tpl_vars['row']->value['can_steal']) {?>
	          <span class="tooltip" data-cms-description='<?php echo htmlentities($_smarty_tpl->tpl_vars['tooltip_lockinfo']->value);?>
'><?php echo $_smarty_tpl->tpl_vars['row']->value['page'];?>
</span>
	        <?php } else { ?>
	          <a href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'admin_editcontent','content_id'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
" class="page_edit tooltip steal_lock" accesskey="e" data-cms-content='<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
' data-cms-description='<?php echo htmlentities($_smarty_tpl->tpl_vars['tooltip_lockinfo']->value);?>
'><?php echo $_smarty_tpl->tpl_vars['row']->value['page'];?>
</a>
	        <?php }?>
	      <?php } else { ?>
	        <?php echo $_smarty_tpl->tpl_vars['row']->value['page'];?>

	      <?php }?>
	    <?php }?>
	  <?php } elseif ($_smarty_tpl->tpl_vars['column']->value=='alias') {?>
	    <?php echo (($tmp = @$_smarty_tpl->tpl_vars['row']->value['alias'])===null||$tmp==='' ? '' : $tmp);?>

	  <?php } elseif ($_smarty_tpl->tpl_vars['column']->value=='url') {?>
	    <?php if ($_smarty_tpl->tpl_vars['prettyurls_ok']->value) {?>
	      <?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>

	    <?php } else { ?>
	      <span class="text-red"><?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
</span>
	    <?php }?>
	  <?php } elseif ($_smarty_tpl->tpl_vars['column']->value=='template') {?>
	    <?php if (isset($_smarty_tpl->tpl_vars['row']->value['template'])&&$_smarty_tpl->tpl_vars['row']->value['template']!='') {?>
	      <?php if ($_smarty_tpl->tpl_vars['row']->value['can_edit_tpl']) {?>
	        <a href="<?php echo smarty_cms_function_cms_action_url(array('module'=>'DesignManager','action'=>'admin_edit_template','tpl'=>$_smarty_tpl->tpl_vars['row']->value['template_id']),$_smarty_tpl);?>
" class="page_template" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_page_template');?>
">
		  <?php echo $_smarty_tpl->tpl_vars['row']->value['template'];?>

		</a>
	      <?php } else { ?>
	        <?php echo $_smarty_tpl->tpl_vars['row']->value['template'];?>

	      <?php }?>
	    <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['viewable']) {?>
	      <span class="text-red" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('error_template_notavailable');?>
"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('critical_error');?>
</span>
	    <?php }?>
	  <?php } elseif ($_smarty_tpl->tpl_vars['column']->value=='friendlyname') {?>
	    <?php echo $_smarty_tpl->tpl_vars['row']->value['friendlyname'];?>

	  <?php } elseif ($_smarty_tpl->tpl_vars['column']->value=='owner') {?>
            <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'tooltip_ownerinfo', null); ob_start(); ?><strong><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_created');?>
:</strong> <?php echo smarty_modifier_cms_date_format($_smarty_tpl->tpl_vars['row']->value['created']);?>
<br/><strong><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_lastmodified');?>
:</strong> <?php echo smarty_modifier_cms_date_format($_smarty_tpl->tpl_vars['row']->value['lastmodified']);?>
<br/><?php if (isset($_smarty_tpl->tpl_vars['row']->value['lastmodifiedby'])) {?><strong><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_lastmodifiedby');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['row']->value['lastmodifiedby'];?>
<br/><?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	    <span class="tooltip" data-cms-description='<?php echo htmlentities($_smarty_tpl->tpl_vars['tooltip_ownerinfo']->value);?>
'><?php echo $_smarty_tpl->tpl_vars['row']->value['owner'];?>
</span>
	  <?php } elseif ($_smarty_tpl->tpl_vars['column']->value=='active') {?>
	    <?php if ($_smarty_tpl->tpl_vars['row']->value['active']=='inactive') {?>
	      <a href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'defaultadmin','setactive'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
" class="page_setactive" accesskey="a">
	        <?php echo smarty_function_admin_icon(array('icon'=>'false.gif','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_page_setactive')),$_smarty_tpl);?>

	      </a>
	    <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['active']!='default'&&$_smarty_tpl->tpl_vars['row']->value['active']!='') {?>
	      <a href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'defaultadmin','setinactive'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
" class="page_setinactive" accesskey="a">
	  	<?php echo smarty_function_admin_icon(array('icon'=>'true.gif','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_page_setinactive')),$_smarty_tpl);?>

	      </a>
	    <?php }?>
	  <?php } elseif ($_smarty_tpl->tpl_vars['column']->value=='default') {?>
	    <?php if ($_smarty_tpl->tpl_vars['row']->value['default']=='yes') {?>
	      <?php echo smarty_function_admin_icon(array('icon'=>'true.gif','class'=>'page_default','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_page_default')),$_smarty_tpl);?>

	    <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['default']=='no'&&$_smarty_tpl->tpl_vars['row']->value['can_edit']) {?>
	      <a href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'defaultadmin','setdefault'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
" class="page_setdefault" accesskey="d">
	   	<?php echo smarty_function_admin_icon(array('icon'=>'false.gif','class'=>'page_setdefault','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_page_setdefault')),$_smarty_tpl);?>

	      </a>
	    <?php }?>
	  <?php } elseif ($_smarty_tpl->tpl_vars['column']->value=='move') {?>
	    <?php if (isset($_smarty_tpl->tpl_vars['row']->value['move'])) {?>
	      <?php if ($_smarty_tpl->tpl_vars['row']->value['move']=='up') {?>
		<a href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'defaultadmin','moveup'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
" class="page_sortup" accesskey="m">
	  	  <?php echo smarty_function_admin_icon(array('icon'=>'sort_up.gif','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_page_sortup')),$_smarty_tpl);?>

		</a>
	      <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['move']=='down') {?>
	    	<a href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'defaultadmin','movedown'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
" class="page_sortdown" accesskey="m">
		  <?php echo smarty_function_admin_icon(array('icon'=>'sort_down.gif','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_page_sortdown')),$_smarty_tpl);?>

		</a>
	      <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['move']=='both') {?>
		<a href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'defaultadmin','moveup'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
" class="page_sortup" accesskey="m"><?php echo smarty_function_admin_icon(array('icon'=>'sort_up.gif','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_page_sortup')),$_smarty_tpl);?>
</a>
		<a href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'defaultadmin','movedown'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
" class="page_sortdown" accesskey="m"><?php echo smarty_function_admin_icon(array('icon'=>'sort_down.gif','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_page_sortdown')),$_smarty_tpl);?>
</a>
	      <?php }?>
	    <?php }?>
	  <?php } elseif ($_smarty_tpl->tpl_vars['column']->value=='view') {?>
	    <?php if ($_smarty_tpl->tpl_vars['row']->value['view']!='') {?>
	      <a class="page_view" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['row']->value['view'];?>
" accesskey="v">
		<?php echo smarty_function_admin_icon(array('icon'=>'view.gif','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_page_view')),$_smarty_tpl);?>

	      </a>
	    <?php }?>
	  <?php } elseif ($_smarty_tpl->tpl_vars['column']->value=='copy') {?>
	    <?php if ($_smarty_tpl->tpl_vars['row']->value['copy']!='') {?>
	      <a href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'admin_copycontent','page'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
" accesskey="o">
		<?php echo smarty_function_admin_icon(array('icon'=>'copy.gif','class'=>'page_copy','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_page_copy')),$_smarty_tpl);?>

	      </a>
	     <?php }?>
	  <?php } elseif ($_smarty_tpl->tpl_vars['column']->value=='edit') {?>
	    <?php if ($_smarty_tpl->tpl_vars['row']->value['can_edit']) {?>
	      <a href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'admin_editcontent','content_id'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
" accesskey="e" class="page_edit" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('addcontent');?>
" data-cms-content="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
		<?php echo smarty_function_admin_icon(array('icon'=>'edit.gif','class'=>'page_edit','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_page_edit')),$_smarty_tpl);?>

	      </a>
	    <?php } else { ?>
	      <?php if (isset($_smarty_tpl->tpl_vars['row']->value['lock'])&&$_smarty_tpl->tpl_vars['row']->value['can_steal']) {?>
		<a href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'admin_editcontent','content_id'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
" accesskey="e" class="page_edit" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('addcontent');?>
" data-cms-content="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="steal_lock">
		  <?php echo smarty_function_admin_icon(array('icon'=>'permissions.gif','class'=>'page_edit steal_lock','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_steal_lock_edit')),$_smarty_tpl);?>

		</a>
	      <?php }?>
	    <?php }?>
	  <?php } elseif ($_smarty_tpl->tpl_vars['column']->value=='delete') {?>
	    <?php if ($_smarty_tpl->tpl_vars['row']->value['can_delete']&&$_smarty_tpl->tpl_vars['row']->value['delete']!='') {?>
	      <a href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'defaultadmin','delete'=>$_smarty_tpl->tpl_vars['row']->value['id']),$_smarty_tpl);?>
" class="page_delete" accesskey="r">
		<?php echo smarty_function_admin_icon(array('icon'=>'delete.gif','class'=>'page_delete','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_page_delete')),$_smarty_tpl);?>

	       </a>
	    <?php }?>
	  <?php } elseif ($_smarty_tpl->tpl_vars['column']->value=='multiselect') {?>
	    <?php if ($_smarty_tpl->tpl_vars['row']->value['multiselect']!='') {?>
	      <label class="invisible" for="multicontent-<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_multiselect_toggle');?>
</label>
	      <input type="checkbox" id="multicontent-<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="multicontent" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
multicontent[]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_multiselect_toggle');?>
"/>
	    <?php }?>
	  <?php } else { ?>
	    
	  <?php }?>
	</td>
      <?php } ?>
    <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


  
  <div id="error_cont" class="error" style="color: red; text-align: center; vertical-align: middle; display: none;">
    <?php echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

  </div>

  <table id="contenttable" class="pagetable" width="100%"><thead><tr><?php  $_smarty_tpl->tpl_vars['flag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['flag']->_loop = false;
 $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['columns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->key => $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->_loop = true;
 $_smarty_tpl->tpl_vars['column']->value = $_smarty_tpl->tpl_vars['flag']->key;
?><?php if ($_smarty_tpl->tpl_vars['flag']->value) {?><th<?php if ($_smarty_tpl->tpl_vars['flag']->value=='icon') {?> class="pageicon"<?php }?>><!-- <?php echo $_smarty_tpl->tpl_vars['column']->value;?>
 --><?php if ($_smarty_tpl->tpl_vars['column']->value=='expand'||$_smarty_tpl->tpl_vars['column']->value=='hier'||$_smarty_tpl->tpl_vars['column']->value=='icon1'||$_smarty_tpl->tpl_vars['column']->value=='view'||$_smarty_tpl->tpl_vars['column']->value=='copy'||$_smarty_tpl->tpl_vars['column']->value=='edit'||$_smarty_tpl->tpl_vars['column']->value=='delete') {?><span title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang("coltitle_".((string)$_smarty_tpl->tpl_vars['column']->value));?>
">&nbsp;</span><?php } elseif ($_smarty_tpl->tpl_vars['column']->value=='multiselect') {?><input type="checkbox" id="selectall" value="1" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('select_all');?>
"/><?php } elseif ($_smarty_tpl->tpl_vars['column']->value=='page') {?><span title="<?php echo $_smarty_tpl->tpl_vars['coltitle_page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['colhdr_page']->value;?>
</span><?php } else { ?><?php if (($_smarty_tpl->tpl_vars['have_locks']->value=='1')&&($_smarty_tpl->tpl_vars['column']->value=='default'||$_smarty_tpl->tpl_vars['column']->value=='move')) {?><span title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('error_action_contentlocked');?>
">(<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang("colhdr_".((string)$_smarty_tpl->tpl_vars['column']->value));?>
)</span><?php } else { ?><span title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang("coltitle_".((string)$_smarty_tpl->tpl_vars['column']->value));?>
"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang("colhdr_".((string)$_smarty_tpl->tpl_vars['column']->value));?>
</span><?php }?><?php }?></th><?php }?><?php } ?></tr></thead><tbody class="contentrows"><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['content_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?><?php echo smarty_function_cycle(array('values'=>"row1,row2",'assign'=>'rowclass'),$_smarty_tpl);?>
<tr id="row_<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['rowclass']->value;?>
 <?php if (isset($_smarty_tpl->tpl_vars['row']->value['selected'])) {?>selected<?php }?>"><?php smarty_template_function_do_content_row($_smarty_tpl,array('row'=>$_smarty_tpl->tpl_vars['row']->value,'columns'=>$_smarty_tpl->tpl_vars['columns']->value));?>
</tr><?php } ?></tbody></table>
<?php }?>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['content_list']->value)) {?>
  <div class="row c_full">
    <?php if ($_smarty_tpl->tpl_vars['can_add_content']->value) {?>
      <div class="pageoptions grid_6">
        <ul class="options-menu">
          <li><a  href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'admin_editcontent'),$_smarty_tpl);?>
" accesskey="n" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('addcontent');?>
" class="pageoptions"><?php echo smarty_function_admin_icon(array('icon'=>'newobject.gif','alt'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('addcontent')),$_smarty_tpl);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('addcontent');?>
</a></li>
	</ul>
      </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['multiselect']->value&&isset($_smarty_tpl->tpl_vars['bulk_options']->value)) {?>
      <div class="pageoptions grid_6" style="text-align: right;">
        <label for="multiaction"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_withselected');?>
:</label>&nbsp;&nbsp;
        <select name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
multiaction" id="multiaction">
          <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['bulk_options']->value),$_smarty_tpl);?>

        </select>
        <input type="submit" id="multisubmit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
multisubmit" accesskey="s" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('submit');?>
"/>
      </div>
    <?php }?>
  </div>
<?php }?>
<?php echo smarty_function_form_end(array(),$_smarty_tpl);?>

<div class="clearb"></div><?php }} ?>
