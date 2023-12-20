<?php session_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="./admin.css">
    <link rel="stylesheet" href=".//css/admin_panel.css">
    <title>Admin Panel</title>
</head>

<body>
    

    <?php if(!empty($_SESSION["admin_login"])): ?>

        <?php //echo "Welcome Admin" . $_SESSION['admin_login'];?>
        <br>
        <!-- <a href="./logout.php">Выйти</a>
        <br>
        <a href="./contact.php">Contact</a>
        <a href="./uslugi.php">Courses</a>
        <a href="./addCourses.php">Add Course</a>
        <a href="/admin/about.php">About us</a> -->
        <nav class="sidebar locked">
      <div class="logo_items flex">
        <span class="logo_name"><a class="jdu" href="./admin_page.php">JduOnlineAdmin </a> </span>
        <i class="bx bx-lock-alt" id="lock-icon" title="Unlock Sidebar"></i>
        <i class="bx bx-x" id="sidebar-close"></i>
      </div>
      <div class="menu_container">
        <div class="menu_items">
          <ul class="menu_item">
            <div class="menu_title flex">
              <span class="title">Admin</span>
              
              <span class="line"></span>
            </div>
            <li class="item">
              <a href="./contact.php" class="link flex">
                <i class=""></i>
                <span class="material-symbols-outlined">
                info
                </span>
                Change Contact 
              </a>
            </li>
            <li class="item">
              <a href="./addCourses.php" class="link flex">
                <i class=""></i>
                <span class="material-symbols-outlined">
                add_box
                </span>
                Add Course
              </a>
            </li>
            <li class="item">
              <a href="./uslugi.php" class="link flex">
                <i class=""></i>
                <span class="material-symbols-outlined">
                format_list_bulleted
                </span>
                Change Courses
              </a>
            </li>
          </ul>
          <ul class="menu_item">
            <li class="item">
              <a href="./about.php" class="link flex">
                <i class=""></i>
                <span class="material-symbols-outlined">
                app_registration
                </span>
                Change About
              </a>
            </li>
            <li class="item">
              <a href="./logout.php" class="link flex">
                <i class=" "></i>
                <span class="material-symbols-outlined logout">
                    logout
                </span>
                Logout
              </a>
            </li>
          </ul>
    </nav> 
    <h2><?php echo "Welcome " . $_SESSION['admin_login'];?></h2>
        <?php else :
        echo '<h2>Are you Hacker</h2>';
        echo '<a href="./logout.php">To Main</a>';
        
        ?>


        <?php endif ?>


        <script src="./js/admin_panel.js"></script>
<!-- 
            <script src="./loginform.js"></script> -->
</body>

</html>
