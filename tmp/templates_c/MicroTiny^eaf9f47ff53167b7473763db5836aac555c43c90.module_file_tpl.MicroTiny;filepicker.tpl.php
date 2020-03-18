<?php /* Smarty version Smarty-3.1-DEV, created on 2020-03-16 15:17:26
         compiled from "module_file_tpl:MicroTiny;filepicker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14690063315e6f8a76a75165-61368570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eaf9f47ff53167b7473763db5836aac555c43c90' => 
    array (
      0 => 'module_file_tpl:MicroTiny;filepicker.tpl',
      1 => 1496384393,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '14690063315e6f8a76a75165-61368570',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mod' => 0,
    'type' => 0,
    'startpath' => 0,
    'files' => 0,
    'file' => 0,
    'showthumbnails' => 0,
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5e6f8a76abd088_15937038',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e6f8a76abd088_15937038')) {function content_5e6f8a76abd088_15937038($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cms_jquery')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/plugins/function.cms_jquery.php';
?><!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-type" content="text/html;charset=utf-8"/>
		<title><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('filepickertitle');?>
</title>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['mod']->value->GetModuleURLPath();?>
/lib/css/filepicker.min.css" />
	</head>
	<body class="cmsms-filepicker"><div id="full-fp"><div class="filepicker-navbar"><div class="filepicker-navbar-inner"><div class="filepicker-view-option"><p><span class="filepicker-option-title"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('fileview');?>
:&nbsp;</span><span class="js-trigger view-list filepicker-button" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('switchlist');?>
"><i class="cmsms-fp-th-list"></i></span>&nbsp;<span class="js-trigger view-grid filepicker-button active" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('switchgrid');?>
"><i class="cmsms-fp-th"></i></span></p></div><?php if (!isset($_smarty_tpl->tpl_vars['type']->value)||(isset($_smarty_tpl->tpl_vars['type']->value)&&($_smarty_tpl->tpl_vars['type']->value=='file'||$_smarty_tpl->tpl_vars['type']->value=='any'))) {?><div class="filepicker-type-filter"><p><span class="filepicker-option-title"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('filterby');?>
:&nbsp;</span><span class="js-trigger filepicker-button" data-fb-type='image' title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('switchimage');?>
"><i class="cmsms-fp-picture"></i></span>&nbsp;<span class="js-trigger filepicker-button" data-fb-type='video' title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('switchvideo');?>
"><i class="cmsms-fp-film"></i></span>&nbsp;<span class="js-trigger filepicker-button" data-fb-type='audio' title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('switchaudio');?>
"><i class="cmsms-fp-music"></i></span>&nbsp;<span class="js-trigger filepicker-button" data-fb-type='archive' title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('switcharchive');?>
"><i class="cmsms-fp-zip"></i></span>&nbsp;<span class="js-trigger filepicker-button" data-fb-type='file' title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('switchfiles');?>
"><i class="cmsms-fp-file"></i></span>&nbsp;<span class="js-trigger filepicker-button active" data-fb-type='reset' title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('switchreset');?>
"><i class="cmsms-fp-reorder"></i></span></p></div><?php }?></div></div><div class="filepicker-container"><div class="filepicker-breadcrumb"><p title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('youareintext');?>
:"><i class="cmsms-fp-folder-open filepicker-icon"></i> <?php echo $_smarty_tpl->tpl_vars['startpath']->value;?>
</p></div><div id="filelist"><ul class="filepicker-list" id="filepicker-items"><li class="filepicker-item filepicker-item-heading"><div class="filepicker-thumb no-background">&nbsp;</div><div class="filepicker-file-information"><h4 class="filepicker-file-title"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('filename');?>
</h4></div><div class="filepicker-file-details"><span class="filepicker-file-dimension"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('dimension');?>
</span><span class="filepicker-file-size"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('size');?>
</span><span class="filepicker-file-ext"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('type');?>
</span></div></li><?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
?><li class="filepicker-item<?php if ($_smarty_tpl->tpl_vars['file']->value['isdir']) {?> dir<?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['file']->value['filetype'];?>
<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['file']->value['isdir']) {?><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('dirinfo');?>
: <?php }?><?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
" data-fb-ext='<?php echo $_smarty_tpl->tpl_vars['file']->value['ext'];?>
'><div class="filepicker-thumb<?php if ((isset($_smarty_tpl->tpl_vars['file']->value['thumbnail'])&&$_smarty_tpl->tpl_vars['file']->value['thumbnail']!='')||$_smarty_tpl->tpl_vars['file']->value['isdir']) {?> no-background<?php }?>"><?php if ($_smarty_tpl->tpl_vars['showthumbnails']->value&&isset($_smarty_tpl->tpl_vars['file']->value['thumbnail'])&&$_smarty_tpl->tpl_vars['file']->value['thumbnail']!='') {?><a class="filepicker-file-action js-trigger-insert" href="<?php echo $_smarty_tpl->tpl_vars['file']->value['fullurl'];?>
" title="<?php if ($_smarty_tpl->tpl_vars['file']->value['isdir']) {?><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('dirinfo');?>
: <?php }?><?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['file']->value['thumbnail'];?>
</a><?php } elseif ($_smarty_tpl->tpl_vars['file']->value['isdir']) {?><a class="icon-no-thumb" href="<?php echo $_smarty_tpl->tpl_vars['file']->value['chdir_url'];?>
" title="<?php if ($_smarty_tpl->tpl_vars['file']->value['isdir']) {?><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('dirinfo');?>
: <?php }?><?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
"><i class="cmsms-fp-folder-close"></i></a><?php } else { ?><a class="filepicker-file-action js-trigger-insert icon-no-thumb" title="<?php if ($_smarty_tpl->tpl_vars['file']->value['isdir']) {?><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('dirinfo');?>
: <?php }?><?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['file']->value['fullurl'];?>
"><?php if ($_smarty_tpl->tpl_vars['file']->value['filetype']=='image') {?><i class="cmsms-fp-picture"></i><?php } elseif ($_smarty_tpl->tpl_vars['file']->value['filetype']=='video') {?><i class="cmsms-fp-facetime-video"></i><?php } elseif ($_smarty_tpl->tpl_vars['file']->value['filetype']=='audio') {?><i class="cmsms-fp-music"></i><?php } elseif ($_smarty_tpl->tpl_vars['file']->value['filetype']=='archive') {?><i class="cmsms-fp-zip"></i><?php } else { ?><i class="cmsms-fp-file"></i><?php }?></a><?php }?></div><div class="filepicker-file-information"><h4 class="filepicker-file-title"><?php if ($_smarty_tpl->tpl_vars['file']->value['isdir']) {?><a class="filepicker-dir-action" href="<?php echo $_smarty_tpl->tpl_vars['file']->value['chdir_url'];?>
" title="<?php if ($_smarty_tpl->tpl_vars['file']->value['isdir']) {?><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('dirinfo');?>
: <?php }?><?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
</a><?php } else { ?><a class="filepicker-file-action js-trigger-insert" href="<?php echo $_smarty_tpl->tpl_vars['file']->value['fullurl'];?>
" title="<?php if ($_smarty_tpl->tpl_vars['file']->value['isdir']) {?><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('dirinfo');?>
: <?php }?><?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
" data-fb-filetype='<?php echo $_smarty_tpl->tpl_vars['file']->value['filetype'];?>
'><?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
</a><?php }?></h4></div><div class="filepicker-file-details visuallyhidden"><span class="filepicker-file-dimension"><?php echo $_smarty_tpl->tpl_vars['file']->value['dimensions'];?>
</span><span class="filepicker-file-size"><?php if (!$_smarty_tpl->tpl_vars['file']->value['isdir']) {?><?php echo $_smarty_tpl->tpl_vars['file']->value['size'];?>
<?php }?></span><span class="filepicker-file-ext"><?php if (!$_smarty_tpl->tpl_vars['file']->value['isdir']) {?><?php echo $_smarty_tpl->tpl_vars['file']->value['ext'];?>
<?php } else { ?>dir<?php }?></span></div></li><?php } ?></ul></div></div></div></body>
	<?php echo smarty_function_cms_jquery(array('exclude'=>'ui,cms_js_setup,ui_touch_punch,nestedSortable,json,migrate,cms_admin,cms_autorefresh,cms_dirtyform,cms_hiersel,cms_lock','append'=>((string)$_smarty_tpl->tpl_vars['mod']->value->GetModuleURLPath())."/lib/js/tinymce/plugins/cmsms_filebrowser/filebrowser.js"),$_smarty_tpl);?>

	<script type="text/javascript">
		var filebrowser_global = {
			field_id : '<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
'
		};
	</script>
</html>
<?php }} ?>
