<?php /* Smarty version Smarty-3.1-DEV, created on 2020-03-16 14:38:47
         compiled from "module_file_tpl:MicroTiny;tinymce_config.js" */ ?>
<?php /*%%SmartyHeaderCode:8887928265e6f816766cff0-33162737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7a73423ffd1b2707f09e9860f1d4c4f2ebd4a4c' => 
    array (
      0 => 'module_file_tpl:MicroTiny;tinymce_config.js',
      1 => 1496384393,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '8887928265e6f816766cff0-33162737',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mt_selector' => 0,
    'languageid' => 0,
    'mt_profile' => 0,
    'MT' => 0,
    'filepicker_url' => 0,
    'linker_url' => 0,
    'getpages_url' => 0,
    'mt_cssname' => 0,
    'isfrontend' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5e6f816768a010_82130401',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e6f816768a010_82130401')) {function content_5e6f816768a010_82130401($_smarty_tpl) {?><?php if (!is_callable('smarty_function_root_url')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/plugins/function.root_url.php';
?>
<?php if (isset($_smarty_tpl->tpl_vars['MT'])) {$_smarty_tpl->tpl_vars['MT'] = clone $_smarty_tpl->tpl_vars['MT'];
$_smarty_tpl->tpl_vars['MT']->value = cms_utils::get_module('MicroTiny'); $_smarty_tpl->tpl_vars['MT']->nocache = null; $_smarty_tpl->tpl_vars['MT']->scope = 0;
} else $_smarty_tpl->tpl_vars['MT'] = new Smarty_variable(cms_utils::get_module('MicroTiny'), null, 0);?>
// define cmsms_tiny object
var cmsms_tiny = {};

// this is the actual tinymce initialization
tinymce.init({
    selector: '<?php if (isset($_smarty_tpl->tpl_vars['mt_selector']->value)&&$_smarty_tpl->tpl_vars['mt_selector']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['mt_selector']->value;?>
<?php } else { ?>textarea.MicroTiny<?php }?>',
    language: '<?php echo $_smarty_tpl->tpl_vars['languageid']->value;?>
',
    cmsms_tiny: cmsms_tiny = {
        schema: 'html5',
        base_url : '<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/',
        resize : <?php echo mt_jsbool($_smarty_tpl->tpl_vars['mt_profile']->value['allowresize']);?>
,
        statusbar : <?php echo mt_jsbool($_smarty_tpl->tpl_vars['mt_profile']->value['showstatusbar']);?>
,
        menubar : <?php echo mt_jsbool($_smarty_tpl->tpl_vars['mt_profile']->value['menubar']);?>
,
        filepicker_title : '<?php echo $_smarty_tpl->tpl_vars['MT']->value->Lang('filepickertitle');?>
',
        filepicker_url : '<?php echo $_smarty_tpl->tpl_vars['filepicker_url']->value;?>
&field=',
        filebrowser_title : '<?php echo $_smarty_tpl->tpl_vars['MT']->value->Lang('title_cmsms_filebrowser');?>
',
        linker_text : '<?php echo $_smarty_tpl->tpl_vars['MT']->value->Lang('cmsms_linker');?>
',
        linker_title : '<?php echo $_smarty_tpl->tpl_vars['MT']->value->Lang('title_cmsms_linker');?>
',
        linker_image : '<?php echo $_smarty_tpl->tpl_vars['MT']->value->GetModuleURLPath();?>
/lib/images/cmsmslink.gif',
        linker_url : '<?php echo $_smarty_tpl->tpl_vars['linker_url']->value;?>
',
        linker_autocomplete_url : '<?php echo $_smarty_tpl->tpl_vars['getpages_url']->value;?>
',
        prompt_page : '<?php echo $_smarty_tpl->tpl_vars['MT']->value->Lang('prompt_linker');?>
',
        prompt_page_info : '<?php echo $_smarty_tpl->tpl_vars['MT']->value->Lang('info_linker_autocomplete');?>
',
        prompt_alias : '<?php echo $_smarty_tpl->tpl_vars['MT']->value->Lang('prompt_selectedalias');?>
',
        prompt_alias_info : '<?php echo $_smarty_tpl->tpl_vars['MT']->value->Lang('tooltip_selectedalias');?>
',
        prompt_text : '<?php echo $_smarty_tpl->tpl_vars['MT']->value->Lang('prompt_texttodisplay');?>
',
        prompt_class : '<?php echo $_smarty_tpl->tpl_vars['MT']->value->Lang('prompt_class');?>
',
        prompt_rel : '<?php echo $_smarty_tpl->tpl_vars['MT']->value->Lang('prompt_rel');?>
',
        prompt_target : '<?php echo $_smarty_tpl->tpl_vars['MT']->value->Lang('prompt_target');?>
',
        tab_general : '<?php echo $_smarty_tpl->tpl_vars['MT']->value->Lang('tab_general_title');?>
',
        tab_advanced : '<?php echo $_smarty_tpl->tpl_vars['MT']->value->Lang('tab_advanced_title');?>
',
        target_none : '<?php echo $_smarty_tpl->tpl_vars['MT']->value->Lang('none');?>
',
        target_new_window : '<?php echo $_smarty_tpl->tpl_vars['MT']->value->Lang('newwindow');?>
',
        loading_info : '<?php echo $_smarty_tpl->tpl_vars['MT']->value->Lang('loading_info');?>
'
    },
    document_base_url: cmsms_tiny.base_url,
    relative_urls: true,
    mysamplesetting: 'foobar',
    menubar: cmsms_tiny.menubar,
    statusbar: cmsms_tiny.statusbar,
    resize: cmsms_tiny.resize,
    removed_menuitems: 'newdocument',
    browser_spellcheck: true,
    // smarty logic stuff
<?php if (isset($_smarty_tpl->tpl_vars['mt_cssname']->value)&&$_smarty_tpl->tpl_vars['mt_cssname']->value!='') {?>
    content_css : '',
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['isfrontend']->value) {?>
    toolbar: 'undo | bold italic underline | alignleft aligncenter alignright alignjustify indent outdent | bullist numlist | link<?php if ($_smarty_tpl->tpl_vars['mt_profile']->value['allowimages']) {?> | image<?php }?>',
    plugins: ['autolink paste link anchor wordcount <?php if ($_smarty_tpl->tpl_vars['mt_profile']->value['allowimages']) {?> media image<?php }?> <?php if ($_smarty_tpl->tpl_vars['mt_profile']->value['allowtables']) {?>table<?php }?>'],
<?php } else { ?>
    image_advtab: true,
    toolbar: 'undo redo | cut copy paste | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify indent outdent | bullist numlist | anchor link unlink cmsms_linker<?php if ($_smarty_tpl->tpl_vars['mt_profile']->value['allowimages']) {?> | image cmsms_filebrowser<?php }?>',
    plugins: ['paste autolink link cmsms_linker charmap anchor searchreplace wordcount code fullscreen insertdatetime <?php if ($_smarty_tpl->tpl_vars['mt_profile']->value['allowtables']) {?>table<?php }?> <?php if ($_smarty_tpl->tpl_vars['mt_profile']->value['allowimages']) {?>media image cmsms_filepicker cmsms_filebrowser<?php }?>'],
<?php }?>
    // callback functions
    urlconverter_callback: function(url, elm, onsave, name) {
        var self = this;
        var settings = self.settings;

        if (!settings.convert_urls || ( elm && elm.nodeName == 'LINK' ) || url.indexOf('file:') === 0 || url.length === 0) {
            return url;
        }

        // fix entities in cms_selflink urls.
        if (url.indexOf('cms_selflink') != -1) {
            decodeURI(url);
            url = url.replace('%20', ' ');
            return url;
        }
        // Convert to relative
        if (settings.relative_urls) {
            return self.documentBaseURI.toRelative(url);
        }
        // Convert to absolute
        url = self.documentBaseURI.toAbsolute(url, settings.remove_script_host);

        return url;
    },
    setup: function(editor) {
        editor.on('change', function(e) {
            $(document).trigger('cmsms_formchange');
        });
    },
    paste_as_text: true,
});
<?php }} ?>
