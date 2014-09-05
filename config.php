<?php 

//Need to change server, username, password and DBname
define('DB_SERVER', 'localhost')
define('DB_USERNAME', 'username')
define('DB_PASSWROD', 'password')
define('DB_DATABASE', 'database_to_user')

class DB_class

	{

	function __construct()
	{
		$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or 
			die(' connection error -> ' . mysql_error());
			mysql_select_db(DB_DATABASE, $connection) 
			or die('Database error->'. mysql_error());
	}

	}



 ?>