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
	Typography
*************************************** */
body {
	font-size: 80%;
	line-height: 1.5em;
	font-family: "Trebuchet MS", Arial, Tahoma, Verdana, sans-serif;
  color: #000;
}

a {
  color: #05d;
}

a:hover,
a.selected { <?php //@todo remove .selected ?>
	color: #03b;
	text-decoration: underline;
}

p {
	margin-bottom: 15px;
}

p:last-child {
	margin-bottom: 0;
}

pre, code {
	font-family: Monaco, "Courier New", Courier, monospace;
	
	background:#ffb;
	color:#000;
	overflow:auto;

	overflow-x: auto; /* Use horizontal scroller if needed; for Firefox 2, not needed in Firefox 3 */

	white-space: pre-wrap;
	word-wrap: break-word; /* IE 5.5-7 */
	
}

pre {
	padding:5px 15px;
	margin:0px 0 15px 0;
	line-height:1.2em;
}

code {
	padding:2px 3px;
}

.elgg-monospace {
	font-family: Monaco, "Courier New", Courier, monospace;
}

blockquote {
	line-height: 1.3em;
	padding:5px 15px;
	margin:0px 0 15px 0;
	background:#ffb;
	border:none;
	
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
}

h1, h2, h3, h4, h5, h6 {
	font-weight: bold;
	color: #28f;
  line-height: 1.1em;
  padding-bottom: 5px;
}

h1 { font-size: 1.8em; }
h2 { font-size: 1.5em; }
h3 { font-size: 1.2em; }
h4 { font-size: 1.0em; }
h5 { font-size: 0.9em; }
h6 { font-size: 0.8em; }

.elgg-heading-site ,.elgg-heading-site:hover{
	font-size: 2em;
	line-height: 1.4em;
	color: white;
	font-style: italic;
	font-family: Georgia, times, serif;
 	 display: inline-block;
	color: #fff;
	text-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
	text-decoration: none;
 	 padding: 10px 15px;
}

.elgg-heading-site:hover {
	text-shadow: 0px 0px 10px #fff;
}

.elgg-heading-main {
	float: left;
	max-width: 530px;
	margin-right: 10px;

}
.elgg-heading-basic {
	color: #0054A7;
	font-size: 1.2em;
	font-weight: bold;
}

.elgg-subtext {
	color: #666;
	line-height: 1.2em;
	font-style: italic;
}

.elgg-text-help {
	display: block;
	font-style: italic;
}

.elgg-quiet {
	color: #666;
}

.elgg-loud {
	color: #0054A7;
}


/* ***************************************
	USER INPUT DISPLAY RESET
*************************************** */
.elgg-output {
	margin-top: 10px;
}

.elgg-output dt { font-weight: bold }
.elgg-output dd { margin: 0 0 1em 1em }

.elgg-output ul, .elgg-output ol {
	margin: 0 1.5em 1.5em 0;
	padding-left: 1.5em;
}
.elgg-output ul {
	list-style-type: disc;
}
.elgg-output ol {
	list-style-type: decimal;
}
.elgg-output table {
	border: 1px solid #ccc;
}
.elgg-output table td {
	border: 1px solid #ccc;
	padding: 3px 5px;
}
.elgg-output img {
	max-width: 100%;
}
