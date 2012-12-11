<?php
	defined('_JEXEC') or die;
	
	function db_connect(){
		$host = "localhost";
		$user = "root";
		$password = "";
		$dbname = "hostw_eb";
		$connect = @mysql_connect ("localhost","root","");
		if($connect)
			mysql_select_db ($dbname, $connect);
		return $connect;
	}
?>