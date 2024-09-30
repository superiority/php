<?php require_once '../connect.php';

$login = $_POST['login'];
$password = $_POST['password'];

session_start();

$sql = $pdo->prepare("SELECT id FROM user WHERE login=:login AND password=:password");
$sql->execute(array('login' => $login, 'password' => $password));
$array=$sql->fetch(PDO::FETCH_ASSOC);

if($array["id" > 0]) {
    $_SESSION['login'] = $array["login"];
    header('Location:/adminClose.php');
} else {
    header('Location:/login.php');
}

//сегодня выходной, просто для коммита
//сегодня выходной, просто для коммита


