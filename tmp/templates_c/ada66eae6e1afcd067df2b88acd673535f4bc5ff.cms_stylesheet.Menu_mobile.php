<?php /* Smarty version Smarty-3.1-DEV, created on 2020-03-16 11:42:38
         compiled from "cms_stylesheet:Menu_mobile" */ ?>
<?php /*%%SmartyHeaderCode:9129820755e6f581ee6f319-17613949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ada66eae6e1afcd067df2b88acd673535f4bc5ff' => 
    array (
      0 => 'cms_stylesheet:Menu_mobile',
      1 => '1584177901',
      2 => 'cms_stylesheet',
    ),
  ),
  'nocache_hash' => '9129820755e6f581ee6f319-17613949',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5e6f581ee6f847_72356765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e6f581ee6f847_72356765')) {function content_5e6f581ee6f847_72356765($_smarty_tpl) {?>/* cmsms stylesheet: Menu_mobile modified: 14/03/2020 10:25:01 */
#banniere #communes{
display:none;

}

#banniere #syndicat{
color:white;
text-align:right;
font-size:20px;
padding-top:30px;
padding-right:10px;
}

nav#menu{
    font-size: 1.5em;
    height: 0px;
    visibility: hidden;
    /*display: none;*/
    width:100%;
    background: #212177;
    text-decoration: none;
    text-align:center;
    padding:0px;
    margin: 0px;
    position:absolute;
    z-index:6;
    padding-top: 129px;
    line-height: 50px;
    transform: translateX(-20%);
    opacity: 0;
    transition-duration: .3s;
    z-index: 1;
}

#checkHamburger:checked~nav#menu {
    height: 50000%;
    visibility: visible;
    /*display: block;*/
    transform: translateX(0px);
    opacity: 1;
    transition-duration: .3s;
    z-index: 1;
}

div#entete h2, div#entete p{
    display:none;
}

nav#menu h1{
    color: white;
    padding: 0px;
    text-align: center;
}

nav#menu ul{
    padding: 0px;
    margin:0px;
}

nav#menu li{
    list-style:none;  
    padding-top: 10px;
    padding-bottom:10px;
    color: white;
    text-align: center;
}

nav#menu li a{
    text-decoration: none;
    color: white;
    width: 100%;
    display: block;
    height: 80px;
}

nav#menu li ul{
    height:0px;
    visibility: hidden;
    transform: translateY(-30px);
    /*background-color: #38ABC3;*/
    transition-duration: .1s;
    z-index: 1000;
    opacity: 0;
    background-image:url("./../../uploads/images/images_site/fleche_menu_mobile_1.png");
    background-size: 40px;
    background-repeat: no-repeat;
    background-position: 20% 0%;
}

nav#menu .nav-trigger:checked ~ ul{
    height:auto;
    visibility: visible;
    transform: translateY(0px);
    transition-duration: .3s;
    opacity: 1;
    background-color: #212177;
}

nav#menu li ul ul{
    margin-bottom: -9px;
    height:0px;
    visibility: hidden;
    background-color: #2E8DA0;
    transform: scaleY(0.2);
    transform: translateY(-30px);
    z-index: 1000;
    opacity: 0;
    background-image:url("./../../uploads/images/images_site/fleche_menu_mobile_2.png");
    background-size: 40px;
    background-repeat: no-repeat;
    background-position: 20% 0%;
}

.sectionheader label{
    width: 100%;
    display: block;
    /*background-image:url("./../../uploads/images/images_site/fleche_menu_mobile_3.png");
    background-size: 10px;
    background-repeat: no-repeat;
    background-position: 30% 50%;*/
    height: auto;
    padding-bottom: 25px;
}

nav label img {
    width: 10px;
    height: auto;
    margin-left: 10px;
    display: inline;
    transform: rotate(0deg);
    transition: .3s ease-in-out;
}

nav#menu .nav-trigger:checked ~label img {
    transform: rotate(180deg);
    transition: .3s ease-in-out;
}

.sectionheader {
}

input.nav-trigger{
    height:0px;
    width:0px;
}

input {
    display: none;
}

#checkHamburger:checked ~label #nav_icon {
    position: fixed;
    top: auto;
}

#nav_icon {
color:red;
  width: 50px;
  height: 50px;
  left: 25px;
  top: 0px;
  position: absolute;
  z-index: 1000;
  margin: 50px auto;
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
  -webkit-transition: .5s ease-in-out;
  -moz-transition: .5s ease-in-out;
  -o-transition: .5s ease-in-out;
  transition: .5s ease-in-out;
  cursor: pointer;
}

#nav_icon span{
  display: block;
  position: absolute;
  height: 9px;
  width: 100%;
  background: white;
  opacity: 1;
  left: 0;
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
  -webkit-transition: .25s ease-in-out;
  -moz-transition: .25s ease-in-out;
  -o-transition: .25s ease-in-out;
  transition: .25s ease-in-out;
}

/* Icon 3 */

#nav_icon span:nth-child(1) {
  top: 0px;
}

#nav_icon span:nth-child(2),#nav_icon span:nth-child(3) {
  top: 18px;
}

#nav_icon span:nth-child(4) {
  top: 36px;
}

#nav_icon.open span:nth-child(1) {
  top: 18px;
  width: 0%;
  left: 50%;
}

#nav_icon.open span:nth-child(2) {
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
}

#nav_icon.open span:nth-child(3) {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
}

#nav_icon.open span:nth-child(4) {
  top: 18px;
  width: 0%;
  left: 50%;
}
<?php }} ?>
