<?php
/**
	 * Elegance theme for Elgg 1.8
	 * @package: Elegance theme for Elgg 1.8
	 * @author azycraze
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @copyright azycraze 2012
	 */
	 
?>
<?php

echo elgg_view_menu('footer', array('sort_by' => 'priority', 'class' => 'elgg-menu-hz'));

?>

<div id="adholder">
	<div id='ad-col'>
		<a href="http://azywebcoder.blogspot.in"><img src="<?php echo elgg_get_site_url(); ?>mod/elegance_theme/graphics/ad.gif"></a>
	</div>
	
	<div id='ad-col'>
		<a href="http://azywebcoder.blogspot.in/2012/05/learn-css-transitions-in-easy-way.html"><img src="<?php echo elgg_get_site_url(); ?>mod/elegance_theme/graphics/ad.gif"></a>
	</div>

	<div id='ad-col'>
		<h3>Links</h3>
		<li><a href='#'>Home</a></li>
		<li><a href="#">Forum</a></li>
		<li><a href="#">Developers</a></li>
		<li><a href="#">FAQ</a></li>
		<li><a href="#">Feedback</a></li>
		<li><a href="#">Community</a></li>
		<li><a href="#">Contact us</a></li>
		<li><a href="#">Support us</a></li>

	</div>
	
</div>

<div id='footer-credits'>
Copyright &copy; 2012 <?php echo elgg_get_config('sitename'); ?> | Powered by <a href="http://elgg.org">elgg</a> and Elegance theme for elgg 1.8 designed by <a href="http://azywebcoder.blogspot.in">azycraze</a>
</div>



