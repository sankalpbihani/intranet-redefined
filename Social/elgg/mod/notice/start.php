<?php

	/**
	 * Elgg Custom Static Page plugin
	 *
	 * @package Elgg Custom Static Page
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Alex Falk, RiverVanRain
	 * @URL http://weborganizm.org/crewz/p/1983/personal-net
	 * @copyright (c) weborganiZm 2k13
	 */

function notice_init() {
global $CONFIG;
elgg_register_page_handler('notice','notice_page_handler');
				
			// Add menu link
$item = new ElggMenuItem('notice', elgg_echo('notice'), 'notice/');
elgg_register_menu_item('site', $item);
				}

function notice_page_handler($page)
{
	global $CONFIG;
	switch ($page[0])
	{
		default:
			include $CONFIG->pluginspath . 'notice/index.php';
		break;	
	}
	exit;
}
	
elgg_register_event_handler('init', 'system', 'notice_init');
?>