<?php
require_once '../../form/config.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql = $pdo->prepare("DELETE FROM course WHERE id = :id");
    $sql->bindParam(':id', $id);
    $sql->execute();
    header('location:../uslugi.php');
}
