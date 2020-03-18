<?php /* Smarty version Smarty-3.1-DEV, created on 2020-03-16 11:42:38
         compiled from "tpl_body:14" */ ?>
<?php /*%%SmartyHeaderCode:16244571005e6f581ee032e5-09991534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '650460e1799b95e04d87ae3036cb2c53a06b88df' => 
    array (
      0 => 'tpl_body:14',
      1 => '1584215754',
      2 => 'tpl_body',
    ),
  ),
  'nocache_hash' => '16244571005e6f581ee032e5-09991534',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5e6f581ee0f864_57689667',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e6f581ee0f864_57689667')) {function content_5e6f581ee0f864_57689667($_smarty_tpl) {?><?php if (!is_callable('smarty_function_title')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/plugins/function.title.php';
?><body>
    <div id="container">
        <div id="content">
            <header id="header">
                <input type="checkbox" name="description" id="checkHamburger" >
                <label for="checkHamburger">
                    <div id="nav_icon">
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                    </div>
                </label>
                <div id="banniere">
<div id="syndicat">
Syndicat scolaire<br>
Courtelary 
Cormoret 
Villeret
</div>
<div id="communes">
<img src="./../../uploads/images/images_site/communes.PNG">
</div>
                    <div id="retourAccueil">
                        <a href="http://www.covicou.ch/"></a>
                    </div>
                </div>
                <nav id="menu">
                    <?php echo Navigator::function_plugin(array(),$_smarty_tpl);?>

                </nav>
            </header>
            
            
            <section id="section">
    	   	    <h1 class="titre_page"><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h1>
    		    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    		    <?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>
    		    
    		    <p id="goUpButton">
    		        <a href="#top"></a>
    		        <img src="http://www.propaj.ch/uploads/images/images_site/goBackUp.png" width="30px">
    		    </p>
    		    
    	    </section>
    	
    	</div>
	<footer id="footer">
        Site réalisé avec le soutien du <a href="http://www.ceff.ch" target="_blank">CEFF Industrie</a>
    </footer>	
	</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>

<script>
$(document).ready(function(){

	// hide #back-top first
	$("#goUpButton").hide();
	
	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#goUpButton').fadeIn();
			} else {
				$('#goUpButton').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#goUpButton a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

});

$(document).ready(function(){
	$('#nav_icon').click(function(){
		$(this).toggleClass('open');
	});
});

</script>

</body>

</html><?php }} ?>
