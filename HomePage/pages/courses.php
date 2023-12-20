<?php
   session_start();
   require_once "../form/config.php";
   $sql = $pdo->prepare("SELECT * FROM course");
   $sql->execute(); 
   $res = $sql->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/courses.css">
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
          <li><a href="#">Courses</a></li>
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
          <li><a href="#">Courses</a></li>
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



      <!-- Start Categories section  -->
    <!-- <section class="categories" id="categories">
      <div class="center-text">
        <h2>All courses</h2>
      </div>
    </section> -->


     <!-- Start Course section  -->
    <section class="courses" id="courses">
      
        <div class="center-text">
            <h2>All courses</h2>
          </div>

      <div class="courses-content">
      <?php foreach($res as $lol):?>
        <div class="row">
          <a href="./about_course.php?id=<?=$lol->id?>" class="a-color">
          <img src="../admin/uslugi/img/<?php echo $lol->filename?>" alt="">
          <div class="courses-text">
            <h5><?php echo $lol->price?></h5>
            <h3><?php echo $lol->title?></h3>
            <h6><?php echo $lol->time?></h6>
            <div class="rating">
              <div class="star">
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
              </div>
              <div class="review">
                <p>{5 Reviews}</p>
              </div>
            </div>
          </div>
        </a>
        </div>
        <?php endforeach ?>

        <!-- <div class="row">
          <img src="/img/java.webp" alt="">
          <div class="courses-text">
            <h5>$20.00</h5>
            <h3>Java Developer</h3>
            <h6>05 hours 15 minut</h6>
            <div class="rating">
              <div class="star">
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
              </div>
              <div class="review">
                <p>{5 Reviews}</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <img src="/img/test.webp" alt="">
          <div class="courses-text">
            <h5>$20.00</h5>
            <h3>Test Engineer</h3>
            <h6>05 hours 15 minut</h6>
            <div class="rating">
              <div class="star">
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
              </div>
              <div class="review">
                <p>{5 Reviews}</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <img src="/img/c++.webp" alt="">
          <div class="courses-text">
            <h5>$20.00</h5>
            <h3>C++ Developer</h3>
            <h6>05 hours 15 minut</h6>
            <div class="rating">
              <div class="star">
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
              </div>
              <div class="review">
                <p>{5 Reviews}</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <img src="/img/datasc.webp" alt="">
          <div class="courses-text">
            <h5>$20.00</h5>
            <h3>Data Scientist</h3>
            <h6>05 hours 15 minut</h6>
            <div class="rating">
              <div class="star">
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
              </div>
              <div class="review">
                <p>{5 Reviews}</p>
              </div>
            </div>
          </div>
        </div>


        <div class="row">
            <img src="/img/fulls.webp" alt="">
            <div class="courses-text">
              <h5>$20.00</h5>
              <h3>Fullstack developer</h3>
              <h6>05 hours 15 minut</h6>
              <div class="rating">
                <div class="star">
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                </div>
                <div class="review">
                  <p>{5 Reviews}</p>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <img src="/img/cyber.webp" alt="">
            <div class="courses-text">
              <h5>$20.00</h5>
              <h3>Cybersecurity</h3>
              <h6>05 hours 15 minut</h6>
              <div class="rating">
                <div class="star">
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                </div>
                <div class="review">
                  <p>{5 Reviews}</p>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <img src="/img/frontend.webp" alt="">
            <div class="courses-text">
              <h5>$20.00</h5>
              <h3>Frontend Developer</h3>
              <h6>05 hours 15 minut</h6>
              <div class="rating">
                <div class="star">
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                </div>
                <div class="review">
                  <p>{5 Reviews}</p>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <img src="/img/android.webp" alt="">
            <div class="courses-text">
              <h5>$20.00</h5>
              <h3>Android Developer</h3>
              <h6>05 hours 15 minut</h6>
              <div class="rating">
                <div class="star">
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                </div>
                <div class="review">
                  <p>{5 Reviews}</p>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <img src="/img/ios.webp" alt="">
            <div class="courses-text">
              <h5>$20.00</h5>
              <h3>iOS Developer</h3>
              <h6>05 hours 15 minut</h6>
              <div class="rating">
                <div class="star">
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                </div>
                <div class="review">
                  <p>{5 Reviews}</p>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <img src="/img/bi.webp" alt="">
            <div class="courses-text">
              <h5>$20.00</h5>
              <h3>BI analyst</h3>
              <h6>05 hours 15 minut</h6>
              <div class="rating">
                <div class="star">
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                </div>
                <div class="review">
                  <p>{5 Reviews}</p>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <img src="/img/developer.webp" alt="">
            <div class="courses-text">
              <h5>$20.00</h5>
              <h3>Developer</h3>
              <h6>05 hours 15 minut</h6>
              <div class="rating">
                <div class="star">
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                </div>
                <div class="review">
                  <p>{5 Reviews}</p>
                </div>
              </div>
            </div>
          </div>



          <div class="row">
            <img src="/img/data_eng.webp" alt="">
            <div class="courses-text">
              <h5>$20.00</h5>
              <h3>Data Engineer</h3>
              <h6>05 hours 15 minut</h6>
              <div class="rating">
                <div class="star">
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                </div>
                <div class="review">
                  <p>{5 Reviews}</p>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <img src="/img/data_analyst.webp" alt="">
            <div class="courses-text">
              <h5>$20.00</h5>
              <h3>Data Analyst</h3>
              <h6>05 hours 15 minut</h6>
              <div class="rating">
                <div class="star">
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                </div>
                <div class="review">
                  <p>{5 Reviews}</p>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <img src="/img/machine.webp" alt="">
            <div class="courses-text">
              <h5>$20.00</h5>
              <h3>Machine Learning</h3>
              <h6>05 hours 15 minut</h6>
              <div class="rating">
                <div class="star">
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                </div>
                <div class="review">
                  <p>{5 Reviews}</p>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <img src="/img/devops.webp" alt="">
            <div class="courses-text">
              <h5>$20.00</h5>
              <h3>DevOps engineer PRO</h3>
              <h6>05 hours 15 minut</h6>
              <div class="rating">
                <div class="star">
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                </div>
                <div class="review">
                  <p>{5 Reviews}</p>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <img src="/img/php.webp" alt="">
            <div class="courses-text">
              <h5>$20.00</h5>
              <h3>PHP Developer</h3>
              <h6>05 hours 15 minut</h6>
              <div class="rating">
                <div class="star">
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                </div>
                <div class="review">
                  <p>{5 Reviews}</p>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <img src="/img/mob.webp" alt="">
            <div class="courses-text">
              <h5>$20.00</h5>
              <h3>Mobile Developer</h3>
              <h6>05 hours 15 minut</h6>
              <div class="rating">
                <div class="star">
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                </div>
                <div class="review">
                  <p>{5 Reviews}</p>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <img src="/img/arxitector.webp" alt="">
            <div class="courses-text">
              <h5>$20.00</h5>
              <h3>Software Architect</h3>
              <h6>05 hours 15 minut</h6>
              <div class="rating">
                <div class="star">
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                </div>
                <div class="review">
                  <p>{5 Reviews}</p>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <img src="/img/teamlead.webp" alt="">
            <div class="courses-text">
              <h5>$20.00</h5>
              <h3>TeamLead</h3>
              <h6>05 hours 15 minut</h6>
              <div class="rating">
                <div class="star">
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                  <a href="#"><i class='bx bxs-star'></i></a>
                </div>
                <div class="review">
                  <p>{5 Reviews}</p>
                </div>
              </div>
            </div>
          </div>
      </div> -->
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