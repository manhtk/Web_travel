<?php
if(!function_exists('convert_date_format')){
	function convert_date_format($date){
 		//YYYY-MM-DD
 		$format = 'd/m/Y';

 		$date_format = DateTime::createFromFormat($format, $date);
		return $date_format->format('Y-m-d');
 	}
}