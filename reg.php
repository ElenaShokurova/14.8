<?php
session_start();

$auth = $_SESSION['auth'] ?? null;

if(!$auth) { ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Регистрация</title>
</head>

<body>
    <main>
        <div class="login-box">
            <div class="login-box-title">Регистрация</div>
            <div class="login-box-note"><a href="login.php">Войдите</a>, если Вы уже регистрировались</div>
            <form action="process.php" method="post" class="login-form">
                <label for="login">Имя пользователя:</label>
                <input name="login" type="text" placeholder="" class="inpt" value="<?= (key_exists('login', $_REQUEST)) ? $_REQUEST['login'] : null ?>">
                <label for="password">Пароль:</label>
                <input name="password" type="password" placeholder="" class="inpt">
                <input name="register" type="hidden" value="1">
                <input name="submit" type="submit" value="Регистрация" class="btn">
                <input name="button" type="button" value="Отмена" onclick="location='/'" class="btn">
            </form>
        </div>
    </main>
</body>

</html>

<?php }

else header("location: index.php")

?>