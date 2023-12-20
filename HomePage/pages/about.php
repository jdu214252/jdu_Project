<?php
   session_start();
   require_once "../form/config.php";
   $sql = $pdo->prepare("SELECT * FROM about ");
   $sql->execute(); 
   $res = $sql->fetch(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="courses.css"> -->
    <link rel="stylesheet" href="/css/about.css">
    <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;800;900&display=swap" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
          <li><a href="#about" >About</a></li>
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
          <li><a href="#about" >About</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="../form/LoginForm.php">Login</a></li>
        </ul>
        
        <div class="header-icons">
          
          <a href="#"><i class='bx bxs-cart'></i></a>
          <div class="bx bx-menu" id="menu-icon"></div>
      </div>
        
    </header>

    <?php endif ?>

<section class="about">
<div class="container-about">
    <div class="about-left">
        <img src="/admin/about/img/<?php echo $res['filename1']?>">
    </div>
    <?php //echo $res['filename1']?>
    <div class="container-about-right">
        <h1><?php echo $res['title']?></h1>
        <p><?php echo $res['description1']?></p>
        <div class="about-cards">
            <article class="about-card">
                <span class="about-icon" style="background-color: rgb(226, 113, 14)">
                    <img src="/img/video-library.svg">
                </span>
                    <h2>100+</h2>
                    <p>Courses</p>
            </article>

            <article class="about-card">
                <span class="about-icon" style="background-color: rgb(4, 178, 85);">
                    <img src="/img/user.svg">
                </span>
                    <h2>50,000+</h2>
                    <p>Users</p>
            </article>

            <article class="about-card">
                <span class="about-icon" style="background-color: rgb(220, 206, 5) ">
                    <img src="/img/award.svg">
                </span>
                    <h2>32</h2>
                    <p>Awards</p>
            </article>
            
        </div>
    </div>
    <p></p>
</div>
</section>

<section class="about-advantage"> 
  <div class="center-text">
    <h2><?php echo $res['title1']?></h2>
  </div>
  <br><br>
  <p>
    <?php echo $res['description2']?>
  </p>
</section>



<!-- Teachers -->

    <div class="center-text">
      <h2>Meet Our Mentors</h2>
    </div>

    <section class="teachers">

      <div class="profile-container">
        <div class="profile-card">
          <img src="/img/john.jpg" alt="image1" class="profile-icon" />
          <div class="profile-name">John Wick</div>
          <div class="profile-position">Web Designer</div>
          <div class="social-icons">
            <a href="" class="fb"><i class="fab fa-facebook-f"></i></a>
            <a href="" class="twitter"><i class="fab fa-twitter"></i></a>
            <a href="" class="insta"><i class="fab fa-instagram"></i></a>
            <a href="" class="yt"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
        <div class="profile-card">
          <img src="/img/AndrewTate.webp" alt="image2" class="profile-icon" />
          <div class="profile-name">Andrew Tate</div>
          <div class="profile-position">Web Developer</div>
          <div class="social-icons">
            <a href="" class="fb"><i class="fab fa-facebook-f"></i></a>
            <a href="" class="twitter"><i class="fab fa-twitter"></i></a>
            <a href="" class="insta"><i class="fab fa-instagram"></i></a>
            <a href="" class="yt"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
        <div class="profile-card">
          <img src="/img/vito.jpg" alt="image3" class="profile-icon" />
          <div class="profile-name">Vito Scaletta</div>
          <div class="profile-position">DevOps</div>
          <div class="social-icons">
            <a href="" class="fb"><i class="fab fa-facebook-f"></i></a>
            <a href="" class="twitter"><i class="fab fa-twitter"></i></a>
            <a href="" class="insta"><i class="fab fa-instagram"></i></a>
            <a href="" class="yt"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
        <div class="profile-card">
          <img src="/img/patrick.jpg" alt="image1" class="profile-icon" />
          <div class="profile-name">Patrick Bateman</div>
          <div class="profile-position">Test Engineer</div>
          <div class="social-icons">
            <a href="" class="fb"><i class="fab fa-facebook-f"></i></a>
            <a href="" class="twitter"><i class="fab fa-twitter"></i></a>
            <a href="" class="insta"><i class="fab fa-instagram"></i></a>
            <a href="" class="yt"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
        <div class="profile-card">
          <img src="/img/ryan.jpg" alt="image1" class="profile-icon" />
          <div class="profile-name">Ryan Gosling</div>
          <div class="profile-position">C++ Developer</div>
          <div class="social-icons">
            <a href="" class="fb"><i class="fab fa-facebook-f"></i></a>
            <a href="" class="twitter"><i class="fab fa-twitter"></i></a>
            <a href="" class="insta"><i class="fab fa-instagram"></i></a>
            <a href="" class="yt"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
        <div class="profile-card">
          <img src="/img/jake.jpg" alt="image1" class="profile-icon" />
          <div class="profile-name">Jake Gyllenhaal</div>
          <div class="profile-position">Fullstack developer</div>
          <div class="social-icons">
            <a href="" class="fb"><i class="fab fa-facebook-f"></i></a>
            <a href="" class="twitter"><i class="fab fa-twitter"></i></a>
            <a href="" class="insta"><i class="fab fa-instagram"></i></a>
            <a href="" class="yt"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
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