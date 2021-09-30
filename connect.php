<?php

$server = "Localhost";
$user = "ead";
$password = "123456";

$schema = "db_phazon";

$cn = new PDO("mysql:host=$server;dbname=$schema", $user, $password);

?>