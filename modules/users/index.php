<?php

$user = getUser('user_id', 2, $hostname, $username, $password, $dbname);
$user2 = getUser('social_pseudo', "'MugenAlpha'", $hostname, $username, $password, $dbname);
var_dump($user);
var_dump($user2);

?>