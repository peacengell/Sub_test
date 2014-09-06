
<?php

//include the class files with include_once
include_once 'fucntions.php';
	
	$user =new User();
	

	//Checking for user logged in or not.

	if ($user->get_session()) {

			//Set defaults locations to home.php
		
			header("location:home.php");
	}

		if ($_SERVER["REQUEST_METHOD"] == "POST") {

				$register = $user->register_user($POST['name'], $_POST['username'], $_POST['password'], $_POST['email']);
				
					if ($register) {

						//If Registration success echo this message.
							echo 'Registration Successful <a href="login.php">Click Here</a> to lgin';
					} else	{
						//Registration Faild.

							echo 'Registration failed. Email or Username already exists: Please try to Login <a href="login.php">Click Here</a> to lgin' ;
	}


}



?>


//Html Code 

<form method="POST" action="register.php" name='reg'>
Full Name
	<input type="text" name="name"/>
		Username
			<input type="text" name="username"/>
				Password
					<input type="text" name="password"/>
		Email
			<input type="text" name="email"/>

	<input type="Submit" value="Register"/>
</form>