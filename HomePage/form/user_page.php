<?php
require_once './config.php';
session_start();
// $sql = $pdo->prepare("SELECT * FROM user_to_course");
// $sql->execute(); 
try {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$user_id=$_SESSION['user_id'];
$sql = "SELECT users.id, course.title AS course_name, course.price AS course_price, course.filename AS course_filename, user_to_course.id AS user_to_course_id
        FROM users
        JOIN user_to_course ON users.id = user_to_course.user_id
        JOIN course ON course.id = user_to_course.course_id
        WHERE users.id = {$user_id}";
$result = $pdo->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="./user_page/personal.css">
    <title>Admin Panel</title>
</head>

<body>
    
    <div style="text-align:center;">
    
    

    <?php if(!empty($_SESSION["user_login"])): ?>

        <?php //echo "Welcome " . $_SESSION['user_login'];?>
        <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3><span>JDU|ONLiNE</span></h3>
        </div>
        
        <div class="side-content">
     

            <div class="side-menu">
                <ul>
                    <li>
                       <a href="../index.php" class="active">
                        <span class="material-symbols-outlined">home</span>
                            <small>Home</small>
                        </a>
                    </li>
                    <li>
                       <a href="#">
                        <span class="material-symbols-outlined">
                            person
                            </span>
                            <small>Profile</small>
                        </a>
                    </li>
                    <li>
                       <a href="#">
                        <span class="material-symbols-outlined">
                            shopping_cart
                            </span>
                            <small>Orders</small>
                        </a>
                    </li>
                    <li>
                       <a href="./logout.php">
                       <span class="material-symbols-outlined">
                            logout
                            </span>
                            <small>Logout</small>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    
    <div class="main-content">
        
        <header>
            <div class="header-content">
                <label for="menu-toggle">
                    <span class="material-symbols-outlined">
                        menu
                        </span>
                </label>
                
                <div class="header-menu">
                    <!-- <label for="">
                        <span class="material-symbols-outlined">
                            search
                            </span>
                    </label>
                    
                    <div class="notify-icon">
                        <span class="material-symbols-outlined">
                            mail
                            </span>
                        <span class="notify">4</span>
                    </div> -->
                    
                    <div class="notify-icon">
                        <span class="material-symbols-outlined">
                            notifications
                            </span>
                        <span class="notify">3</span>
                    </div>
                    
                </div>
            </div>
        </header>
        
        
        <main>
            
            <div class="page-header">
                <h1>Dashboard</h1>
                <small>Home / Dashboard</small>
            </div>
            
            <div class="page-content">
            
                <div class="analytics">
                <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)):?>
                    <div class="card">
                        <div class="card-head">
                            <h2><?php echo $row['course_name']?>Web Developer</h2>
                            <span> <img src="../admin/uslugi/img/<?php echo $row['course_filename']?>" style="width: 60%; margin-left: 60px;"></span>
                        </div>
                        
                        <div class="card-progress">
                            <small><?php echo $row['course_price']?></small>
                        </div>
                        <a class="del_btn" href="./delete/delete.php?id=<?=$row['user_to_course_id']?>">Delete</a>
                    </div>
            
                <?php endwhile ?>
                    <!-- <div class="card">
                        <div class="card-head">
                            <h2>Java Developer</h2>
                            <span> <img src="./user_page/java.webp" style="width: 60%; margin-left: 60px;"></span>
                        </div>
                    
                        <div class="card-progress">
                            <small>Lorem, ipsum dolor.</small>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>C++ Developer</h2>
                            <span> <img src="./user_page/c++.webp" style="width: 60%; margin-left: 60px;"></span>
                        </div>
                    
                        <div class="card-progress">
                            <small>Lorem, ipsum dolor.</small>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>Android Developer</h2>
                            <span> <img src="./user_page/android.webp" style="width: 60%; margin-left: 60px;"></span>
                        </div>
                    
                        <div class="card-progress">
                            <small>Lorem, ipsum dolor.</small>
                        </div>
                    </div> -->

                </div>


            
            </div>
            
        </main>
        
    </div>
        <?php else :
        echo '<h2>Are you Hacker</h2>';
        echo '<a href="./logout.php">To Main</a>';
        
        ?>
        <?php endif ?>
    </div>




            <script src="./loginform.js"></script>
</body>

</html>
