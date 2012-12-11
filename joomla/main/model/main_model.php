<?php
	defined('_JEXEC') or die;

	require_once('templates/hospedajeweb/main/model/db_conection.php');

	function get_content($section){
		$connect = db_connect();
		if($connect != FALSE){
			$query = 'SELECT hostw_content.title, hostw_content.introtext FROM hostw_content LEFT JOIN hostw_categories ON hostw_categories.id = hostw_content.catid WHERE hostw_content.state = "1" AND hostw_categories.title = "' . $section . '"';
			$result = mysql_query($query);
	   		return $result;	
		} else {
			return FALSE;
		}
	}
?>