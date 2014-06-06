<?php
$base_url = elgg_get_site_url();
$graphics_url = $base_url . 'mod/news/graphics/';


?>

div.mandatory {
	padding-right:15px;
	background:transparent url(<?php echo $graphics_url ?>mandatory.png) no-repeat 98% 23px;
}
.elgg-icon-toggler-down {
	background:transparent url(<?php echo $graphics_url ?>toggler-down.png) no-repeat 50% 50%;
	float:right;
	cursor:pointer;
}

.elgg-icon-toggler-down:hover {
	background:transparent url(<?php echo $graphics_url ?>toggler-down-hover.png) no-repeat 50% 50%;
}
.entity-news-menu {
	display: none;
	position: absolute;
	z-index:2000;
}

.entity-news-menu-default {
	margin-left:200px;
	margin-top:3px;
	overflow: hidden;
	width: 200px;
	background: #fff;
	border: 1px solid #B0B0B0;

	-moz-box-shadow: 0 0 4px #B0B0B0;
	-webkit-box-shadow: 0 0 4px #B0B0B0;
	box-shadow: 0 0 4px #B0B0B0;
}
.entity-news-menu-default > li {
	padding:5px;
}
.entity-news-menu-default > li a {
	color: #666;
}
.entity-news-menu-default > li a:hover {
	color: #888;
	text-decoration:none;
}
.entity-news-menu-default > li:hover {
	background:#f4f4f4;
}

.hover-menu-block {
	position:relative;
	float:right;
	display:block;
	margin-left:5px;
}

.hover-menu-toggler {

}
.elgg-menu-entitynews{
    float:right;
    margin-left:0px;
}
.elgg-content-news{
  background-color: #B93D21;
}

.elgg-menu-item-entitymenu-dropdown:hover ul {
  display: block;
}

.elgg-menu-item-entitymenu-dropdown:hover a span.elgg-icon-round-plus {
  background-position: 0 -864px;
}

.elgg-menu-item-entitymenu-dropdown a span.elgg-icon-round-plus {
  vertical-align: top;
}

.elgg-menu-item-entitymenu-dropdown a {
  text-decoration: none;
}

.elgg-list .elgg-body {
  overflow: visible;
}


/** Dropdown Styles **/

.elgg-menu .elgg-menu-item-entitymenu-dropdown .entitymenu-dropdown {
  padding: 2px;
  background-color: #003368;
  border-radius: 5px;
  color: white;
}


.elgg-menu .elgg-menu-item-entitymenu-dropdown:hover .entitymenu-dropdown {
  background-color: #B93D21;
}

.elgg-menu-item-entitymenu-dropdown ul {
  display: none;
  position: absolute;
  background-color: white;
  z-index: 100;
  border-radius: 5px;
  border: 2px solid #B93D21;
  min-width: 80px;
}


.elgg-menu-item-entitymenu-dropdown ul li {
  padding: 3px;
}
.elgg-icon-news {
    background: transparent url(<?php echo elgg_get_site_url(); ?>mod/news/_graphics/icons/news/newspaper.png) no-repeat left;
    width: 40px;
    height: 40px;
    margin: 0 2px;
	}

/* news Plugin */

/* force tinymce input height for a more useful editing / news creation area */
form#news-post-edit #description_parent #description_ifr {
	height:400px !important;
}
