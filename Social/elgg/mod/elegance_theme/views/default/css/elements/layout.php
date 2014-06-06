<?php
/**
	 * Elegance theme for Elgg 1.8
	 * @package: Elegance theme for Elgg 1.8
	 * @author azycraze
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @copyright azycraze 2012
	 */
?>

/* ***************************************
	PAGE LAYOUT
*************************************** */
/***** DEFAULT LAYOUT ******/
<?php // the width is on the page rather than topbar to handle small viewports ?>
.elgg-page-default {
	min-width: 998px;
}
.elgg-page-default .elgg-page-header > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	height: 65px;
}
.elgg-page-default .elgg-page-body > .elgg-inner {
	width: 990px;	
	margin: 0 auto;
    padding: 10px;
	border:1px solid #dedede;
    margin-top: 10px;
}
.elgg-page-default .elgg-page-footer > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	padding: 5px 0;
}
.elgg-page-default .elgg-page-nav > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	padding: 5px 0;
}
/***** TOPBAR ******/
.elgg-page-topbar {
	background:url('<?php echo elgg_get_site_url(); ?>mod/elegance_theme/graphics/topbar_bg.jpg') repeat-x ;
	position: relative;
	height: 24px;
}
.elgg-page-topbar > .elgg-inner {
	padding: 0 10px;
}

/****** Page navigation*********/

.elgg-page-nav	{
	position: relative;
	height: 24px;
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
	background:#16497c;
	height:80px;
}
.elgg-page-header > .elgg-inner {
	position: relative;
}

/***** PAGE BODY LAYOUT ******/
.elgg-layout {
	min-height: 360px;
}
.elgg-layout-one-sidebar {
	background: transparent url(<?php echo elgg_get_site_url(); ?>_graphics/sidebar_background.gif) repeat-y right top;
}
.elgg-layout-two-sidebar {
	background: transparent url(<?php echo elgg_get_site_url(); ?>_graphics/two_sidebar_background.gif) repeat-y right top;
}
.elgg-sidebar {
	position: relative;
	padding: 20px 10px;
	float: right;
	width: 210px;
	margin: 0 0 0 10px;
}
.elgg-sidebar-alt {
	position: relative;
	padding: 20px 10px;
	float: left;
	width: 160px;
	margin: 0 10px 0 0;
}
.elgg-main {
	position: relative;
	min-height: 360px;
	padding: 10px;
}
.elgg-main > .elgg-head {
	padding-bottom: 3px;
	border-bottom: 1px solid #CCCCCC;
	margin-bottom: 10px;
}

/***** PAGE FOOTER ******/
.elgg-page-footer {
    background:  url(<?php echo elgg_get_site_url(); ?>mod/elegance_theme/graphics/footer_bg.gif);
    margin: 30px 0 0;
    position: relative;
    width: 100%;
	min-height:400px;
	
}
.elgg-page-footer {
	color: #999;
}
.elgg-page-footer a:hover {
	color: #666;
}