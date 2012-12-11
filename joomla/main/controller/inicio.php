<?php
	defined('_JEXEC') or die;

	function show_screen($content){

			while($article = @mysql_fetch_array($content, MYSQL_ASSOC)){
				if($article['title'] != NULL){
					if($article['title'] == 'Ofertas'){
						require_once('templates/hospedajeweb/main/view/inicio/ofertas_view.php');
						$offers .= build_offers($article['introtext']);
					}
					if($article['title'] == 'Principal'){
						require_once('templates/hospedajeweb/main/view/inicio/principal_view.php');
						$main = build_main($article['introtext']);	
					} else if($article['title'] != 'Ofertas' && $article['title'] != 'Principal'){
						require_once('templates/hospedajeweb/main/view/inicio/complemento_view.php');
						$complement .= build_complement($article);
					}
				} else{
					break;
				}
			}
			$plans_content = show_plans();
			echo $offers . $main . $plans_content . $complement;	
		
			
	}

	function show_plans(){
		require_once('templates/hospedajeweb/main/view/inicio/planes_view.php');
		$planArray = group_plans();
		$plans_content = build_plans($planArray);
		return $plans_content;	
	}
		
	function group_plans(){
		require_once('templates/hospedajeweb/main/model/inicio_model.php');
		$plans = get_plans('Planes Inicio');
		$count = 0;
		$cols = 0;
		$planArray = array();
		while($plan = @mysql_fetch_array($plans, MYSQL_ASSOC)){
			if($plan['title'] != NULL){
				if($count == 0 && $cols == 0){
					$title = $plan['title'];
				}
				if($title == $plan['title']){
					$planArray[$count][$cols] = $plan['introtext'];
				} else{
					$title = $plan['title'];
					$cols = 0;
					$count ++;	
				}
				if($cols == 0){
					$planArray[$count][0] = $plan['title'];
					$planArray[$count][1] = $plan['introtext'];
					$cols++;
				}
				$cols++;
			} else{
				break;
			}
		}
		return $planArray;
	}	
?>
