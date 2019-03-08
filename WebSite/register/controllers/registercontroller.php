<?php 
session_start() ;

$errors=array();

if (isset($_POST['register']))
	{
		$check = true;
		if (empty($_POST['username']) OR empty($_POST['password_1']) OR empty($_POST['email']) OR $_POST['password_1'] != $_POST['password_2']){
			if (empty($_POST['username'])) {
				array_push($errors, '<p class="error">Username is required</p>');
				$check = false;
			}
			if (empty($_POST['password_1'])) {
				array_push($errors, '<p class="error">Password is required</p>');
				$check = false;
			}
		    if (empty($_POST['email'])) {
		        array_push($errors, '<p class="error">Email is required</p>');
		        $check = false;
		    }
			if ($_POST['password_1'] != $_POST['password_2']){
				array_push($errors, '<p class="error">The two passwords do not match</p>');
				$check = false;
		}
	}
else 
	{
		if (!preg_match('/^[_a-z0-9-]*@[a-z0-9-]+(\.[a-z0-9-]+)$/', $_POST['email']))
		    {
		    	array_push($errors, '<p class="error">This email is not valid. Please re-enter.</p> ');
				$check = false;
				// exit();
		    }
		if (!preg_match('/^[A-Za-z0-9]{5,50}$/', $_POST['username']))
		    {
		    	array_push($errors, '<p class="error">This username is not valid. Please re-enter.</p> ');
				$check = false;
				// exit();
		    }
		if (!preg_match('/^[A-Za-z0-9]{5,50}$/', $_POST['password_1']))
		    {
		    	array_push($errors, '<p class="error">This password is not valid. Please re-enter.</p> ');
				$check = false;
				// exit();
		    }
	}
if ($check){
	include "../models/registermodel.php";
	$role = isset($_POST['partner']) ? $_POST['partner'] : 'normal-partner';
	get_user($_POST['username'],$_POST['password_1'], $_POST['password_2'],$_POST['email'],$role, $db);
	}
else{
		include "../views/register.php";
	}
}
else{
	include "../views/register.php";
}
 ?>