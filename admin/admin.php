<?php
require_once '../connect.php';
session_start();

// Проверка на пустые данные
if (!empty($_POST['login']) && !empty($_POST['password'])) {
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);

    // Подготовленный SQL-запрос для защиты от SQL-инъекций
    $sql = $pdo->prepare("SELECT id, login FROM user WHERE login = :login AND password = :password");
    $sql->execute(['login' => $login, 'password' => $password]);

    // Получаем данные пользователя
    $user = $sql->fetch(PDO::FETCH_ASSOC);

    // Если пользователь найден
    if ($user) {
        $_SESSION['login'] = $user['login'];
        header('Location: /adminClose.php');
        exit(); // Прерывание выполнения после редиректа
    } else {
        header('Location: /login.php');
        exit(); // Прерывание выполнения после редиректа
    }
} else {
    // Возврат на страницу логина, если поля пустые
    header('Location: /login.php');
    exit();
}