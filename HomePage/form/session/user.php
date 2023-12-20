<?php

session_start();
require_once "../config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $password = md5($_POST["password"]);

    $sql = $pdo->prepare("SELECT id, login FROM users WHERE login = :login AND password = :password");
    $sql->execute(array('login' => $login, 'password' => $password));
    $user = $sql->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Авторизация успешна
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["user_login"] = $user["login"];
        header("Location: ../user_page.php"); // Перенаправление на защищенную страницу
        exit();
    } else {
        // Неверные учетные данные
        echo "Неверное имя пользователя или пароль.<br>";
        echo '<a href="../LoginForm.php">Go to Login</a>';
    }
}
//    if($array["id"]>0){
//         $_SESSION['name']=$array["name"];
//         header('location:../user_page.php');
//    }"Location: ../../index.html"
//    else{
//         header('location:../LoginForm.php');
//    }

?>