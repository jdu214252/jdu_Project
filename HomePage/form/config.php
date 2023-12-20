<?php

$user = "root";
$password = "root";
$host = "localhost";
$db = "course";
$dbh = 'mysql:host='.$host.';dbname='.$db;
$pdo=new PDO($dbh, $user, $password);

?>