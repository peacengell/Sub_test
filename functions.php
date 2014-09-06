<?php


include_once 'config_php';

class User 

{

	//Database connect
		public fucntion __construct(){

			//instanciating a new db class.

			$db =new DB_Class();
		}

//Registration process
public fucntion register_user($name, $username, $password, $email ) {

	//Creating password in md5
		$password = md5($password);

	//User validation process.
	//Check if user exist 
		$sql = mysql_query("SELECT uid from users WHERE username = '$username' or email = '$email'");

			$no_rows = mysql_num_rows($sql);
				if ($no_rows == 0) {

					// If user doesn't exist register the use
					// if while registering the user an error cause.
					//exit with mysql error.

					$result = mysql_query("INSERT INTO users(username, password, name, email) VALUES ('$username','$password', '$name', '$email') ") or die(mysql_error());
						return $result;
				} else 	{
					return FALSE;
						
				}

			}

					
//Login process
	
	public fucntion check_login($emailusername, $password )	{

	$password = md5($password);
		$result = mysql_query("SELECT uid from users WHERE email = '$emailusername' or username = '$emailusername' and password ='$password' ");
			$user_data = mysql_fetch_array($result);
				$no_rows = mysql_num_rows($result);
					if ($no_rows == 1) {
						$_SESSION['login'] = true;
							$_SESSION['uid'] = $user_data['uid'];
								return TRUE;
					} else {
						
							return FALSE;
					
					}

	}

					
//Getting Name

public funtion get_fullname($uid)	{
	$result = mysql_query("SELECT name FROM users WHERE uid=$uid");
		$user_data = mysql_fetch_array($result);
			echo $user_data['name'];

	}

//Getting Seesion.

public fucntion get_seesion() {

	$_SESSION['login']=FALSE;
						
		session_destroy();

		}


	}


?>