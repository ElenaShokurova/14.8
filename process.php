<?php

$username = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;

// зададим книгу паролей
$users = [
    'admin' => ['id' => 'admin', 'password' => 'e10adc3949ba59abbe56e057f20f883e'], //123456
    'Elena' => ['id' => 'Elena', 'password' => '5ffd0a9623e6786fe50890023af2ca4e'], //522114

];

if (null !== $username || null !== $password) {

    // Если пароль из базы совпадает с паролем из формы
    if (md5($password) === $users['admin']['password']) {

        // Стартуем сессию:
        session_start();

        // Пишем в сессию информацию о том, что мы авторизовались:
        $_SESSION['auth'] = true;

        // Пишем в сессию логин и id пользователя
        $_SESSION['id'] = $users['admin']['id'];
        $_SESSION['login'] = $username;
    }


    if (md5($password) === $users['Elena']['password']) {
        // Стартуем сессию:
        session_start();

        // Пишем в сессию информацию о том, что мы авторизовались:
        $_SESSION['auth'] = true;

        // Пишем в сессию логин и id пользователя
        $_SESSION['id'] = $users['Elena']['id'];
        $_SESSION['login'] = $username;

    } else {

        echo 'Такого пользователя не существует <a href="reg.php">Зарегистрируйтесь</a>';
    }
}


$auth = $_SESSION['auth'] ?? null;

// если авторизованы
if (!$auth) {
    return false;
}else{
    header("Location: index.php")
        ?>
<?php }