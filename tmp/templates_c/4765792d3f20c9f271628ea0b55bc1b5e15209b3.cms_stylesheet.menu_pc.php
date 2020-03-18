<?php /* Smarty version Smarty-3.1-DEV, created on 2020-03-16 11:42:38
         compiled from "cms_stylesheet:menu_pc" */ ?>
<?php /*%%SmartyHeaderCode:4072288315e6f581ee6b255-61161781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4765792d3f20c9f271628ea0b55bc1b5e15209b3' => 
    array (
      0 => 'cms_stylesheet:menu_pc',
      1 => '1584177768',
      2 => 'cms_stylesheet',
    ),
  ),
  'nocache_hash' => '4072288315e6f581ee6b255-61161781',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5e6f581ee6b749_77511008',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e6f581ee6b749_77511008')) {function content_5e6f581ee6b749_77511008($_smarty_tpl) {?>/* cmsms stylesheet: menu_pc modified: 14/03/2020 10:22:48 */
nav#menu {
    position:relative;
    font-family:  Arial, Sans-Serif;
    top : 182px;
    width: 1200px;
    /*margin-left: auto;
    margin-right: 46px;*/
    z-index: 3;
}

nav#menu li a, nav#menu .sectionheader label{ /*zone cliquable*/
    height: 135%;
    width: 100%;
    display: block;
    line-height: 90px; /* hauteur de ligne (identique) */
    margin-top: -18px;
}

nav#menu ul{ /*Le menu en entier*/
    list-style: none;
    padding-left: 0px;
    width: 100%;
    height: 40px;
    margin-left: auto;
    margin-right: auto;
}

nav#menu ul ul{ /* ensemble des sous-menu */
    position: absolute;
    margin-left: 0px;
    margin-top: 0px;
    width: 200px;
    height: 40px;

}

nav#menu ul ul.reduire {
    margin-top: -3px;
}

nav#menu ul ul ul {
    margin-top: -41px;
    margin-left: 98px;
}

nav#menu li{ /*toutes les cases du menu*/
    display: block;
    width: 200px;
    height: 60px;
    background-color: #212177; /*couleur fond du menu*/
    cursor: pointer;
    float: left;
    text-align: center;
    white-space: nowrap;
    border-bottom: 5px solid #212177;
    font-size: 18px;
}

nav#menu ul > li{
    margin-top :5px;
}

nav#menu li li ~ li{
    margin-top : 0px;
}

nav#menu li li {
    /*height: 40px;*/
    border-bottom: 0px solid #212177;
    line-height: 60px;
    margin-top: 5px;
    
}

nav#menu li li li{
    margin-top: -60px;
    margin-left: 102px;
}

nav#menu li li li ~ li{
    margin-top: 0px;
}

nav#menu li ul{
    display: none;
}

nav#menu li:hover > ul{
    display: block;
}

nav#menu li:hover{
    background-color: #91d6ff; /*couleur quand on passe la souris*/
}

nav#menu a, nav#menu li.sectionheader{
    text-align: center;
    text-decoration: none;
    color: #FFF;
}

nav label img {
    display: none;
}

/*
nav#menu li.sectionheader{
    color: #FFF;
    cursor: default; 
    margin-top: 5px;
}

nav#menu li.sectionheader li{
    margin-top: 8px;
    
}

nav#menu li.sectionheader li ~ li{
    margin-top: 0px;
}*/

nav#menu li.currentpage{
    border-bottom: 5px solid #91d6ff; /*bordure violette de la page actuelle*/
}

nav#menu li li.activeparent{
    border-bottom: 0px solid #91d6ff; /*bordure violette de la page actuelle*/
}

nav#menu li.activeparent{
    border-bottom: 5px solid #641753; /*bordure violette de la page actuelle*/
    
}

nav#menu li.activeparent li.currentpage
{
    border-bottom: 0px solid #91d6ff; /*bordure violette de la page actuelle*/
    
}

nav#menu .nav-trigger{
    height:0px;
    width:0px;
    display: none; /* cache les checkbox */
}
<?php }} ?>
