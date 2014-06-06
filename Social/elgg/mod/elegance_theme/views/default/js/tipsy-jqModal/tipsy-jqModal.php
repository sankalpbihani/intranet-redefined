<?php
/**
	 * Elegance theme for Elgg 1.8
	 * @package: Elegance theme for Elgg 1.8
	 * @author azycraze
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @copyright azycraze 2012
	 */
	 
?>

$().ready(function() {

$('body a[title!=""]').tipsy({gravity: $.fn.tipsy.autoNS,fade:true});
$('#window').jqm({trigger: 'a.registration_link'});
$('#forgot').jqm({trigger: 'a.forgotten_password_link'});
});

