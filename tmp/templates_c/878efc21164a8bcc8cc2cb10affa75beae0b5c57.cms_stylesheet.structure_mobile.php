<?php /* Smarty version Smarty-3.1-DEV, created on 2020-03-16 11:42:38
         compiled from "cms_stylesheet:structure_mobile" */ ?>
<?php /*%%SmartyHeaderCode:11826772145e6f581ee6df62-10024527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '878efc21164a8bcc8cc2cb10affa75beae0b5c57' => 
    array (
      0 => 'cms_stylesheet:structure_mobile',
      1 => '1584178016',
      2 => 'cms_stylesheet',
    ),
  ),
  'nocache_hash' => '11826772145e6f581ee6df62-10024527',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5e6f581ee6e481_80565235',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e6f581ee6e481_80565235')) {function content_5e6f581ee6e481_80565235($_smarty_tpl) {?>/* cmsms stylesheet: structure_mobile modified: 14/03/2020 10:26:56 */
html{
    padding: 0px;
    margin: 0px;
    background-color: white;
    height: 100%;
    width: 100%;
    position: absolute;
    bottom: 0px;
    overflow-wrap: break-word;
}

body {
    width: 100%;
    padding: 0px;
    margin: 0px;
    height: 100%;
    font-family: Verdana;
}

#header {
   margin-top: -20px;
    height: 135px;
}

#banniere {
    width: 100%;
    height: 100px;
    position: absolute;
    border-bottom: #91d6ffsolid 5px;
    background:#212177;
    top: 17px;
}

#checkHamburger:checked~#banniere {
    position: fixed;
    z-index: 10;
    height: 100px;
    border-bottom: #349FB5 solid 5px;
    top: -3px;
}

#retourAccueil {
    position: absolute;
    height: 120px;
    width: 200px;
    left: 30px;
    background-image:url("./../../uploads/images/images_site/Logo_petit.PNG");
}

#container{
    position: relative;
    height: 100%;
    background-color: white;
    width: 100%;
    
}

#content{
    padding-bottom:40px;
    width: 100%;
}


#footer{
    position : fixed;
    z-index: 0;
    bottom: 0px;
    display: block;
    line-height:40px;
    background-color: #D8D8D8;
    width: 100%;
    text-align: center;
    font-size: 12px;
}

#section {
    padding:0px 15px 0px 15px;
    background-color: white;
}

#section h1{
    color: #641753;
    font-family: 'Comfortaa', cursive;
    border-left : 2px solid #641753;
    border-bottom : 2px solid #641753;
    padding-left: 12px;
    padding-bottom: 5px;
    border-radius: 1px;
    white-space:nowrap;
     max-width:100%;
}


#section h2 {
   color: #641753;
   margin-left: 10px;
    margin-right: 0px;
}

#section h3 {
    color: #641753;
    margin-left: 20px;
    margin-right: 0px;
}

#section p {
    margin-left: 30px;
    margin-right: 30px;
}

a {
   color: #38ABC3;
}

p {
    text-align:justify;
}

img {
    width: 100%;
    height: auto;
}

#section hr {
    border-top: solid 1px #ECF0F1;
}

#retourAccueil {
    position: absolute;
    height: 150px;
    width: 200px;
    left: 30px;
}
#retourAccueil a {
    padding-bottom: 140px;
    padding-left: 200px;
    cursor: pointer;
}

#goUpButton {
    position: fixed;
    bottom: 24px;
    right: -30px;
    z-index: 99;
    border: none;
    outline: none;
    background-color: #38ABC3;
    color: white;
    border-bottom: #349FB5 solid 5px;
    text-decoration: none;
    transition-duration: 0.2s;
}

#goUpButton p {
    display: none;
    transition-duration: 0.2s;
}

#goUpButton a {
    display: block;
    width: 100%; 
    height: 100%;
    position: absolute;
}

#goUpButton img {
    height: 20px;
    width: auto;
    padding: 10px;
}

#goUpButton:hover {
    border-bottom: #349FB5 solid 0px;
    transition-duration: 0.2s;
}

#retourAccueil{
 display: none;   
}
<?php }} ?>
