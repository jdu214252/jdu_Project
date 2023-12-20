<?php
session_start();
require_once '../form/config.php';
$sql = $pdo->prepare("SELECT * FROM course WHERE id=:id");
$sql->bindParam('id',$_GET['id']); 
$sql->execute();
$res = $sql->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="courses.css"> -->
    <link rel="stylesheet" href="/css/about_courses.css">
    <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;800;900&display=swap" rel="stylesheet"> -->
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">
    
    <title>JDU Online</title>
</head>
<body>

    <!-- Start Header -->
    <?php if(!empty($_SESSION["user_login"])): ?>
    <header>
        <a href="../index.php" class="logo">
          <img src="../icons/JDUONLINE(A).png">
        </a>
        <ul class="navbar">
          <li><a href="../index.php">Home</a></li>
          <li><a href="./courses.php">Courses</a></li>
          <li><a href="./about.php" >About</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        
        <div class="header-icons">
          <a href="../form/user_page.php"><i class='bx bxs-user-circle'></i></a>
          <a href="#"><i class='bx bxs-cart'></i></a>
          <div class="bx bx-menu" id="menu-icon"></div>
      </div>
        
    </header>
    <?php else :?>
      <header>
        <a href="../index.php" class="logo">
          <img src="../icons/JDUONLINE(A).png">
        </a>
        <ul class="navbar">
          <li><a href="../index.php">Home</a></li>
          <li><a href="./courses.php">Courses</a></li>
          <li><a href="./about.php" >About</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="../form/LoginForm.php">Login</a></li>
        </ul>
        
        <div class="header-icons">
          
          <a href="#"><i class='bx bxs-cart'></i></a>
          <div class="bx bx-menu" id="menu-icon"></div>
      </div>
        
    </header>

    <?php endif ?>



     <div class="center-text">
      <h2><?php echo $res->title?></h2>
    </div>

        <section class="about">
            <div class="about-image">
                <img src="/img/<?php echo $res->filename?>" alt="">
            </div>
            <div class="about-content">
                <h1><?php echo $res->title?></h1>
                <p> 
                  <?php echo $res->description?>
                </p>
                <h2><?php echo $res->price?></h2>

                <?php if(!empty($_SESSION["user_login"])): ?>
                <a href="../admin/buy/buy.php?id=<?=$res->id?>" class="read-more">Buy</a>
                <?php else :?>
                  <a href="../form/LoginForm.php" class="read-more">Buy</a>
                <?php endif ?>

            </div>
        </section>   


    <!-- Start contact section  -->
    <section class="contact" id="contact">
      <div class="main-contact">
        <div class="contact-content">
          <img src="/icons/JDUONLINE(A).png">
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Instagram</a></li>
          <li><a href="#">Twitter</a></li>
        </div>

        <div class="contact-content">
          <li><a href="#home">Home</a></li>
          <li><a href="#courses">Courses</a></li>
          <li><a href= "#about" >About</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#">Login</a></li>
        </div>

        <div class="contact-content">
          <li><a href="#">Profile</a></li>
          <li><a href="#">Login</a></li>
          <li><a href="#">Register</a></li>
          <li><a href="#">Instructor</a></li>
          <li><a href="#">Dashboard</a></li>
        </div>

        <?php
          $sql1 = $pdo->prepare("SELECT * FROM contact ");
          $sql1->execute(); 
          $res1 = $sql1->fetch(PDO::FETCH_ASSOC);
        ?>
        <div class="contact-content">
          <li><a href="#"><?php echo $res1['city']?></a></li>
          <li><a href="#"><?php echo $res1['email']?></a></li>
          <li><a href="#"><?php echo $res1['phone']?></a></li>
        </div>

      </div>  
    </section>

    <!--custom js link-->
    <script type="text/javascript" src="/js/script.js"></script>

</body>
</html>