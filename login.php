<?php

session_start();

include_once 'function.php';
	
	$user = new User();

if ($user->get_session()) {	

//Set default location to home.php
		header("location:home.php");
}
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

			$login = $user->check_logins($POST['emailusername'], $POST['password']);
				if ($login)	{
					//Login successfully
					//change location login.php
					
					header("location:login.php");
				
				} else {

						//Login failed
						$msg = 'Username / password Wrong! Please Try again';
				}
}

?>

//--------------------------------------------------------------------//
//HTML Login Form.

<form methos="POST" action="" name="login">

Email or Username
<input type="text" name="emailusername"/>
Password
<input type="password" name="password"/>
<input type="submit" value="Login"/>
</form>

