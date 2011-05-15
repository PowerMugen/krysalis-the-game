this is Sparta !
<br />

<?php

connexionDb($hostname, $username, $password, $dbname);

$query="SELECT * FROM test WHERE id=1";
$result=mysql_query($query);

var_dump($result);

closeDb();