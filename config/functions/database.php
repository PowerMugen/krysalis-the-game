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


?>