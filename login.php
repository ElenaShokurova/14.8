<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Вход в SPA-салон "Лотос"</title>
</head>

<body>
    <main>
        <div class="login-box">
            <div class="login-box-title">Вход</div>
            <?php
            if (key_exists('error', $_REQUEST)) {
            ?>
                <div class="login-box-error">Неверный пароль. Попробуйте еще раз</div>
            <?php
            } else {
            ?>
                <div class="login-box-note">Вы здесь впервые? <a href="reg.php">Зарегистрируйтесь</a></div>
            <?php
            }
            ?>
            <form action="process.php" method="post" class="login-form">
                <label for="login">Имя пользователя:</label>
                <input name="login" type="text" placeholder="" class="inpt">
                <label for="password">Пароль:</label>
                <input name="password" type="password" placeholder="" class="inpt">
                <input name="submit" type="submit" value="Войти" class="btn">
                <input name="button" type="button" value="Отмена" onclick="location='/'" class="btn">
            </form>
        </div>
    </main>
</body>

</html>

<?php 


?> 