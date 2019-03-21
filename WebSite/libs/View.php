<?php 
  
class View{
	public function render($name,$data,$noInclude = false)
	{
		extract($data);
		if($noInclude == true){
			include 'view/' . $name . '.php';
		}
		else {
			include 'view/header.php';
			include 'view/' . $name . '.php';
			include 'view/footer.php';
		}
	}

	public	function convertDateFormat($date){
 		//YYYY-MM-DD
 		$format = 'd/m/Y';

 		$date_format = DateTime::createFromFormat($format, $date);
		return $date_format->format('Y-m-d');
 	}
}  

 ?>