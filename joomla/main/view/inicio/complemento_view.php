<?php
	defined('_JEXEC') or die;

	function build_complement($article){
		$complement = '<div class="complement">';
		$complement .= '<h3>' . $article['title'] . '</h3>';
		$complement .= '<div>' . $article['introtext'] . '</div>';
		$complement .= '</div>';
		return $complement;
	}
?>