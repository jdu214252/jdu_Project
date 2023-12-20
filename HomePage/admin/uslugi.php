<?php session_start();

require_once "../form/config.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../form/loginform.css">
    <link rel="stylesheet" href="./css/admin_panel.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@40,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/uslugi.css">
    <title>Courses Panel</title>
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
        <h1>Redaktirovanie uslug</h1>
        <?php if(!empty($_SESSION["admin_login"])): ?>

        <?php // echo "Welcome " . $_SESSION['admin_login'];?>
        <!-- <br>
        <a href="./admin_page.php">Back to Admin Page</a>
        <br>
        <a href="./logout.php">Выйти</a>
        <br>
        <br> -->
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
            <li class="item">
              <a href="./addCourses.php" class="link flex">
                <i class=""></i>
                <span class="material-symbols-outlined">
                add_box
                </span>
                Add Course
              </a>
            </li>
            <li class="item" style="background-color: #4070f4; border-radius: 8px;">
              <a href="./uslugi.php" class="link flex">
                <i class=""></i>
                <span class="material-symbols-outlined" >
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
            $sql=$pdo->prepare("SELECT * FROM course");
            $sql->execute();
            while($res=$sql->fetch(PDO::FETCH_OBJ)):?>
        
        <div class="form obj">
            <form action="./uslugi/uslugi.php/<?php echo $res->id?>" method="post" enctype="multipart/form-data"> 
                <?php echo $res->id ?><br>
                <label for="title">title</label>
                <input type="text" id="title" name="title" value="<?php echo $res->title ?>" required>
                <label for="description">description</label>
                <input type="text"  id="description" name="description" value="<?php echo $res->description ?>" required>
                <label for="price">price</label>
                <input type="text"  id="price" name="price" value="<?php echo $res->price ?>" required>
                <label for="time">time</label>
                <input type="text"  id="time" name="time" value="<?php echo $res->time ?>" required>
                <p>
                    <input type="file" name="im" value="<?php echo $res->filename ?>" required>
                </p>
                <input type="submit" name="submit" class="btn" value="Save">
            </form>

            <img class="imeg" src="./uslugi/img/<?php echo $res->filename?>" >
                <br>
                <br>
                <br>
            <a class="delete" href="./delete/delete.php?id=<?=$res->id?>">Delete</a>
        </div>
        
        <?php endwhile ?>
        
        <?php else :
        echo '<h2>Are you Hacker</h2>';
        echo '<a href="./logout.php">To Main</a>';
        
        ?>
        <?php endif ?>
    </div>
    <script src="./js/admin_panel.js"></script>
</body>

</html>
