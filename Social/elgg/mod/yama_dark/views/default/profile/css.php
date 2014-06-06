<?php
/**
 * Elgg Profile CSS
 * 
 * @package Profile
 */
?>
/* ***************************************
	Profile
*************************************** */
.profile {
	float: left;
	margin-botom:4px;
}
.profile .elgg-inner {
	margin: 0 2px;
    box-shadow: 0 0 5px 1px #000; /* drop shadow */
    background: url(<?php echo $vars['url']; ?>mod/yama_dark/graphics/gradients/bg30.png) right;
	color: #6699CC;
	
	
}
#profile-details {
	padding: 1px; 
	color: #979797;
	text-align: center;
}
#profile-details h2{
	color: #27a1e8; 
	text-align: center;
	background: url(<?php echo $vars['url']; ?>mod/yama_dark/graphics/gradients/main.jpg) repeat;
	box-shadow: inset 0 0 5px 2px #000; /* inner glow */
}
/*** ownerblock ***/
#profile-owner-block {
	width: 200px;
	float: left;
	border-top: 1px solid #000;
	border-bottom: 1px solid #000;
	padding: 0px;
	box-shadow: 0 0 5px 1px #000; /* drop shadow */
	
	
}
#profile-owner-block .large {
	margin-bottom: 0px;
}
#profile-owner-block a.elgg-button-action {
	margin-bottom: 1px;
	text-align: center;
	background: url(<?php echo $vars['url']; ?>mod/yama_dark/graphics/gradients/bg30.png) repeat;
	box-shadow: 0 0 5px 0 #000; /* drop shadow */
	color: #45c7ff;
	
}
.profile-content-menu a {
	display: block;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #123d54;
	margin: 2px 0 5px 0;
	padding: 2px 4px 2px 0;
	border: 1px solid #000;
	text-align: center;
	background: url(<?php echo $vars['url']; ?>mod/yama_dark/graphics/gradients/bg30.png) repeat;
	
}
.profile-content-menu a:hover {
	text-decoration: none;
	background: url(<?php echo $vars['url']; ?>mod/yama_dark/graphics/gradients/bt.png) repeat;
	box-shadow: 0 0 5px 0 #fff; /* drop shadow */
	
}
.profile-admin-menu {
	display: none;
}
.profile-admin-menu-wrapper a {
	display: block;
	margin: 3px 0 5px 0;
	padding: 2px 4px 2px 0;
}
.profile-admin-menu-wrapper {
}
.profile-admin-menu-wrapper li a {
	color: red;
	margin-bottom: 0;
}
.profile-admin-menu-wrapper a:hover {
	color: black;
}
/*** profile details ***/
#profile-details .odd {
	margin: 0 0 2px;
	padding: 2px 0;
}
#profile-details .even {
	margin: 0 0 2px;
	padding: 2px 0;
}
.profile-aboutme-title {
	margin: 0;
	padding: 1px 0;
	text-align: center;
	color: #3ec3fc;
	background: url(<?php echo $vars['url']; ?>mod/yama_dark/graphics/gradients/main.jpg) repeat;
	box-shadow: inset 0 0 5px 2px #000; /* inner glow */
}
.profile-aboutme-contents {
	width:405px;
	height: 140px;
	padding: 2px;
	padding: 1px 0 0 0;
	text-align: left;
	font: 50% Arial, Helvetica, sans-serif;
	color: #000;
	padding: 10px;
	background: url(<?php echo $vars['url']; ?>mod/yama_dark/graphics/gradients/7.gif) repeat;
	overflow:auto;
    box-shadow: 0 0 8px 2px #000; /* drop shadow */
	

}
.profile-banned-user {
	border: 1px solid red;
	padding: 4px 8px;
}
/* ***************************************
	Modules - AVATAR
*************************************** */
.elgg-sidebar #profile-owner-block{
	background:none;
    height:200px;
	padding:5px;
	margin:0 0 20px 0;
	border: 1px solid #27a1e8;
    overflow:hidden; 
}
