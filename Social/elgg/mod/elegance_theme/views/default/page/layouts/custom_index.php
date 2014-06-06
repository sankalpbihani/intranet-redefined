<?php
 
 /**
	 * Elegance theme for Elgg 1.8
	 * @package: Elegance theme for Elgg 1.8
	 * @author azycraze
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @copyright azycraze 2012
	 */
	 
?>

<div class="custom-index elgg-main elgg-grid clearfix">
		<?php if ( !elgg_is_logged_in()) : ?>
         <div style="text-align:center;">
		 <a href="<?php echo elgg_get_site_url(); ?>register" class="registration_link">
         <img src="<?php echo elgg_get_site_url(); ?>mod/elegance_theme/graphics/social.gif"/>
		 </a>
      	 </div>
		 <?php endif; ?>
	<div class="elgg-col elgg-col-1of2">
		<div class="elgg-inner pvm prl">
<?php
// left column

// Top box for login or welcome message
if (elgg_is_logged_in()) {
	$top_box = "<h2>" . elgg_echo("welcome") . " ";
	$top_box .= elgg_get_logged_in_user_entity()->name;
	$top_box .= "</h2>";
} else {
	$top_box = $vars['login'];
}
echo elgg_view_module('featured',  '', $top_box, array('header' => false));

// a view for plugins to extend
echo elgg_view("index/lefthandside");

// files
if (elgg_is_active_plugin('file')) {
	echo elgg_view_module('featured',  elgg_echo("custom:files"), $vars['files']);
}

// groups
if (elgg_is_active_plugin('groups')) {
	echo elgg_view_module('featured',  elgg_echo("custom:groups"), $vars['groups']);
}
?>
		</div>
	</div>
	<div class="elgg-col elgg-col-1of2">
		<div class="elgg-inner pvm">
<?php
// right column

// a view for plugins to extend
echo elgg_view("index/righthandside");

// files
echo elgg_view_module('featured',  elgg_echo("custom:members"), $vars['members']);

// groups
if (elgg_is_active_plugin('blog')) {
	echo elgg_view_module('featured',  elgg_echo("custom:blogs"), $vars['blogs']);
}

// files
if (elgg_is_active_plugin('bookmarks')) {
	echo elgg_view_module('featured',  elgg_echo("custom:bookmarks"), $vars['bookmarks']);
}
?>
		</div>
	</div>
</div>
