<?php
require_once '../connect.php';
session_start();

$login = $_POST['login'];
$password = $_POST['password'];

$sql = $pdo->prepare("SELECT id, login FROM user WHERE login=:login AND password=:password");
$sql->execute(array('login' => $login, 'password' => $password));
$array = $sql->fetch(PDO::FETCH_ASSOC);

if ($array && $array["id"] > 0) {
    $_SESSION['login'] = $array["login"];
    header('Location:/adminClose.php');
} else {
    header('Location:/login.php');
}


