<?php


$homepage = "/dashboard";
$currentpage = $_SERVER['REQUEST_URI'];
if($homepage==$currentpage) {
	echo "<a href=\"./suggested_friends\"><button class=\"elgg-button elg-button-action\">";
	echo "Rechercher des amis";
	echo "</button></a><br /><br />";
		echo "<a href=\"./members\"><button class=\"elgg-button elg-button-action\">";
	echo "Voir tous les membres";
	echo "</button></a>";

	echo "<br /><br /><p>Bientôt la gestion des évènements!";
}

?>