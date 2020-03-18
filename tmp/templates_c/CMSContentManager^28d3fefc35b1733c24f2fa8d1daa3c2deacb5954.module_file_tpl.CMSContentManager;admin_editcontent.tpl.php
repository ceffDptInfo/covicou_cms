<?php /* Smarty version Smarty-3.1-DEV, created on 2020-03-16 14:38:47
         compiled from "module_file_tpl:CMSContentManager;admin_editcontent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20886288945e6f816760a332-74407574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28d3fefc35b1733c24f2fa8d1daa3c2deacb5954' => 
    array (
      0 => 'module_file_tpl:CMSContentManager;admin_editcontent.tpl',
      1 => 1496384393,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '20886288945e6f816760a332-74407574',
  'function' => 
  array (
    'submit_buttons' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'content_id' => 0,
    'lock_timeout' => 0,
    'lock_refresh' => 0,
    'mod' => 0,
    'content_obj' => 0,
    'actionid' => 0,
    'preview_ajax_url' => 0,
    'preview_url' => 0,
    'apply_ajax_url' => 0,
    'designchanged_ajax_url' => 0,
    'extra_content' => 0,
    'tab_names' => 0,
    'key' => 0,
    'tabname' => 0,
    'tab_message_array' => 0,
    'tab_contents_array' => 0,
    'fld' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5e6f8167646cc2_48599734',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e6f8167646cc2_48599734')) {function content_5e6f8167646cc2_48599734($_smarty_tpl) {?><?php if (!is_callable('smarty_function_form_start')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/plugins/function.form_start.php';
if (!is_callable('smarty_function_tab_header')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/admin/plugins/function.tab_header.php';
if (!is_callable('smarty_function_tab_start')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/admin/plugins/function.tab_start.php';
if (!is_callable('smarty_function_tab_end')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/admin/plugins/function.tab_end.php';
if (!is_callable('smarty_function_form_end')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/plugins/function.form_end.php';
?><script type="text/javascript">
// <![CDATA[
$(document).ready(function(){
  var do_locking = <?php if (isset($_smarty_tpl->tpl_vars['content_id']->value)&&$_smarty_tpl->tpl_vars['content_id']->value>0&&isset($_smarty_tpl->tpl_vars['lock_timeout']->value)&&$_smarty_tpl->tpl_vars['lock_timeout']->value>0) {?>1<?php } else { ?>0<?php }?>;

  // initialize the dirtyform stuff.
  $('#Edit_Content').dirtyForm({
    beforeUnload: function(is_dirty) {
      if( do_locking ) $('#Edit_Content').lockManager('unlock').done(function(){
         console.log('after unlock');
      });
    },
    unloadCancel: function(){
      if( do_locking ) $('#Edit_Content').lockManager('relock');
    }
  });

  // initialize lock manager
  if( do_locking ) {
    $('#Edit_Content').lockManager({
      type: 'content',
      oid: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['content_id']->value)===null||$tmp==='' ? -1 : $tmp);?>
,
      uid: <?php echo get_userid(false);?>
,
      lock_timeout: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['lock_timeout']->value)===null||$tmp==='' ? 0 : $tmp);?>
,
      lock_refresh: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['lock_refresh']->value)===null||$tmp==='' ? 0 : $tmp);?>
,
      error_handler: function (err) {
          alert('got error ' + err.type + ' // ' + err.msg);
      },
      lostlock_handler: function (err) {
          // we lost the lock on this content... make sure we can't save anything.
          // and display a nice message.
          $('[name$=cancel]').fadeOut().attr('value', '<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('close');?>
').fadeIn();
          $('#Edit_Content').dirtyForm('option', 'dirty', false);
          alert('<?php echo strtr($_smarty_tpl->tpl_vars['mod']->value->Lang('msg_lostlock'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
      }
    });
  }

<?php if ($_smarty_tpl->tpl_vars['content_obj']->value->HasPreview()) {?>
  $('#_preview_').click(function(){
      if( typeof tinyMCE != 'undefined') tinyMCE.triggerSave();
        // serialize the form data
        var data = $('#Edit_Content').find('input:not([type=submit]), select, textarea').serializeArray();
        data.push({
            'name': '<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
preview',
            'value': 1
        });
        data.push({
            'name': '<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
ajax',
            'value': 1
        });
        $.post('<?php echo $_smarty_tpl->tpl_vars['preview_ajax_url']->value;?>
&showtemplate=false', data, function (resultdata, text) {
            if( resultdata != null && resultdata.response == 'Error' ) {
	        $('#previewframe').attr('src','').hide();
                $('#preview_errors').html('<ul></ul>');
	        for( var i = 0; i < resultdata.details.length; i++ ) {
                  $('#preview_errors').append('<li>'+resultdata.details[i]+'</li>');
                }
                $('#previewerror').show();
            }
            else {
		var x = new Date().getTime();
	        var url = '<?php echo $_smarty_tpl->tpl_vars['preview_url']->value;?>
&junk='+x;
	        $('#previewerror').hide();
                $('#previewframe').attr('src', url).show();
            }
        },'json');
    });
<?php }?>

    // submit the form if disable wysiwyg, template id, and/or content-type fields are changed.
    $('#id_disablewysiwyg, #template_id, #content_type').on('change', function () {
        // disable the dirty form stuff, and unlock because we're gonna relockit on reload.
        var self = this;
        $('#Edit_Content').dirtyForm('disable');
	if( do_locking ) {
	  if( do_locking) $('#Edit_Content').lockManager('unlock').done(function(){
            $(self).closest('form').submit();
	  });
        } else {
          $(self).closest('form').submit();
        }
    });

    // handle cancel/close ... and unlock
    $(document).on('click', '[name$=cancel]', function (ev) {
        // turn off all required elements, we're cancelling
        $('#Edit_Content :hidden').removeAttr('required');
	// do not touch the dirty flag, so that theunload handler stuff can warn us.
        if( do_locking ) {
	  // unlock the item, and submit the form.
	  var self = this;
	  var form = $(this).closest('form');
	  ev.preventDefault();
	  $('#Edit_Content').lockManager('unlock').done(function(){
	     var el = $('<input type="hidden"/>');
	     el.attr('name',$(self).attr('name')).val($(self).val()).appendTo(form);
	     form.submit();
	  });
	}
    });

    $(document).on('click', '[name$=submit]', function (ev) {
        // set the form to not dirty.
        $('#Edit_Content').dirtyForm('option','dirty',false);
    	if( do_locking ) {
	    // unlock the item, and submit the form
	    var self = this;
	    ev.preventDefault();
	    var form = $(this).closest('form');
	    $('#Edit_Content').lockManager('unlock').done(function(){
 	    	var el = $('<input type="hidden"/>');
            	el.attr('name',$(self).attr('name')).val($(self).val()).appendTo(form);
	    	form.submit();
	    });
	}
    });

    // handle apply (ajax submit)
    $(document).on('click', '[name$=apply]', function () {
        // apply does not do an unlock.
        if( typeof tinyMCE != 'undefined') tinyMCE.triggerSave(); // TODO this needs better approach, create a common "ajax save" function that can be reused
        var data = $('#Edit_Content').find('input:not([type=submit]), select, textarea').serializeArray();
        data.push({
            'name': '<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
ajax',
            'value': 1
        });
        data.push({
            'name': '<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
apply',
            'value': 1
        });
	$.ajax({
	   type: 'POST',
	   url: '<?php echo $_smarty_tpl->tpl_vars['apply_ajax_url']->value;?>
',
	   data: data,
	   dataType: 'json',
	}).done(function(data, text) {
            var event = $.Event('cms_ajax_apply');
	    event.response = data.response;
	    event.details = data.details;
	    event.close = '<?php echo strtr($_smarty_tpl->tpl_vars['mod']->value->Lang('close'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
	    if( typeof data.url != '' ) event.url = data.url;
            $('body').trigger(event);
        });
        return false;
    });

    $(document).on('cms_ajax_apply',function(e){
      $('#Edit_Content').dirtyForm('option','dirty',false);
      if( typeof e.url != '' && typeof e.url != undefined ) {
        $('a#viewpage').attr('href',e.url);
      }
    });

    <?php if (isset($_smarty_tpl->tpl_vars['designchanged_ajax_url']->value)) {?>
    $('#design_id').change(function(e,edata){
      var v = $(this).val();
      var lastValue = $(this).data('lastValue');
      var data = { '<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
design_id': v };
      $.get('<?php echo $_smarty_tpl->tpl_vars['designchanged_ajax_url']->value;?>
',data,function(data,text) {
        if( typeof data == 'object' ) {
	  var sel = $('#template_id').val();
	  var fnd = false;
	  var first = null;
	  for( key in data ) {
	    if( first == null ) first = key;
	    if( key == sel ) fnd = true;
	  }
	  if( !first ) {
	    $('#design_id').val(lastValue);
	    alert('<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('warn_notemplates_for_design');?>
');
	  }
	  else {
  	    $('#template_id').val('');
            $('#template_id').empty();
            for( key in data ) {
	      $('#template_id').append('<option value="'+key+'">'+data[key]+'</option>');
	    }
	    if( fnd ) {
  	      $('#template_id').val(sel);
	    }
	    else if( first ) {
  	      $('#template_id').val(first);
	    }
	    if( typeof edata == 'undefined' || typeof edata.skip_fallthru == 'undefined' ) {
  	      $('#template_id').trigger('change');
	    }
          }
	}
      }, 'json' );
    });

    $('#design_id').trigger('change', [{ skip_fallthru: 1 }]);
    $('#design_id').data('lastValue',$('#design_id').val());
    $('#template_id').data('lastValue',$('#template_id').val());
    $('#Edit_Content').dirtyForm('option','dirty',false);
    <?php }?>
});
// ]]>
</script>

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['extra_content']->value)===null||$tmp==='' ? '' : $tmp);?>


<?php if ($_smarty_tpl->tpl_vars['content_id']->value<1) {?>
    <h3><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_editpage_addcontent');?>
</h3>
<?php } else { ?>
    <h3><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_editpage_editcontent');?>
&nbsp;<em>(<?php echo $_smarty_tpl->tpl_vars['content_id']->value;?>
)</em></h3>
<?php }?>

<?php if (!is_callable('smarty_function_admin_icon')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/admin/plugins/function.admin_icon.php';
?><?php if (!function_exists('smarty_template_function_submit_buttons')) {
    function smarty_template_function_submit_buttons($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['submit_buttons']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
<p class="pagetext"></p>
<p class="pageinput">
  <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
submit" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('submit');?>
" class="pagebutton" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_editpage_submit');?>
"/>
  <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
cancel" formnovalidate value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('cancel');?>
" class="pagebutton" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_editpage_cancel');?>
"/>
  <?php if ($_smarty_tpl->tpl_vars['content_id']->value!='') {?>
    <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
apply" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('apply');?>
" class="pagebutton" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_editpage_apply');?>
"/>
  <?php }?>
  <?php if (($_smarty_tpl->tpl_vars['content_id']->value!='')&&$_smarty_tpl->tpl_vars['content_obj']->value->IsViewable()&&$_smarty_tpl->tpl_vars['content_obj']->value->Active()) {?>
    <a id="viewpage" rel="external" href="<?php echo $_smarty_tpl->tpl_vars['content_obj']->value->GetURL();?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_editpage_view');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'view.gif','alt'=>lang('view_page')),$_smarty_tpl);?>
</a>
  <?php }?>
</p>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<div id="Edit_Content_Result"></div>
<div id="Edit_Content">
<?php echo smarty_function_form_start(array('content_id'=>$_smarty_tpl->tpl_vars['content_id']->value),$_smarty_tpl);?>

  <?php smarty_template_function_submit_buttons($_smarty_tpl,array());?>


  
  <?php  $_smarty_tpl->tpl_vars['tabname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tabname']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tab_names']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tabname']->key => $_smarty_tpl->tpl_vars['tabname']->value) {
$_smarty_tpl->tpl_vars['tabname']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tabname']->key;
?>
    <?php echo smarty_function_tab_header(array('name'=>$_smarty_tpl->tpl_vars['key']->value,'label'=>$_smarty_tpl->tpl_vars['tabname']->value),$_smarty_tpl);?>

  <?php } ?>
  <?php if ($_smarty_tpl->tpl_vars['content_obj']->value->HasPreview()) {?>
    <?php echo smarty_function_tab_header(array('name'=>'_preview_','label'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_preview')),$_smarty_tpl);?>

  <?php }?>

  
  <?php  $_smarty_tpl->tpl_vars['tabname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tabname']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tab_names']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tabname']->key => $_smarty_tpl->tpl_vars['tabname']->value) {
$_smarty_tpl->tpl_vars['tabname']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tabname']->key;
?>
    <?php echo smarty_function_tab_start(array('name'=>$_smarty_tpl->tpl_vars['key']->value),$_smarty_tpl);?>

      <?php if (isset($_smarty_tpl->tpl_vars['tab_message_array']->value[$_smarty_tpl->tpl_vars['key']->value])) {?><?php echo $_smarty_tpl->tpl_vars['tab_message_array']->value[$_smarty_tpl->tpl_vars['key']->value];?>
<?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['tab_contents_array']->value[$_smarty_tpl->tpl_vars['key']->value])) {?>
        <?php  $_smarty_tpl->tpl_vars['fld'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fld']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tab_contents_array']->value[$_smarty_tpl->tpl_vars['key']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fld']->key => $_smarty_tpl->tpl_vars['fld']->value) {
$_smarty_tpl->tpl_vars['fld']->_loop = true;
?>
        <div class="pageoverflow">
          <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['fld']->value[0];?>
</p>
          <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['fld']->value[1];?>
<?php if (count($_smarty_tpl->tpl_vars['fld']->value)==3) {?><br/><?php echo $_smarty_tpl->tpl_vars['fld']->value[2];?>
<?php }?></p>
        </div>
        <?php } ?>
      <?php }?>
  <?php } ?>
  <?php if ($_smarty_tpl->tpl_vars['content_obj']->value->HasPreview()) {?>
    <?php echo smarty_function_tab_start(array('name'=>'_preview_'),$_smarty_tpl);?>

      <div class="pagewarning"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('info_preview_notice');?>
</div>
      <iframe name="_previewframe_" class="preview" id="previewframe"></iframe>
      <div id="previewerror" class="red" style="display: none; color: #000;">
        <fieldset>
          <legend>LEGEND</legend>
          <ul id="preview_errors"></ul>
        </fieldset>
      </div>
  <?php }?>
  <?php echo smarty_function_tab_end(array(),$_smarty_tpl);?>

<?php echo smarty_function_form_end(array(),$_smarty_tpl);?>

</div>
<?php }} ?>
