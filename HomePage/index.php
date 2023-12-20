<?php
   session_start();
   require_once "./form/config.php";
   $sql = $pdo->prepare("SELECT * FROM contact ");
   $sql->execute(); 
   $res = $sql->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;800;900&display=swap" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>JDU Online</title>
</head>
<body>

    <!-- Start Header -->
    <?php if(!empty($_SESSION["user_login"])): ?>
    <header>
        <a href="#" class="logo">
          <img src="./icons/JDUONLINE(A).png">
        </a>
        <ul class="navbar">
          <li><a href="#home">Home</a></li>
          <li><a href="./pages/courses.php">Courses</a></li>
          <li><a href="./pages/about.php" >About</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>

      <div class="header-icons">
      <a href="./form/user_page.php"><i class='bx bxs-user-circle'></i></a>
          <a href="#"><i class='bx bxs-cart'></i></a>
          <select class="change-lang">
            <option value="jpn">JPN</option>
            <option value="en" selected>EN</option>
        </select>
          <div class="bx bx-menu" id="menu-icon"></div>
      </div>
        
    </header>
    <?php else:?>
      <header>
        <a href="#" class="logo">
          <img src="./icons/JDUONLINE(A).png">
        </a>
        <ul class="navbar">
          <li><a href="#home">Home</a></li>
          <li><a href="./pages/courses.php">Courses</a></li>
          <li><a href="./pages/about.php" >About</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="./form/LoginForm.php">Login</a></li>
        </ul>
        
        <div class="header-icons">
          <a href="#"><i class='bx bxs-cart'></i></a>
          <select class="change-lang">
            <option value="jpn">JPN</option>
            <option value="en" selected>EN</option>
        </select>
          <div class="bx bx-menu" id="menu-icon"></div>
      </div>
        
    </header>

    <?php endif ?>

    <!-- Start home section  -->
    <section class="home" id="home">
      <div class="home-text">
        <h6 class="lng-best">Best online learning platform</h6>
        <h1 class="lng-acc">Accesible Online Courses For All</h1>
        <p class="lng-own">Own your future learning new skills online</p>
        <div class="latter">
          <form action="">
            <input type="email" placeholder="Write your email" required>
            <input type="submit" value="Let's Start" required>
          </form>
        </div>
      </div>

      <div class="home-img">
        <img src="./img/adobe3.svg" alt="">
      </div>

    </section> 

    <!-- Start Container section  -->
    <section class="container">
      <div class="center-text">
        <h2 class="lng-who">Who it is suitable for:</h2>
      </div>

      <div class="container-box">
        <div class="container-img">
          <img src="./icons/plan.png" alt="">
        </div>
        <div class="container-text">
          <p class="lng-who_icon1">Who values their time</p>
        </div>
      </div>

      <div class="container-box">
        <div class="container-img">
          <img src="./icons/rocket-launch.png" alt="">
        </div>
        <div class="container-text">
          <p class="lng-who_icon2">Who are just beginning their career</p>
        </div>
      </div>

      <div class="container-box">
        <div class="container-img">
          <img src="./icons/users2.png" alt="">
        </div>
        <div class="container-text">
          <p class="lng-who_icon3">Who wants to learn current skills and programs</p>
        </div>
      </div>
    </section>

      <!-- Start Categories section  -->
    <section class="categories" id="categories">
      <div class="center-text">
        <h5 class="lng-curs">COURSES</h5>
        <h2 class="lng-pop_curs">Most popular courses in Uzbekistan</h2>
      </div>

      <div class="categories-content">
     
        <div class="box">
          <img src="./img/webd.webp" alt="">
          <h3>Web Designer</h3>
          <p>5 Courses</p>
        </div>
     
        <div class="box">
          <img src="./img/webdev.webp" alt="">
          <h3>Web Developer</h3>
          <p>5 Courses</p>
        </div>

        <div class="box">
          <img src="./img/datasc.webp" alt="">
          <h3>Data Scientist</h3>
          <p>5 Courses</p>
        </div>

        <div class="box">
          <img src="./img/java.webp" alt="">
          <h3>Java Developer</h3>
          <p>5 Courses</p>
        </div>

      </div>
      
      <div class="main-btn">
        <a href="./pages/courses.php" class="btn lng-all_curs_btn">All Courses</a>  
      </div>
    </section>


     <!-- Start Course section  -->
    <section class="courses" id="courses">
      <div class="center-text">
        <h5 class="lng-curs2">COURSES</h5>
        <h2 class="lng-exp_curs">Explore Popular Courses</h2>
      </div>

      <?php 
            $sql2 = $pdo->prepare("SELECT * FROM course");
            $sql2->execute(); 
            $res2 = $sql2->fetchAll(PDO::FETCH_OBJ); 
      ?>
      
      <div class="courses-content">
        <?php $i = 0; ?>
        <?php for($i = 7; $i < count($res2); $i++):?>
          <?php  ?>
        <div class="row">
          <a href="./pages/about_course.php?id=<?=$res2[$i]->id?>" class="a-color">
          <img src="./img/<?php echo $res2[$i]->filename?>" alt="">
          <div class="courses-text">
            <h5><?php echo $res2[$i]->price?></h5>
            <h3><?php echo $res2[$i]->title?></h3>
            <h6><?php echo $res2[$i]->time?></h6>
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
        <?php $i++; ?>
        <?php endfor ?>

      <div class="main-btn">
        <a href="./pages/courses.php" class="btn lng-more">More</a>  
      </div>
    </section>


    

    <!-- Teachers -->

    <!-- <div class="center-text">
      <h2 style="margin-top: 100px;">Our Mentor</h2>
    </div>

    <section class="teachers">

      <div class="profile-container">
        <div class="profile-card">
          <img src="/1C.webp" alt="image1" class="profile-icon" />
          <div class="profile-name">Kelly Seikma</div>
          <div class="profile-position">Web Designer</div>
          <div class="social-icons">
            <a href="" class="fb"><i class="fab fa-facebook-f"></i></a>
            <a href="" class="twitter"><i class="fab fa-twitter"></i></a>
            <a href="" class="insta"><i class="fab fa-instagram"></i></a>
            <a href="" class="yt"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
        <div class="profile-card">
          <img src="/1C.webp" alt="image2" class="profile-icon" />
          <div class="profile-name">Mabel Maxwell</div>
          <div class="profile-position">Web Developer</div>
          <div class="social-icons">
            <a href="" class="fb"><i class="fab fa-facebook-f"></i></a>
            <a href="" class="twitter"><i class="fab fa-twitter"></i></a>
            <a href="" class="insta"><i class="fab fa-instagram"></i></a>
            <a href="" class="yt"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
        <div class="profile-card">
          <img src="/1C.webp" alt="image3" class="profile-icon" />
          <div class="profile-name">Danny Liswell</div>
          <div class="profile-position">DevOps</div>
          <div class="social-icons">
            <a href="" class="fb"><i class="fab fa-facebook-f"></i></a>
            <a href="" class="twitter"><i class="fab fa-twitter"></i></a>
            <a href="" class="insta"><i class="fab fa-instagram"></i></a>
            <a href="" class="yt"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
        <div class="profile-card">
          <img src="/1C.webp" alt="image1" class="profile-icon" />
          <div class="profile-name">Kelly Seikma</div>
          <div class="profile-position">Web Designer</div>
          <div class="social-icons">
            <a href="" class="fb"><i class="fab fa-facebook-f"></i></a>
            <a href="" class="twitter"><i class="fab fa-twitter"></i></a>
            <a href="" class="insta"><i class="fab fa-instagram"></i></a>
            <a href="" class="yt"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
        <div class="profile-card">
          <img src="/1C.webp" alt="image1" class="profile-icon" />
          <div class="profile-name">Kelly Seikma</div>
          <div class="profile-position">Web Designer</div>
          <div class="social-icons">
            <a href="" class="fb"><i class="fab fa-facebook-f"></i></a>
            <a href="" class="twitter"><i class="fab fa-twitter"></i></a>
            <a href="" class="insta"><i class="fab fa-instagram"></i></a>
            <a href="" class="yt"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
        <div class="profile-card">
          <img src="/1C.webp" alt="image1" class="profile-icon" />
          <div class="profile-name">Kelly Seikma</div>
          <div class="profile-position">Web Designer</div>
          <div class="social-icons">
            <a href="" class="fb"><i class="fab fa-facebook-f"></i></a>
            <a href="" class="twitter"><i class="fab fa-twitter"></i></a>
            <a href="" class="insta"><i class="fab fa-instagram"></i></a>
            <a href="" class="yt"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
      </div> -->

    <section></section>  

    </section>

    <div class="center-text">
      <h5 class="lng-comment">COMMENTS</h5>
      <h2 class="lng-client_comment">CLIENTS SAYS</h2>
    </div>

    <section id="testimonals">


      <div class="testimonal-box-container">

        <div class="testimonal-box">
        
          <div class="box-top">
            
            <div class="profile">
              <div class="profile-img">
                <img src="./img/chuck.jpg" alt="">
              </div>

              <div class="name-user">
                <strong>Chuck Norris <span class="material-symbols-outlined" style="color: rgb(0, 166, 255);">
                  verified
                  </span></strong>
                <span>@chuck_norris</span>
              </div>

            </div>
        
            <div class="reviews">
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
            </div>
            
          </div>
          
          <div class="client-comment">
            <p>I have been working with JDU|ONLiNE for quite a long time - 3 years. During this time I have trained and got a job as a software tester at VTB Bank. I also continue to learn new things and strive to improve my skills. :))):</p>
          </div>

        </div>

      </div>


      <!-- 2 -->

      <div class="testimonal-box-container">

        <div class="testimonal-box">
        
          <div class="box-top">
            
            <div class="profile">
              <div class="profile-img">
                <img src="./img/jonhcena.jpg" alt="">
              </div>

              <div class="name-user">
                <strong>Jonh Cena <span class="material-symbols-outlined" style="color: rgb(0, 166, 255);">
                  verified
                  </span></strong>
                <span>@jonh_cena</span>
              </div>

            </div>
        
            <div class="reviews">
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
            </div>
            
          </div>
          
          <div class="client-comment">
            <p>The training was comfortable, somewhere easy, somewhere difficult, the lessons are small and all to the point. I am also very happy that the lessons are updated over time for everyone who has purchased the course.</p>
          </div>

        </div>

      </div>


            <!-- 3 -->
    
            
            <div class="testimonal-box-container">

              <div class="testimonal-box">
              
                <div class="box-top">
                  
                  <div class="profile">
                    <div class="profile-img">
                      <img src="./img/nicolascage.jpg" alt="">
                    </div>
      
                    <div class="name-user">
                      <strong>Nicolas Cage <span class="material-symbols-outlined" style="color: rgb(0, 166, 255);">
                        verified
                        </span></strong>
                      <span>@nicolas_cage</span>
                    </div>
      
                  </div>
              
                  <div class="reviews">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                  </div>
                  
                </div>
                
                <div class="client-comment">
                  <p>I liked the training at the school. Very convenient platform for training. I liked the fact that you can learn at your own pace without time constraints, because I work and courses with webinars at certain hours do not suit me.</p>
                </div>
      
              </div>
      
            </div>
      
                      <!-- 4 -->

                      <div class="testimonal-box-container">

                        <div class="testimonal-box">
                        
                          <div class="box-top">
                            
                            <div class="profile">
                              <div class="profile-img">
                                <img src="./img/walter.webp" alt="">
                              </div>
                
                              <div class="name-user">

                                <strong>Walter White <span class="material-symbols-outlined" style="color: rgb(0, 166, 255);">
                                  verified
                                  </span></strong>
                                <span>@walter_white</span>
                              </div>
                
                            </div>
                        
                            <div class="reviews">
                              <i class='bx bxs-star'></i>
                              <i class='bx bxs-star'></i>
                              <i class='bx bxs-star'></i>
                              <i class='bx bxs-star'></i>
                              <i class='bx bxs-star'></i>
                            </div>
                            
                          </div>
                          
                          <div class="client-comment">
                            <p>The course gave a lot of things that you can't get through books, free videos on the Internet - feedback from the mentor, a systematic approach to learning, a large independent project, a platform where you can ask the mentors or other participants for advice.</p>
                          </div>
                
                        </div>
                
                      </div>


                       <!-- 5 -->

                      <div class="testimonal-box-container">

                        <div class="testimonal-box">
                        
                          <div class="box-top">
                            
                            <div class="profile">
                              <div class="profile-img">
                                <img src="./img/colin.jpg" alt="">
                              </div>
                
                              <div class="name-user">
                                <strong>Colin Farrell <span class="material-symbols-outlined" style="color: rgb(0, 166, 255);">
                                  verified
                                  </span></strong>
                                <span>@colin_farrell</span>
                              </div>
                
                            </div>
                        
                            <div class="reviews">
                              <i class='bx bxs-star'></i>
                              <i class='bx bxs-star'></i>
                              <i class='bx bxs-star'></i>
                              <i class='bx bxs-star'></i>
                              <i class='bx bxs-star'></i>
                            </div>
                            
                          </div>
                          
                          <div class="client-comment">
                            <p>It was not easy to learn, but after each successfully completed practical work, I was confident that I would be able to complete the program, despite the fact that I had time constraints and these deadlines were burning at the end. Special thanks to the care service.</p>
                          </div>
                
                        </div>
                
                      </div>

                          <!-- 6 -->
                  

                      <div class="testimonal-box-container">

                        <div class="testimonal-box">
                        
                          <div class="box-top">
                            
                            <div class="profile">
                              <div class="profile-img">
                                <img src="./img/labeouf.jpg" alt="">
                              </div>
                
                              <div class="name-user">
                                <strong>Shia LaBeouf <span class="material-symbols-outlined" style="color: rgb(0, 166, 255);">
                                  verified
                                  </span></strong>
                                <span>@shia_laBeouf</span>
                              </div>
                
                            </div>
                        
                            <div class="reviews">
                              <i class='bx bxs-star'></i>
                              <i class='bx bxs-star'></i>
                              <i class='bx bxs-star'></i>
                              <i class='bx bxs-star'></i>
                              <i class='bx bxs-star'></i>
                            </div>
                            
                          </div>
                          
                          <div class="client-comment">
                            <p>I chose the course ux/ui designer - a very interesting profession. I did not expect that with the format of online learning you can get so much useful knowledge and so professionally master the programs (in my case it is Figma. Photoshop, After Effects). Thanks to the tutors.</p>
                          </div>
                
                        </div>
                
                      </div>
                
          </section>

   

     <!-- Start Cta section  -->
    <section class="cta">
      <div class="center-text">
        <h5 class="lng-trusted">TRUSTED BY</h5>
        <h2 class="lng-collaborat">We collaborate with leading companies</h2>
      </div>

      <div class="cta-content">
        <div class="cta-img">
          <img src="./clients/1.jpg" alt="">
        </div>

        <div class="cta-img">
          <img src="./clients/2.jpg" alt="">
        </div>

        <div class="cta-img">
          <img src="./clients/3.jpg" alt="">
        </div>

        <div class="cta-img">
          <img src="./clients/4.jpg" alt="">
        </div>

        <div class="cta-img">
          <img src="./clients/1.jpg" alt="">
        </div>

        <!-- <div class="cta-img">
          <img src="clients/06.png" alt="">
        </div> -->
      </div>

    </section>

    
    <!-- Start About section  -->
    
    <section class="about" id="about">
      <div class="about-img">
        <img src="./img/home3.png">
      </div>

      <div class="about-text">
        <h5 class="lng-join_us">Want to share your knowledge? Join us a Mentor</h5>
        <p class="lng-join_us_text">Teachers from around the world teach millions of students on JDU|ONLiNE. We give you the tools to teach what you love. We provide many resources for creating your first course. Our instructor dashboard and course syllabus pages will help you organize the process.</p>
        <h4 class="lng-best_cours">Best courses</h4>
        <h5 class="lng-top_rated">Top rated Instructors</h5>
        <a href="./pages/about.php" class="btn lng-read_more">Read more</a> 
      </div>
    </section>

    <!-- Start contact section  -->
    <section class="contact" id="contact">
      <div class="main-contact">
        <div class="contact-content">
          <img src="./icons/JDUONLINE(A).png">
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
          <li><a href="./form/user_page.php">Profile</a></li>
          <li><a href="./form/LoginForm.php">Login</a></li>
          <li><a href="./form/RegisterForm.php">Register</a></li>
          <li><a href="#">Instructor</a></li>
          <li><a href="#">Dashboard</a></li>
        </div>
        <div class="contact-content">
          <li><a href="https://www.google.com/maps?output=search&q=Tashkent,+Yunusobod+19+2&entry=mc&sa=X&ved=2ahUKEwjSrOGesKWAAxUaR_EDHWLOAv0Q0pQJegQICxAB"><?php echo $res['city']?></a></li>
          <li><a href="#"><?php echo $res['email']?></a></li>
          <li><a href="#"><?php echo $res['phone']?></a></li>
        </div>

      </div>  
    </section>

    <!--custom js link-->
    <script type="text/javascript" src="./js/script.js"></script>
    <script src="./js/lang.js"></script>

</body>
</html>