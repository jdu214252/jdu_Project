<?php 
    $user = "root";
    $password = "root";
    $host = "localhost";
    $db = "testing";
    $dbh = 'mysql:host='.$host.';dbname='.$db;
    $pdo=new PDO($dbh, $user, $password);


    $city=$_POST["city"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $row="UPDATE contact SET city=:city, phone=:phone, email=:email";
    $query=$pdo->prepare($row);
    $query->execute(["city"=>$city, "phone"=>$phone, "email"=>$email]);
    echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=../contact.php">';
?>