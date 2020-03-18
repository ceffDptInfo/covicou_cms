<?php /* Smarty version Smarty-3.1-DEV, created on 2020-03-16 14:38:40
         compiled from "module_file_tpl:CMSContentManager;defaultadmin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19073214515e6f81604a85b2-45003123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4633eae2310bc9506d585f8254b901e37136a75' => 
    array (
      0 => 'module_file_tpl:CMSContentManager;defaultadmin.tpl',
      1 => 1496384393,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '19073214515e6f81604a85b2-45003123',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ajax' => 0,
    'actionid' => 0,
    'ajax_get_content' => 0,
    'mod' => 0,
    'admin_url' => 0,
    'have_locks' => 0,
    'pagelimits' => 0,
    'pagelimit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5e6f81604e6d80_64667550',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e6f81604e6d80_64667550')) {function content_5e6f81604e6d80_64667550($_smarty_tpl) {?><?php if (!is_callable('smarty_cms_function_cms_action_url')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/plugins/function.cms_action_url.php';
if (!is_callable('smarty_function_form_start')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/plugins/function.form_start.php';
if (!is_callable('smarty_function_html_options')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/lib/smarty/plugins/function.html_options.php';
if (!is_callable('smarty_function_form_end')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/plugins/function.form_end.php';
?><?php if ($_smarty_tpl->tpl_vars['ajax']->value==0) {?>
  <script type="text/javascript">
  //<![CDATA[
  function cms_CMloadUrl(link, lang) {
      $(document).on('click', link, function (e) {
          var url = $(this).attr('href') + '&showtemplate=false&<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
ajax=1';
          if (typeof lang == 'string' && lang.length > 0) {
              if (!confirm(lang)) return false;
	  }
	  $('#ajax_find').val('');
	  $.ajax({
	    url: url,
	  }).done(function(){
 	    $('#content_area').autoRefresh('refresh');
	  })
          e.preventDefault();
      });
  }


  function cms_CMtoggleState(el) {
      $(el).attr('disabled', true);
      $('button' + el).button({ 'disabled' : true });

      $(document).on('click', 'input:checkbox', function () {
          if ($('input:checkbox').is(':checked')) {
              $(el).attr('disabled', false);
              $('button' + el).button({ 'disabled' : false });
          } else {
              $(el).attr('disabled', true);
              $('button' + el).button({ 'disabled' : true });
          }
     });
  }

  $(document).ready(function () {
      cms_busy();
      $('#content_area').autoRefresh({
          url: '<?php echo $_smarty_tpl->tpl_vars['ajax_get_content']->value;?>
',
	  done_handler: function() {
	        $('#ajax_find').autocomplete({
			source: '<?php echo smarty_cms_function_cms_action_url(array('action'=>'admin_ajax_pagelookup','forjs'=>1),$_smarty_tpl);?>
&showtemplate=false',
			minLength: 2,
			position: {
              			  my: "right top",
				  at: "right bottom"
                        },
			change: function (event, ui)  {
			    // goes back to the full list, no options
			    console.debug('in autocomplete change');
			    $('#ajax_find').val('');
    		            $('#content_area').autoRefresh('option','url','<?php echo $_smarty_tpl->tpl_vars['ajax_get_content']->value;?>
');
			},
                        select: function (event, ui) {
			    console.debug('in autocomplete select');
                            event.preventDefault();
                            $(this).val(ui.item.label);
                            var url = '<?php echo smarty_cms_function_cms_action_url(array('action'=>'ajax_get_content','forjs'=>1),$_smarty_tpl);?>
&showtemplate=false&<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
seek=' + ui.item.value;
			    console.debug('url is '+url);
			    $('#content_area').autoRefresh('option','url',url);
                        }
                });
	  }
      });

      $('#selectall').cmsms_checkall({
          target: '#contenttable'
      });

      cms_CMtoggleState('#multiaction'),
      cms_CMtoggleState('#multisubmit'),

      // these links can't use ajax as they effect pagination.
      //cms_CMloadUrl('a.expandall'),
      //cms_CMloadUrl('a.collapseall'),
      //cms_CMloadUrl('a.page_collapse'),
      //cms_CMloadUrl('a.page_expand'),

      cms_CMloadUrl('a.page_sortup'),
      cms_CMloadUrl('a.page_sortdown'),
      cms_CMloadUrl('a.page_setinactive', '<?php echo strtr($_smarty_tpl->tpl_vars['mod']->value->Lang('confirm_setinactive'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'),
      cms_CMloadUrl('a.page_setactive'),
      cms_CMloadUrl('a.page_setdefault', '<?php echo strtr($_smarty_tpl->tpl_vars['mod']->value->Lang('confirm_setdefault'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'),
      cms_CMloadUrl('a.page_delete', '<?php echo strtr($_smarty_tpl->tpl_vars['mod']->value->Lang('confirm_delete_page'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');

      $('a.steal_lock').on('click',function(e) {
          // we're gonna confirm stealing this lock.
          var v = confirm('<?php echo strtr($_smarty_tpl->tpl_vars['mod']->value->Lang('confirm_steal_lock'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
          $(this).data('steal_lock',v);
          if( v ) {
              var url = $(this).attr('href');
              url = url + '<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
steal=1';
              $(this).attr('href',url);
          }
      });

      $('a.page_edit').on('click',function(event) {
          var v = $(this).data('steal_lock');
          $(this).removeData('steal_lock');
          if( typeof(v) != 'undefined' && v != null && !v ) return false;
          if( typeof(v) == 'undefined' || v != null ) return true;

          // do a double check to see if this page is locked or not.
          var content_id = $(this).attr('data-cms-content');
          var url = '<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/ajax_lock.php?showtemplate=false';
          var opts = { opt: 'check', type: 'content', oid: content_id };
          var ok = false;
          opts[cms_data.secure_param_name] = cms_data.user_key;
          $.ajax({
              url: url,
              data: opts,
              success: function(data,textStatus,jqXHR) {
             }
          }).done(data,function(){
              if( data.status == 'success' ) {
                  if( data.locked ) {
                      // gotta display a message.
	              alert('<?php echo strtr($_smarty_tpl->tpl_vars['mod']->value->Lang('error_contentlocked'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
		      event.preventDefault();
                  }
              }
	  });
      });

      $(document).on('click', '#myoptions', function () {
          $('#useroptions').dialog({
              resizable: false,
              buttons: {
                  '<?php echo strtr($_smarty_tpl->tpl_vars['mod']->value->Lang('submit'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
': function () {
                      $(this).dialog('close');
                      $('#myoptions_form').submit();
                  },
                  '<?php echo strtr($_smarty_tpl->tpl_vars['mod']->value->Lang('cancel'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
': function () {
                      $(this).dialog('close');
                  },
              }
          });
      });

      $('#ajax_find').keypress(function (e) {
          if (e.which == 13) e.preventDefault();
      });

      // go to page on option change
      $(document).on('change', '#<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
curpage', function () {
          $(this).closest('form').submit();
      })

      $(document).ajaxComplete(function () {
      	  $('#selectall').cmsms_checkall();
          $('tr.selected').css('background', 'yellow');
      });

      $(document).on('click','a#clearlocks',function(){
         return confirm('<?php echo strtr($_smarty_tpl->tpl_vars['mod']->value->Lang('confirm_clearlocks'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
      });

      $(document).on('click','a#ordercontent',function(e){
          var have_locks = <?php echo $_smarty_tpl->tpl_vars['have_locks']->value;?>
;
          if( !have_locks ) {
              // double check to see if anything is locked
              var content_id = $(this).attr('data-cms-content');
   	      var url = '<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/ajax_lock.php?showtemplate=false';
              var opts = { opt: 'check', type: 'content' };
              var ok = false;
              opts[cms_data.secure_param_name] = cms_data.user_key;
              $.ajax({
                  url: url,
                  async: false,
                  data: opts,
                  success: function(data,textStatus,jqXHR) {
	              if( data.status != 'success' ) return;
	              if( data.locked ) have_locks = true;
	          }
              });
          }
          if( have_locks ) {
              alert('<?php echo strtr($_smarty_tpl->tpl_vars['mod']->value->Lang('error_action_contentlocked'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
	      e.preventDefault();
          }
      })
  });
  //]]>
  </script>

  <div id="useroptions" style="display: none;" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_userpageoptions');?>
">
    <?php echo smarty_function_form_start(array('action'=>'defaultadmin','id'=>'myoptions_form'),$_smarty_tpl);?>

      <div class="pageoverflow">
        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
setoptions" value="1"/>
	<p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_pagelimit');?>
:</p>
	<p class="pageinput">
	  <select name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
pagelimit">
	    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['pagelimits']->value,'selected'=>$_smarty_tpl->tpl_vars['pagelimit']->value),$_smarty_tpl);?>

	  </select>
	</p>
      </div>
    <?php echo smarty_function_form_end(array(),$_smarty_tpl);?>

  </div>
  <div class="clearb"></div>
<?php }?>


<div id="content_area"></div>
<?php }} ?>
