<?php /* Smarty version Smarty-3.1-DEV, created on 2020-03-16 11:42:38
         compiled from "cms_stylesheet:citations_mobile" */ ?>
<?php /*%%SmartyHeaderCode:3317447155e6f581ee707d0-32637392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fa03c87e2a82084a157e74e9ecde14dc9e7fece' => 
    array (
      0 => 'cms_stylesheet:citations_mobile',
      1 => '1498580821',
      2 => 'cms_stylesheet',
    ),
  ),
  'nocache_hash' => '3317447155e6f581ee707d0-32637392',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5e6f581ee70c55_67909319',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e6f581ee70c55_67909319')) {function content_5e6f581ee70c55_67909319($_smarty_tpl) {?>/* cmsms stylesheet: citations_mobile modified: 27/06/2017 18:27:01 */
.citations{
    font-family: 'Kalam', cursive;
    font-size: 16px;

    text-align : center;
    /*line-height: 50px;*/ /* hauteur de ligne (identique) */
    
    /*white-space: initial; /* interdiction de passer à la ligne */

   /** width: auto;*/
    width: 100%;
    padding-left: 15px; /* ne met pas le padding de section aux citations */
    padding-right: 15px; /* ne met pas le padding de section aux citations */
    margin-left: -15px;
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
