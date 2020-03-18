<?php /* Smarty version Smarty-3.1-DEV, created on 2020-03-16 11:42:38
         compiled from "cms_stylesheet:citations_pc" */ ?>
<?php /*%%SmartyHeaderCode:2930156485e6f581ee69d46-89395660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c538cf86d7d4c2112294059f6f7e061bb2fb3ba' => 
    array (
      0 => 'cms_stylesheet:citations_pc',
      1 => '1498629390',
      2 => 'cms_stylesheet',
    ),
  ),
  'nocache_hash' => '2930156485e6f581ee69d46-89395660',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5e6f581ee6a258_80896826',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e6f581ee6a258_80896826')) {function content_5e6f581ee6a258_80896826($_smarty_tpl) {?>/* cmsms stylesheet: citations_pc modified: 28/06/2017 07:56:30 */
#citations{
    font-family: 'Kalam', cursive;
    font-size: 18px;

    text-align : center;
    /*line-height: 50px;*/ /* hauteur de ligne (identique) */
    
    /*white-space: initial; /* interdiction de passer à la ligne */

   /** width: auto;*/
    width: auto;
    margin-left: -50px; /* ne met pas le padding de section aux citations */
    margin-right: -50px; /* ne met pas le padding de section aux citations */
    
}

.citations{
    padding-top:17px;
    padding-bottom:12px;
}

.citations.jeunes{
    background: #38ABC3;
    border-bottom: 5px solid #349FB5;
    color: #641753;
}

.citations.animateurs{
    background: #CC9C38;
    border-bottom: 5px solid #BF9135;
    color: #fff;
}

.citations.jeunes p, .citations.animateurs p {
    display:inline;
}
<?php }} ?>
