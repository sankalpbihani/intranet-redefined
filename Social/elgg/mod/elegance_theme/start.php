<?php
/**
	 * Elegance theme for Elgg 1.8
	 * @package: Elegance theme for Elgg 1.8
	 * @author azycraze
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @copyright azycraze 2012
	 */

elgg_register_event_handler('init', 'system', 'elegance_theme_init');

function elegance_theme_init() {
	elgg_extend_view('css/elgg', 'elegance_theme/css');
	
	$css_url = 'mod/elegance_theme/vendors/tipsy/tipsy.css';
	elgg_register_css('tipsy-css', $css_url);	
	
	$css_url = 'mod/elegance_theme/vendors/jqModal/jqModal.css';
	elgg_register_css('jqModal-css', $css_url);
		
	elgg_load_css('tipsy-css');
	elgg_load_css('jqModal-css');
	
	elgg_register_js('tipsy', 'mod/elegance_theme/vendors/tipsy/tipsy.js','footer');
	elgg_register_js('jqModal', 'mod/elegance_theme/vendors/jqModal/jqModal.js','footer');
	elgg_load_js('tipsy');
	elgg_load_js('jqModal');
	
	elgg_register_js('tipsy-jqModal', 'js/tipsy-jqModal/tipsy-jqModal.js','footer');
	elgg_load_js('tipsy-jqModal');
		
	elgg_unregister_menu_item('topbar', 'elgg_logo');
	elgg_unregister_menu_item('site', 'bookmarks');
}


?>
