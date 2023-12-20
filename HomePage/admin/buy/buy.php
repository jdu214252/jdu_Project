<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once '../../form/config.php';
$course_id=$_GET['id'];
echo $course_id;
$user_id=$_SESSION['user_id'];
echo $user_id;
try {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$userId = $_SESSION['user_id'];

$sql = $pdo->prepare("INSERT INTO user_to_course (user_id, course_id) VALUES (:user_id, :course_id)");
$sql->bindParam(':user_id', $userId);
$sql->bindParam(':course_id', $course_id);
$sql->execute();
// $sql="INSERT INTO user_to_course SET user_id=:id, course_id=:id";
// $query=$pdo->prepare($sql);
// $query->execute(["user_id"=>$user_id, "course_id"=>$course_id]);
header('location:../../form/user_page.php');