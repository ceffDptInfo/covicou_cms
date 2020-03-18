<?php /* Smarty version Smarty-3.1-DEV, created on 2020-03-16 17:22:42
         compiled from "cms_template:14" */ ?>
<?php /*%%SmartyHeaderCode:8778245765e6fa7d2883734-27063378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ba91d3539a9fdecb1ac7b80c4819c93c03e1bed' => 
    array (
      0 => 'cms_template:14',
      1 => '1584215754',
      2 => 'cms_template',
    ),
  ),
  'nocache_hash' => '8778245765e6fa7d2883734-27063378',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5e6fa7d28b7335_87346596',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e6fa7d28b7335_87346596')) {function content_5e6fa7d28b7335_87346596($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cms_get_language')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/plugins/function.cms_get_language.php';
if (!is_callable('smarty_function_title')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/plugins/function.title.php';
if (!is_callable('smarty_function_sitename')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/plugins/function.sitename.php';
if (!is_callable('smarty_function_metadata')) include '/home/clients/a4ec78e1569be1d26a717622bc0f6883/web/cms_19/plugins/function.metadata.php';
?><!doctype html>
<html lang="<?php echo smarty_function_cms_get_language(array(),$_smarty_tpl);?>
" id="html">

<head>
<!--script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "985effd2-7dd5-431b-9a49-98cf97eea1e7",
    });
  });
</script-->
	<title><?php echo smarty_function_title(array(),$_smarty_tpl);?>
 | <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</title>

<meta property="og:url"                content="http://covicou.ch/index.php?page=COVID-19" />
<meta property="og:type"               content="Covid-19" />
<meta property="og:title"              content="Canal d'information du syndicat scolaire Courtelary - Cormoret - Villeret" />
<meta property="og:description"        content="Crise du COVID-19 - Canal d'information du syndicat scolaire Courtelary - Cormoret - Villeret" />
<meta property="og:image"              content="http://covicou.ch/uploads/images/images_site/covicou.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

	<?php echo smarty_function_metadata(array(),$_smarty_tpl);?>

	<!--link rel="shortcut icon" type="image/x-icon" href="http://www.propaj.ch/cms_17/uploads/images/images_site/favicon.ico" /-->
	<link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet">
	
</head>

<body>
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
                    
                </nav>
            </header>
            
            
            <section id="section">
    	   	    <h1 class="titre_page"><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h1>
    		    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    		    
    		    
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
