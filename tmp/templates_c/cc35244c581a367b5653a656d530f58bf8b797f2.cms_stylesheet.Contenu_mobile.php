<?php /* Smarty version Smarty-3.1-DEV, created on 2020-03-16 11:42:38
         compiled from "cms_stylesheet:Contenu_mobile" */ ?>
<?php /*%%SmartyHeaderCode:4306652005e6f581ee71ad1-38971281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc35244c581a367b5653a656d530f58bf8b797f2' => 
    array (
      0 => 'cms_stylesheet:Contenu_mobile',
      1 => '1584173803',
      2 => 'cms_stylesheet',
    ),
  ),
  'nocache_hash' => '4306652005e6f581ee71ad1-38971281',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5e6f581ee71fc1_62263760',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e6f581ee71fc1_62263760')) {function content_5e6f581ee71fc1_62263760($_smarty_tpl) {?>/* cmsms stylesheet: Contenu_mobile modified: 14/03/2020 09:16:43 */
.paragraphe p{
    margin-bottom: 35px;
    margin-top: 35px;
}

.image_reseau img {
    display: none;
}

p.adresse_reseau {
    font-size: 17px;
    margin: auto;
    padding: 20px;
}

p.adresse_reseau a {
   color: #38ABC3;
}

.centres_reseau :hover{
    background-color: #ECF0F1;
    transition-duration: 0.3s;
}

#section .description_reseau {
    position: relative;
}

#checkHamburger:checked~nav#section {
    display: none;
}
<?php }} ?>
