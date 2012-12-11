<?php
	defined('_JEXEC') or die;

	function show_screen($content){
		while($article = mysql_fetch_array($content, MYSQL_ASSOC)){
			if($article['title'] != NULL){
				require_once('templates/hospedajeweb/main/view/blog/principal_view.php');
				$main = build_main($article['introtext']);	
				echo $main;
			}
		}				
	}	
?>