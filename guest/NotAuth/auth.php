<?php
session_start();
require_once "../../database/Users.php";

$login = $_POST['login'];
$password = $_POST['password'];

if (empty($login) && empty($password)) {
    $_SESSION['message'] = "Введите пароль и логин";
    header("Location: form-auth.php");
} 
if (empty($login)) {
    $_SESSION['message'] = "Введите логин";
    header("Location: form-auth.php");
} 
if (empty($password)) {
    $_SESSION['message'] = "Введите пароль";
    header("Location: form-auth.php");
}
foreach($USERS as $key => $user){
    $logintrue = $login == $user['login'];
    $passwordtrue = $password == $user['password'];
    if ($logintrue && $passwordtrue) {
        $_SESSION['id'] = $key;
        if(empty($user['lang']))
        {
            header("Location: ../isAuth/checkLanguage.php");
        }
        else{
            $_SESSION['lang'] = $user['lang'];
            header("Location: ../../");
        }
    } else{ 
        if ($logintrue && !$passwordtrue) {
        $_SESSION['inputLogin'] = $_POST['login'];
        $_SESSION['message'] = "Вы ввели неверный пароль";
        header("Location: form-auth.php");
        }
        else if (!$logintrue && !$passwordtrue) {
            $_SESSION['message'] = "Пользователя не существует";
            header("Location: form-auth.php");
        }
    }
}

