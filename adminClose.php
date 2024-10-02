<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Вход в админку</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div style="text-align: center">

    <?php if (!empty($_SESSION["login"])) : ?>

    <?php echo('Добро пожаловать ' . $_SESSION['login']); ?>

        <a href="/logout.php">Выйти</a>
    <?php  else:
        echo '<h2> Иди авторизуйся, хакер) </h2>';
        echo '<a href="login.php">Войти</a>';
    ?>

    <?php endif ?>
</div>
</body>
</html>
