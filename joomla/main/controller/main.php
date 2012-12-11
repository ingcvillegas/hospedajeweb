<?php
	defined('_JEXEC') or die;

	function get_section($section){
		require_once('templates/hospedajeweb/main/model/main_model.php');
		$content = get_content($section);
		if($section == 'Inicio'){
			require_once('templates/hospedajeweb/main/controller/inicio.php');
			show_screen($content);
		} else if($section == 'Planes'){
			require_once('templates/hospedajeweb/main/controller/planes.php');
			show_screen($content);
		}else if($section == 'Acerca De'){
			require_once('templates/hospedajeweb/main/controller/acerca-de.php');
			show_screen($content);
		}else if($section == 'Soporte'){
			require_once('templates/hospedajeweb/main/controller/soporte.php');
			show_screen($content);
		}else if($section == 'Servicios'){
			require_once('templates/hospedajeweb/main/controller/servicios.php');
			show_screen($content);
		}else if($section == 'Blog'){
			require_once('templates/hospedajeweb/main/controller/blog.php');
			show_screen($content);
		} else{
			require_once('templates/hospedajeweb/main/controller/articulo.php');
			show_screen($content);
		}
	}
?>