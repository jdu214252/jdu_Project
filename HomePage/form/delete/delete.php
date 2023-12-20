<?php
require_once '../config.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql = $pdo->prepare("DELETE FROM user_to_course WHERE id = :id");
    $sql->bindParam(':id', $id);
    $sql->execute();
    header('location:../user_page.php');
}