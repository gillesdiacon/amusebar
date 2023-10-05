<?php

function dateToFrench($dateStr) {
    $english_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
    $french_days = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
    $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    $french_months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
    return str_replace($english_months, $french_months, str_replace($english_days, $french_days, $dateStr ) );
}

function changeParam($paramName, $default){
    $url = $_SERVER["REQUEST_URI"];
    
	$hasParam = false;
	$paramStr = "";
	$urlArray = explode("?",$url);
	$script = $urlArray[0];
	
	if(count($urlArray)>1){
		$paramArray = explode ("&",$urlArray[1]);
		
		foreach($paramArray as $param){
			if(substr($param,0,strlen($paramName)+1) == $paramName."="){
				$paramStr .= "&".$paramName."=" . $default;
				$hasParam = true;
			}else{
				$paramStr .= "&" . $param;
			}
		}
	}
	if(!$hasParam){
		$paramStr .= "&".$paramName."=" . $default;
	}
	return $script . "?" . substr($paramStr,1);
}

function getGETval($field){
	if(isset($_GET[$field])){
		return $_GET[$field];
	}else{
        return null;
    }
}

function getGETvalOrDefault($field,$default){
	$val = $default;
	if(isset($_GET[$field])){
		$val=$_GET[$field];
	}
	return $val;
}

?>
