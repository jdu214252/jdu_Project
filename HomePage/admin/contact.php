<?php session_start();

require_once "../form/config.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./loginform.css">
    <link rel="stylesheet" href="./css/admin_panel.css">
    <link rel="stylesheet" href="./css/uslugi.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@40,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title>Admin Panel</title>
    <style>
        .form form{
            height: auto;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-around;
            flex-direction: column;
            margin-top: 20px;
        }
        .form form input{
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    
    <div style="text-align:center;">
        <h1>Redaktirovanie kontaktnix dannix</h1>
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
            <li class="item" style="background-color: #4070f4; border-radius: 8px;">
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
        
        <?php  
            $sql=$pdo->prepare("SELECT * FROM contact");
            $sql->execute();
            $res=$sql->fetch(PDO::FETCH_OBJ);
        ?>
        <?php echo "Welcome " . $_SESSION['admin_login'];?>
        <div class="form">
            <form action="./contact/contact.php" method="post">
                <input type="text" name="city" value="<?php echo $res->city ?>">
                <input type="text" name="phone" value="<?php echo $res->phone ?>">
                <input type="text" name="email" value="<?php echo $res->email ?>">
                <input type="submit" name="submit" value="Save">
            </form>

        

        </div>
        
        <?php else :
        echo '<h2>Are you Hacker</h2>';
        echo '<a href="./logout.php">To Main</a>';
        ?>
        <?php endif ?>
    </div>
    <script src="./js/admin_panel.js"></script>
</body>

</html>
