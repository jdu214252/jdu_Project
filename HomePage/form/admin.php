<?php session_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./loginform.css">
    <title>Admin Panel</title>
</head>

<body>
    
    <div style="text-align:center;">

    

    <?php if(!empty($_SESSION["user_login"])): ?>

        <?php echo "Welcome " . $_SESSION['user_login'];?>
        <br>
        <a href="./logout.php">Выйти</a>
        <br>
        <a href="../index.html">Home</a>
        <a href="#">Header</a>
        <a href="./admin/uslugi.php">Courses</a>
        <a href="./admin/about.php">About us</a>

        <?php else :
        echo '<h2>Are you Hacker</h2>';
        echo '<a href="./logout.php">To Main</a>';
        
        ?>


        <?php endif ?>
    </div>




            <script src="./loginform.js"></script>
</body>

</html>
