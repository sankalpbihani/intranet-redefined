/* ***************************************
	Modules
*************************************** */
.elgg-module {
	overflow: hidden;
	margin-bottom: 10px;
    color: #979797;
	border: 1px solid #000;
	box-shadow: 0 0 5px 1px #000; /* drop shadow */
	background: url(<?php echo $vars['url']; ?>mod/yama_dark/graphics/gradients/bg30.png) repeat;
}

/* Aside */
.elgg-module-aside .elgg-head {
	margin-bottom: 5px;
	padding-bottom: 5px;
}

.elgg-module-aside .elgg-head h3 {
color: #979797;
border-top: 1px solid #8983EC;
border-bottom: 1px solid #000;

}

.custom-index .elgg-module-aside .elgg-head h3 {
color: #CDD8E0;
}

.custom-index .elgg-module-featured  h2 {
color: #CDD8E0;
}

.elgg-module-aside a:link, .elgg-module-aside a:visited {
color: #FB7300;
text-decoration: none;
border: 1px solid #000;
}

.elgg-module-aside a:hover, .elgg-module-aside a:active {
color: #CDD8E0;
text-decoration: underline;
}


/* Info */
.elgg-module-info > .elgg-head {
	padding: 5px 0;
	margin-bottom: 10px;

}
.elgg-module-info > .elgg-head * {
	color: #CDD8E0;
}

/* Popup */
.elgg-module-popup {
    background: url(<?php echo $vars['url']; ?>mod/yama_dark/graphics/gradients/main.jpg) repeat;
    color: #000;
	border: 1px solid #000;	
	
	z-index: 9999;
	margin-bottom: 0;
	padding: 5px;

}
.elgg-module-popup > .elgg-head {
	margin-bottom: 5px;
}
.elgg-module-popup > .elgg-head * {
	color: #151515;
	background: url(<?php echo $vars['url']; ?>mod/yama_dark/graphics/gradients/bg40.png) repeat;
}

/* Dropdown */
.elgg-module-dropdown {
	background: url(<?php echo $vars['url']; ?>mod/yama_dark/graphics/gradients/bg40.png) repeat;
    color: #000;
	border:1px dashed #000;
	
	display:none;
	
	width: 210px;
	padding: 12px;
	margin-right: 0px;
	z-index:100;
	
	-webkit-box-shadow: 0 3px 3px rgba(0, 0, 0, 0.45);
	-moz-box-shadow: 0 3px 3px rgba(0, 0, 0, 0.45);
	box-shadow: 0 3px 3px rgba(0, 0, 0, 0.45);
	
	position:absolute;
	right: 0px;
	top: 100%;
}

/* Featured */
.elgg-module-featured {
background: url(<?php echo $vars['url']; ?>mod/yama_dark/graphics/gradients/bg30.png) repeat;
color: #FFF;
box-shadow: inset 0 0 50px 5px #000; /* inner glow */

}
.elgg-module-featured > .elgg-head {
	padding: 2px;
	border-left:1px solid #567645;
	border-right:1px solid #567645;
	box-shadow: 0 0 2px 1px #000; /* drop shadow */
   
    background: url(<?php echo $vars['url']; ?>mod/yama_dark/graphics/gradients/bg30.png) repeat;
    color: #fff;
}
.elgg-module-featured > .elgg-head * {
	color:#FFF;
    text-transform: uppercase;
	box-shadow: 0 0 12px 2px #000; /* drop shadow */
}
.elgg-module-featured > .elgg-body {
	padding: 2px;
}

/* ***************************************
	Widgets
*************************************** */
.elgg-widgets {
	float: right;
	min-height: 30px;
}
.elgg-widget-add-control {
	float: right;
	text-align: right;
	margin: 5px 5px 2px;
}
.elgg-widgets-add-panel {
	padding: 10px;
	margin: 0 5px 15px;
    border: 1px solid #be154d;

}
<?php //@todo location-dependent style: make an extension of elgg-gallery ?>
.elgg-widgets-add-panel li {
	float: left;
	margin: 2px 2px;
	width: 200px;
	padding: 4px;

	background: #be154d;
	font-weight: bold;
}
.elgg-widgets-add-panel li a {
	display: block;
}
.elgg-widgets-add-panel .elgg-state-available {
	color: #FFF;
	cursor: pointer;
}
.elgg-widgets-add-panel .elgg-state-available:hover {
	background:#2190ff;
}
.elgg-widgets-add-panel .elgg-state-unavailable {
    background:#ffdce1;
	color:#151515;
}

.elgg-module-widget {
	margin: 0 4px 4px;
	position: relative;
    background: url(<?php echo $vars['url']; ?>mod/yama_dark/graphics/gradients/bg40.png) repeat;
    color: #FFF;
	
}
.elgg-module-widget:hover {
	box-shadow: 0 0 5px 1px #2C486C; /* drop shadow */

}
.elgg-module-widget > .elgg-head {
	color: #FFF;
    background: url(<?php echo $vars['url']; ?>mod/yama_dark/graphics/gradients/main.jpg) repeat;
	height: 40px;
	overflow: hidden;
	border-top: 1px solid #2C486C;

}
.elgg-module-widget > .elgg-head h3 {
	float: left;
	padding: 4px 20px 0 5px;
	color: #FFF;
	background: url(<?php echo $vars['url']; ?>mod/yama_dark/graphics/gradients/bg30.png) repeat;
	box-shadow: 0 0 8px 1px #000; /* drop shadow */
	border-left: 1px solid #000;
	border-bottom: 1px solid #181818;
	border-top: 1px solid #2C486C;
	
}
.elgg-module-widget.elgg-state-draggable > .elgg-head {
	cursor: move;
}
.elgg-module-widget > .elgg-head a {
	position: absolute;
	top: 4px;
	display: inline-block;
	width: 18px;
	height: 18px;
	padding: 2px 2px 0 0;
}
a.elgg-widget-collapse-button {
	padding: 5px;
	right: 20px;
	height: 20px;
	color: #0054A7;
}
a.elgg-widget-collapse-button:hover,
a.elgg-widget-collapsed:hover {
	color: #2981d9;
	text-decoration: none;
}
a.elgg-widget-collapse-button:before {
	content: "\25BC";
}
a.elgg-widget-collapsed:before {
	content: "\25BA";
}
a.elgg-widget-delete-button {
	left: 110px;
	height: 15px;
}
a.elgg-widget-edit-button {
	left: 80px;
}
.elgg-module-widget > .elgg-body {
	width: 100%;
	overflow: hidden;
	background: url(<?php echo $vars['url']; ?>mod/yama_dark/graphics/gradients/main.jpg) repeat;
}
.elgg-widget-edit {
	display: none;
	width: 96%;
	padding: 2%;
    border-bottom: 1px dashed #710606;
background: url(<?php echo $vars['url']; ?>mod/yama_dark/graphics/gradients/editbk.png) repeat;

}
.elgg-widget-content {
	padding: 10px;
}
.elgg-widget-content .elgg-form-messageboard-add{
	margin-right: 10px;
}
.elgg-widget-placeholder {
	border: 1px dashed #3b69ff;
	margin-bottom: 15px;
}