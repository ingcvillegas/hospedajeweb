<?php
	defined('_JEXEC') or die;

	function build_plans($planArray){
		$plans_content = '<div id="plans_main">';
		$plans_content .= '<ul>';
		$count = 0;
		while($planArray[$count][0] != NULL){
			$plans_content .= '<li><a href="#">' . $planArray[$count][0] . '</a></li>';
			$count ++;
		}
		$plans_content .= '</ul>';
		foreach ($planArray AS $plans){
			$plans_content .= '<div id="' . $plans[0] . '">';
			$count = 1;
			while($plans[$count] != NULL){
				$plans_content .= '<div>' . $plans[$count] . '</div>';
				$count ++;
			}	
			$plans_content .= '</div>';
		}
		$plans_content .= '</div>';

		return $plans_content;
	}
?>

