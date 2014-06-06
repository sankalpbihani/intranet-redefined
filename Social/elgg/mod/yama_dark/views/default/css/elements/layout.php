<?php
/**
 * Page Layout
 *
 * Contains CSS for the page shell and page layout
 *
 * Default layout: 990px wide, centered. Used in default page shell
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>

/* ***************************************
	PAGE LAYOUT
*************************************** */
/***** DEFAULT LAYOUT ******/
<?php // the width is on the page rather than topbar to handle small viewports ?>
.elgg-page-default {;
	min-width: 998px;
	background: url(<?php echo $vars['url']; ?>mod/yama_dark/graphics/gradients/main.jpg) repeat;

}
.elgg-page-default .elgg-page-header > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	height:70px;
	box-shadow: inset 0 0 18px 12px #131313; /* inner glow */
	background: url(<?php echo $vars['url']; ?>mod/yama_dark/graphics/gradients/7.gif) center repeat;

}
.elgg-page-default .elgg-page-body > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	box-shadow: inset 0 0 25px 0 #000; /* inner glow */

}
.elgg-page-default .elgg-page-footer > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	padding: 5px 0;
	
}

/***** TOPBAR ******/
.elgg-page-topbar {
	position: relative;
	height:22px;
	z-index: 9000;
	
}
.elgg-page-topbar > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	height:22px;
	background: url(<?php echo $vars['url']; ?>mod/yama_dark/graphics/gradients/main.jpg) repeat;
	box-shadow: inset 0 0 11px 0 #000; /* inner glow */

}

/***** PAGE MESSAGES ******/
.elgg-system-messages {
	position: fixed;
	top: 24px;
	right: 20px;
	max-width: 500px;
	z-index: 2000;
}
.elgg-system-messages li {
	margin-top: 10px;
}
.elgg-system-messages li p {
	margin: 0;
}

/***** PAGE HEADER ******/
.elgg-page-header {
	position: relative;
		
}
.elgg-page-header > .elgg-inner {
	position: relative;
	background: url(<?php echo $vars['url']; ?>mod/yama_dark/graphics/gradients/bg30.png) repeat;
	box-shadow: inset 0 0 11px 0 #000; /* inner glow */
	
}

/***** PAGE BODY LAYOUT ******/
.elgg-layout {
	min-height: 360px;
	background: url(<?php echo $vars['url']; ?>mod/yama_dark/graphics/gradients/main.jpg) repeat;
	
}
.elgg-layout-one-sidebar {
	color: #FFF;
	background: url(<?php echo $vars['url']; ?>mod/yama_dark/graphics/gradients/main.jpg) repeat;

}
.elgg-layout-two-sidebar {
	color: #FFF;
	background: url(<?php echo $vars['url']; ?>mod/yama_dark/graphics/gradients/main.jpg) repeat;

}
.elgg-sidebar {
    background: url(<?php echo $vars['url']; ?>mod/yama_dark/graphics/gradients/main.jpg) repeat;
	color: #fff;
	position: relative;
	padding: 20px;
	float: right;
	width: 220px;
	margin: 0 0 0 10px;
}
.elgg-sidebar h3 { color: #000;}
.elgg-sidebar-alt {
    background: #FFF;
    color: #000;
	position: relative;
	padding: 20px;
	float: left;
	width: 160px;
	margin: 0 10px 0 0;
}
.elgg-main {
    background: url(<?php echo $vars['url']; ?>mod/yama_dark/graphics/gradients/main.jpg) repeat;
    color: #000;
	position: relative;
	min-height: 360px;
	padding: 20px;

}

.elgg-main h2 { 
	color: #b7f223;

}

.elgg-main > .elgg-head {
	padding-bottom: 3px;
	border-bottom:1px dashed #151515;
	margin-bottom: 5px;
}

/***** PAGE FOOTER ******/
.elgg-page-footer {
	position: relative;
    margin-top:20px;
    padding-bottom:10px;
}
.elgg-page-footer {

}
.elgg-page-footer a:hover {
color: #7ae9ff;
text-decoration : underline;

}