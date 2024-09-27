<?php

$user = "root";
$password = "";
$host = "localhost";
$db = "test";
$dbh = 'mysql:host='.$host.';dbname='.$db.';charset=utf8mb4';
$pdo = new PDO($dbh, $user, $password);