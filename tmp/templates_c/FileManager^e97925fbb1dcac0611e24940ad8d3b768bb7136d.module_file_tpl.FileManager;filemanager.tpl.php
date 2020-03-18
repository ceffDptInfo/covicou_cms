<?php /* Smarty version Smarty-3.1-DEV, created on 2020-03-16 15:12:27
         compiled from "module_file_tpl:FileManager;filemanager.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4051010875e6f894be2f7b3-04123196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e97925fbb1dcac0611e24940ad8d3b768bb7136d' => 
    array (
      0 => 'module_file_tpl:FileManager;filemanager.tpl',
      1 => 1496384393,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '4051010875e6f894be2f7b3-04123196',
  'function' => 
  array (
    'filebtn' => 
    array (
      'parameter' => 
      array (
        'icon' => 'ui-icon-circle-check',
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'noform' => 0,
    'refresh_url' => 0,
    'viewfile_url' => 0,
    'actionid' => 0,
    'text' => 0,
    'title' => 0,
    'iname' => 0,
    'id' => 0,
    'addclass' => 0,
    'icon' => 0,
    'formstart' => 0,
    'mod' => 0,
    'hiddenpath' => 0,
    'filenametext' => 0,
    'fileinfotext' => 0,
    'fileownertext' => 0,
    'filepermstext' => 0,
    'filesizetext' => 0,
    'filedatetext' => 0,
    'files' => 0,
    'rowclass' => 0,
    'file' => 0,
    'countstext' => 0,
    'formend' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5e6f894be76544_93446389',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e6f894be76544_93446389')) {function content_5e6f894be76544_93446389($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/lib/smarty/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_cms_date_format')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/plugins/modifier.cms_date_format.php';
if (!is_callable('smarty_modifier_replace')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/lib/smarty/plugins/modifier.replace.php';
?><?php if (!isset($_smarty_tpl->tpl_vars['noform']->value)) {?>
<script type="text/javascript">
var refresh_url = '<?php echo $_smarty_tpl->tpl_vars['refresh_url']->value;?>
'+'&showtemplate=false';
refresh_url = refresh_url.replace(/amp;/g,'');
// <![CDATA[
function enable_button(idlist) {
  $(idlist).removeAttr('disabled').removeClass('ui-state-disabled ui-button-disabled');
}
function disable_button(idlist) {
  $(idlist).attr('disabled','disabled').addClass('ui-state-disabled ui-button-disabled');
}

function enable_action_buttons() {

    var files = $("#filesarea input[type='checkbox'].fileselect").filter(':checked').length,
        dirs = $("#filesarea input[type='checkbox'].dir").filter(':checked').length,
        arch = $("#filesarea input[type='checkbox'].archive").filter(':checked').length,
        text = $("#filesarea input[type='checkbox'].text").filter(':checked').length,
        imgs = $("#filesarea input[type='checkbox'].image").filter(':checked').length;

    disable_button('button.filebtn');
    $('button.filebtn').attr('disabled','disabled');
    if (files == 0 && dirs == 0) {
        // nothing selected, enable anything with select_none
        enable_button('#btn_newdir');
    } else if (files == 1) {
        // 1 selected, enable anything with select_one
        enable_button('#btn_rename');
        enable_button('#btn_move');
        enable_button('#btn_delete');

        if (dirs == 0) enable_button('#btn_copy');
        if (arch == 1) enable_button('#btn_unpack');
        if (imgs == 1) enable_button('#btn_view,#btn_thumb,#btn_resizecrop,#btn_rotate');
        if (text == 1) enable_button('#btn_view');
    } else if (files > 1 && dirs == 0) {
        // multiple files selected
        enable_button('#btn_delete,#btn_copy,#btn_move');
    } else if (files > 1 && dirs > 0) {
        // multiple selected, at least one dir.
        enable_button('#btn_delete,#btn_move');
    }
}

$(document).ready(function () {
    enable_action_buttons();

    $('#refresh').unbind('click');
    $('#refresh').bind('click', function () {
        // ajaxy reload for the files area.
        $('#filesarea').load(refresh_url);
        return false;
    });

    $(document).on('dropzone_chdir', $(this), function (e, data) {
        // if change dir via the dropzone, make sure filemanager refreshes.
        location.reload();
    });
    $(document).on('dropzone_stop', $(this), function (e, data) {
        // if change dir via the dropzone, make sure filemanager refreshes.
        location.reload();
    });

    $(document).on('change', '#filesarea input[type="checkbox"].fileselect', function (e) {
        // find the parent row
        e.stopPropagation();
        var t = $(this).attr('checked');
        if (t) {
            $(this).closest('tr').addClass('selected');
        } else {
            $(this).closest('tr').removeClass('selected');
        }
        enable_action_buttons();
    });

    $(document).on('change', '#tagall', function (event) {
        if ($(this).is(':checked')) {
            $('#filesarea input:checkbox.fileselect').attr('checked', true).trigger('change');
        } else {
            $('#filesarea input:checkbox.fileselect').attr('checked', false).trigger('change');
        }
    });

    $(document).on('click', '#btn_view', function () {
        // find the selected item.
        var tmp = $("#filesarea input[type='checkbox']").filter(':checked').val();
        var url = '<?php echo $_smarty_tpl->tpl_vars['viewfile_url']->value;?>
&showtemplate=false&<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
viewfile=' + tmp;
        url = url.replace(/amp;/g, '');
        $('#popup_contents').load(url);
        $('#popup').dialog({
       	  minWidth: 380,
          maxHeight: 600
        });
        return false;
    });

    $(document).on('click', 'td.clickable', function () {
        var t = $(this).parent().find(':checkbox').attr('checked');
        if (t != 'checked') {
            $(this).parent().find(':checkbox').attr('checked', true).trigger('change');
        } else {
            $(this).parent().find(':checkbox').attr('checked', false).trigger('change');
        }
    });
});
// ]]>
</script>

<?php if (!function_exists('smarty_template_function_filebtn')) {
    function smarty_template_function_filebtn($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['filebtn']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
<?php if (isset($_smarty_tpl->tpl_vars['addclass'])) {$_smarty_tpl->tpl_vars['addclass'] = clone $_smarty_tpl->tpl_vars['addclass'];
$_smarty_tpl->tpl_vars['addclass']->value = 'ui-button-icon-primary'; $_smarty_tpl->tpl_vars['addclass']->nocache = null; $_smarty_tpl->tpl_vars['addclass']->scope = 0;
} else $_smarty_tpl->tpl_vars['addclass'] = new Smarty_variable('ui-button-icon-primary', null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['text']->value)&&$_smarty_tpl->tpl_vars['text']->value!='') {?>
  <?php if (isset($_smarty_tpl->tpl_vars['addclass'])) {$_smarty_tpl->tpl_vars['addclass'] = clone $_smarty_tpl->tpl_vars['addclass'];
$_smarty_tpl->tpl_vars['addclass']->value = 'ui-button-text-icon-primary'; $_smarty_tpl->tpl_vars['addclass']->nocache = null; $_smarty_tpl->tpl_vars['addclass']->scope = 0;
} else $_smarty_tpl->tpl_vars['addclass'] = new Smarty_variable('ui-button-text-icon-primary', null, 0);?>
  <?php if (!isset($_smarty_tpl->tpl_vars['title']->value)||$_smarty_tpl->tpl_vars['title']->value=='') {?><?php if (isset($_smarty_tpl->tpl_vars['title'])) {$_smarty_tpl->tpl_vars['title'] = clone $_smarty_tpl->tpl_vars['title'];
$_smarty_tpl->tpl_vars['title']->value = $_smarty_tpl->tpl_vars['text']->value; $_smarty_tpl->tpl_vars['title']->nocache = null; $_smarty_tpl->tpl_vars['title']->scope = 0;
} else $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->tpl_vars['text']->value, null, 0);?><?php }?>
<?php }?>
<button type="submit" name="<?php echo $_smarty_tpl->tpl_vars['iname']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" title="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? '' : $tmp);?>
" class="filebtn ui-button ui-widget ui-state-default ui-corner-all <?php echo $_smarty_tpl->tpl_vars['addclass']->value;?>
">
  <span class="ui-icon ui-button-icon-primary <?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
"></span>
  <?php if (isset($_smarty_tpl->tpl_vars['text']->value)&&$_smarty_tpl->tpl_vars['text']->value!='') {?><span class="ui-button-text"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</span><?php }?>
</button>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<div id="popup" style="display: none;">
	<div id="popup_contents" style="min-width: 500px; max-height: 600px;"></div>
</div>

<div>
  <?php echo $_smarty_tpl->tpl_vars['formstart']->value;?>


<div>
	<fieldset>
        <?php smarty_template_function_filebtn($_smarty_tpl,array('id'=>'btn_newdir','iname'=>((string)$_smarty_tpl->tpl_vars['actionid']->value)."fileactionnewdir",'icon'=>'ui-icon-circle-plus','text'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('newdir'),'title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('title_newdir')));?>

        <?php smarty_template_function_filebtn($_smarty_tpl,array('id'=>'btn_view','iname'=>((string)$_smarty_tpl->tpl_vars['actionid']->value)."fileactionview",'icon'=>'ui-icon-circle-zoomin','text'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('view'),'title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('title_view')));?>

		<?php smarty_template_function_filebtn($_smarty_tpl,array('id'=>'btn_rename','iname'=>((string)$_smarty_tpl->tpl_vars['actionid']->value)."fileactionrename",'text'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('rename'),'title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('title_rename')));?>

		<?php smarty_template_function_filebtn($_smarty_tpl,array('id'=>'btn_delete','iname'=>((string)$_smarty_tpl->tpl_vars['actionid']->value)."fileactiondelete",'icon'=>'ui-icon-trash','text'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('delete'),'title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('title_delete')));?>

		<?php smarty_template_function_filebtn($_smarty_tpl,array('id'=>'btn_move','iname'=>((string)$_smarty_tpl->tpl_vars['actionid']->value)."fileactionmove",'icon'=>'ui-icon-arrow-4-diag','text'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('move'),'title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('title_move')));?>

		<?php smarty_template_function_filebtn($_smarty_tpl,array('id'=>'btn_copy','iname'=>((string)$_smarty_tpl->tpl_vars['actionid']->value)."fileactioncopy",'icon'=>'ui-icon-copy','text'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('copy'),'title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('title_copy')));?>

		<?php smarty_template_function_filebtn($_smarty_tpl,array('id'=>'btn_unpack','iname'=>((string)$_smarty_tpl->tpl_vars['actionid']->value)."fileactionunpack",'icon'=>'ui-icon-suitcase','text'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('unpack'),'title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('title_unpack')));?>

		<?php smarty_template_function_filebtn($_smarty_tpl,array('id'=>'btn_thumb','iname'=>((string)$_smarty_tpl->tpl_vars['actionid']->value)."fileactionthumb",'icon'=>'ui-icon-star','text'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('thumbnail'),'title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('title_thumbnail')));?>

		<?php smarty_template_function_filebtn($_smarty_tpl,array('id'=>'btn_resizecrop','iname'=>((string)$_smarty_tpl->tpl_vars['actionid']->value)."fileactionresizecrop",'icon'=>'ui-icon-image','text'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('resizecrop'),'title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('title_resizecrop')));?>

		<?php smarty_template_function_filebtn($_smarty_tpl,array('id'=>'btn_rotate','iname'=>((string)$_smarty_tpl->tpl_vars['actionid']->value)."fileactionrotate",'icon'=>'ui-icon-image','text'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('rotate'),'title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('title_rotate')));?>

	</fieldset>
</div>
<?php echo $_smarty_tpl->tpl_vars['hiddenpath']->value;?>

<?php }?>

<div id="filesarea">
	<table width="100%" class="pagetable scrollable">
		<thead>
			<tr>
				<th class="pageicon">&nbsp;</th>
				<th><?php echo $_smarty_tpl->tpl_vars['filenametext']->value;?>
</th>
				<th class="pageicon"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('mimetype');?>
</th>
				<th class="pageicon"><?php echo $_smarty_tpl->tpl_vars['fileinfotext']->value;?>
</th>
				<th class="pageicon" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_col_fileowner');?>
"><?php echo $_smarty_tpl->tpl_vars['fileownertext']->value;?>
</th>
				<th class="pageicon" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_col_fileperms');?>
"><?php echo $_smarty_tpl->tpl_vars['filepermstext']->value;?>
</th>
				<th class="pageicon" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_col_filesize');?>
" style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['filesizetext']->value;?>
</th>
				<th class="pageicon">&nbsp;</th>
				<th class="pageicon" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_col_filedate');?>
"><?php echo $_smarty_tpl->tpl_vars['filedatetext']->value;?>
</th>
				<th class="pageicon">
					<input type="checkbox" name="tagall" value="tagall" id="tagall" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_tagall');?>
"/>
				</th>
			</tr>
		</thead>
		<tbody>
		<?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
			<?php echo smarty_function_cycle(array('values'=>"row1,row2",'assign'=>'rowclass'),$_smarty_tpl);?>

			<tr class="<?php echo $_smarty_tpl->tpl_vars['rowclass']->value;?>
">
				<td valign="middle"><?php if (isset($_smarty_tpl->tpl_vars['file']->value->thumbnail)&&$_smarty_tpl->tpl_vars['file']->value->thumbnail!='') {?><?php echo $_smarty_tpl->tpl_vars['file']->value->thumbnail;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['file']->value->iconlink;?>
<?php }?></td>
				<td class="clickable" valign="middle"><?php echo $_smarty_tpl->tpl_vars['file']->value->txtlink;?>
</td>
				<td class="clickable" valign="middle"><?php echo $_smarty_tpl->tpl_vars['file']->value->mime;?>
</td>
				<td class="clickable" style="padding-right:8px;" valign="middle"><?php echo $_smarty_tpl->tpl_vars['file']->value->fileinfo;?>
</td>
				<td class="clickable" style="padding-right:8px;" valign="middle"><?php if (isset($_smarty_tpl->tpl_vars['file']->value->fileowner)) {?><?php echo $_smarty_tpl->tpl_vars['file']->value->fileowner;?>
<?php } else { ?>&nbsp;<?php }?></td>
				<td class="clickable" style="padding-right:8px;" valign="middle"><?php echo $_smarty_tpl->tpl_vars['file']->value->filepermissions;?>
</td>
				<td class="clickable" style="padding-right:2px;text-align:right;" valign="middle"><?php echo $_smarty_tpl->tpl_vars['file']->value->filesize;?>
</td>
				<td class="clickable" style="padding-right:8px;" valign="middle"><?php if (isset($_smarty_tpl->tpl_vars['file']->value->filesizeunit)) {?><?php echo $_smarty_tpl->tpl_vars['file']->value->filesizeunit;?>
<?php } else { ?>&nbsp;<?php }?></td>
				<td class="clickable" style="padding-right:8px;" valign="middle"><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_cms_date_format($_smarty_tpl->tpl_vars['file']->value->filedate)," ","&nbsp;"),"-","&minus;");?>
</td>
				<td>
				<?php if (!isset($_smarty_tpl->tpl_vars['file']->value->noCheckbox)) {?>
					<label for="x_<?php echo $_smarty_tpl->tpl_vars['file']->value->urlname;?>
" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('toggle');?>
</label>
					<input type="checkbox" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('toggle');?>
" id="x_<?php echo $_smarty_tpl->tpl_vars['file']->value->urlname;?>
" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
selall[]" value="<?php echo $_smarty_tpl->tpl_vars['file']->value->urlname;?>
" class="fileselect <?php echo implode(' ',$_smarty_tpl->tpl_vars['file']->value->type);?>
" <?php if (isset($_smarty_tpl->tpl_vars['file']->value->checked)) {?>checked="checked"<?php }?>/>
				<?php }?>
				</td>
			</tr>
		<?php } ?>
		</tbody>
		<tfoot>
			<tr>
				<td>&nbsp;</td>
				<td colspan="7"><?php echo $_smarty_tpl->tpl_vars['countstext']->value;?>
</td>
			</tr>
		</tfoot>
	</table>
</div>

<?php if (!isset($_smarty_tpl->tpl_vars['noform']->value)) {?>
	
	<?php echo $_smarty_tpl->tpl_vars['formend']->value;?>

</div>
<?php }?><?php }} ?>
