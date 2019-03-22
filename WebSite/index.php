<?php 

include 'helper/helper.php';

 function Loadlibs($class)
  {
  	include 'libs/'. $class . '.php';
  } 
  spl_autoload_register('Loadlibs');

   
    new Route();



  
    function dd($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

 ?>