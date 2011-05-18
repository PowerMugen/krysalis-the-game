<?php

$hostname = $connexion['hostname'];
$username = $connexion['username'];
$password = $connexion['password'];
$dbname = $connexion['dbname'];

//connexion to database
function connexionDb($hostname, $username, $password, $dbname) {

	mysql_connect($hostname, $username, $password);

	@mysql_select_db($dbname) or die( "Unable to select database");
	
}

//close connexion
function closeDb(){
	
	mysql_close();	
		
}

//create a new class for user
class user {
	private $user_id, $user_mail_login, $user_password;
}

//get the user from db
function getUser($colName, $param, $hostname, $username, $password, $dbname)
{

	//connexion to database
	connexionDb($hostname, $username, $password, $dbname);
	
	//get user with colname and param
	$query = "SELECT * FROM users WHERE " . $colName . "=". $param;
	
	$result = mysql_query($query);
	
	return mysql_fetch_object($result, 'user');
	
	closeDb();
	
}

?>