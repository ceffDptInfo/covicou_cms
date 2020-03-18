<?php /* Smarty version Smarty-3.1-DEV, created on 2020-03-16 11:42:38
         compiled from "cms_stylesheet:structure_pc" */ ?>
<?php /*%%SmartyHeaderCode:1409678865e6f581ee6c6b9-18730525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5a5b47c941b67154c035f7cebf7b3d3a24953a3' => 
    array (
      0 => 'cms_stylesheet:structure_pc',
      1 => '1584177829',
      2 => 'cms_stylesheet',
    ),
  ),
  'nocache_hash' => '1409678865e6f581ee6c6b9-18730525',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5e6f581ee6cba9_39512896',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e6f581ee6cba9_39512896')) {function content_5e6f581ee6cba9_39512896($_smarty_tpl) {?>/* cmsms stylesheet: structure_pc modified: 14/03/2020 10:23:49 */
html{
    padding: 0px;
    margin: 0px;
    margin-left: auto;
    margin-right: auto;
    background-color: #ECF0F1;
    height: 100%;
    overflow-wrap: break-word;
}

body {
    max-width: 1200px;
    padding: 0px;
    margin: 0px;
    margin-left: auto;
    margin-right: auto;
    height: 100%;
    font-family: Verdana, Arial, Sans-Serif;
}

#header {
    margin-top: -20px;
    height: 240px;
}

#banniere {
    width: 1200px;
    height: 200px;
    position: absolute;
    background-position:center;
    background-repeat:no-repeat;
    background-image:url("./../../uploads/images/images_site/covicou.png");
}
#communes{
position:absolute;
bottom:0px;
right:0px;
}

#syndicat{
position:absolute;
bottom:20px;
left:20px;
font-size:26px;
}

#container{
    position: relative;
    min-height: 100%;
    background-color: white;
    width: 1200px;
}

#footer {
    position: absolute;
    bottom: -20px;
    padding-right: auto;
    padding-left: auto;
    line-height: 50px;
    background-color: #D8D8D8;
    width: 100%;
    text-align: center;
    font-size: 12px;
}

#section {
    padding: 100px 50px 50px 50px;
    /*border:1px solid black;*/
}

#section h1{
    color: #641753;
    font-family: 'Comfortaa', cursive;
    border-left : 2px solid #641753;
    border-bottom : 2px solid #641753;
    padding-left: 12px;
    padding-bottom: 5px;
    width: 60%;
    border-radius: 1px;
    white-space:nowrap;
}

#section h2 {
    padding-left: 20px;
    color: #641753;
    font-weight: normal;
}

#section h3 {
    color: #641753;
    padding-left: 40px;
    font-weight: normal;
}

#section p {
    margin-left: 60px;
    margin-right: 60px;
    margin-bottom: 30px;
}

#section li {
    margin-left: 60px;
    margin-right: 60px;
    margin-bottom: 30px;
}

a {
   color: #38ABC3;
}

p{
    text-align:justify;
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

#error_image {
    box-shadow: 0px 0px 30px #696969;
    padding-left: auto;
    padding-right: auto;
}

#hamburger {
    display: none;
}

#goUpButton {
    position: fixed;
    bottom: 30px;
    right: 50px;
    z-index: 99;
    border: none;
    outline: none;
    background-color: #91d6ff;
    color: white;
    cursor: pointer;
    border-bottom: #91d6ff solid 5px;
    text-decoration: none;
    transition-duration: 0.2s;
}

#goUpButton:hover {
    border-bottom: #91d6ff solid 0px;
    transition-duration: 0.2s;
}

#goUpButton img {
    display: block;
    padding: 15px;
}

#goUpButton a {
    display: block;
    width: 100%; 
    height: 100%;
    position: absolute;
}

::-webkit-scrollbar {
    width: 12px;
}
 
::-webkit-scrollbar-track {
    background-color:#fff;
}

::-webkit-scrollbar-thumb {
    background-color:#91d6ff;
    /*background-image: -webkit-linear-gradient(45deg,
	                                          #349FB5 25%,
											  transparent 25%,
											  transparent 50%,
											  #349FB5 50%,
											  #349FB5 75%,
											  transparent 75%,
											  transparent)*/
}
<?php }} ?>
