<?php
    session_start();
   require_once "../form/config.php";
   $name = $_POST["login"];
   $password = $_POST["password"];
   $sql = $pdo->prepare("SELECT id, login  FROM admins WHERE login=:login AND password=:password");
   $sql->execute(array('login' => $name, 'password' => $password));
   $array = $sql->fetch(PDO::FETCH_ASSOC);
   print_r($array);
   if($array["id"]>0){
        $_SESSION['admin_login']=$array["login"];
        header('location:./admin_page.php');
   }
   else{
        
     echo "Неверное имя пользователя или пароль.<br>";
     echo '<a href="../form/logadmin.php">Go to Login</a>';
   }

?>
