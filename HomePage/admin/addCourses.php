<?php session_start();

require_once "../form/config.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../form/RegisterForm.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@40,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="./css/admin_panel.css">
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title>Login Form</title>
</head>

<body> 
<?php if(!empty($_SESSION["admin_login"])): ?>    
<nav class="sidebar locked">
      <div class="logo_items flex">
        <span class="logo_name"><a class="logic" href="./admin_page.php">JduOnlineAdmin </a> </span>
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
            <li class="item" style="background-color: #4070f4; border-radius: 8px;">
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

    <div class="wrapper"  style="height:700px">
        <div class="form-box register">
            <h2>Add Your Course</h2>

            <form action="./addCourse/addCourses.php" method="post" enctype="multipart/form-data">
                <div class="input-box">
                    <input id="login" name="title" type="text" required>
                    <label for="login">Title</label>
                </div>
                <div class="input-box">
                    <input id="description" name="description" type="text" required>
                    <label for="description">About</label>
                </div>
                <div class="input-box">
                    <input id="email" name="price" type="text" required>
                    <label for="email">Price</label>
                </div>
                <div class="input-box">
                    <input id="time" name="time" type="text" required>
                    <label for="time">Time</label>
                </div>
                <div class="input-box">
                    <input id="im" name="im" type="file" required >
                    <label for="im"></label>
                </div>
                <button type="submit" method='post' name="submit" class="btn">Save</button>
            </form>
        </div>
    </div>
    <?php else :
        echo '<h2>Are you Hacker</h2>';
        echo '<a href="./logout.php">To Main</a>';
        
        ?>
        <?php endif ?>

    <script src="./js/admin_panel.js"></script>
</body>
    
</html>