<?php
// функция getUsersList() возвращает массив всех пользователей и хэшей их паролей;
function getUsersList()
{
    require_once 'process.php';
    return $users;

}
// var_dump(getUsersList());


// функция existsUser($login) проверяет, существует ли пользователь с указанным логином;
function existsUser($login)
{
    $users = getUsersList();
    if (array_key_exists($login, $users)) {
        return true;
    } else {
        return false;

    }
}
// var_dump(existsUser($login));

// функция checkPassword($login, $password) пусть возвращает true тогда, когда существует пользователь с указанным логином и введенный им пароль прошел проверку, иначе — false;
function checkPassword($login, $password)
{
    $users = getUsersList();
    if (!$users) {
        return false;
    }
    $userPass = $users[$login]['password'];
    if (!$userPass){
        return false;
    }
    $hashPass = md5($password);
    return $userPass === $hashPass;
}
// var_dump(checkPassword($login, $password));

// функция getCurrentUser() которая возвращает либо имя вошедшего на сайт пользователя, либо null.
function getCurrentUser()
{
    return $_SESSION['login'] ?? null;

}
?>