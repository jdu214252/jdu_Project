<?php

$conn = mysqli_connect('localhost', 'root','root','course');

if(isset($_POST['submit'])){
    $login = mysqli_real_escape_string($conn, $_POST['login']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $select = " SELECT * FROM users WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $error[] = 'user already exist!';
    }else{
        
            $insert = "INSERT INTO users(login, email, password) VALUES ('$login', '$email', '$pass')";
            mysqli_query($conn, $insert);
            header('location:LoginForm.php');
            
    }
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./RegisterForm.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@40,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    
    <title>Login Form</title>
</head>

<body>
<header>
        <a href="#" class="logo">
          <img src="/icons/JDUONLINE(A).png">
        </a>
        <div class="navbar">
          <a href="/index.php">Home</a>
          <a href="/pages/courses.php">Courses</a>
          <a href= "/pages/about.php" >About</a>
          <a href="#contact">Contact</a>
          <a href="#">Login</a>
        </div>
        
        <div class="header-icons">
            <a href="#"><i class='bx bxs-user-circle'></i></a>
            <a href="#"><i class='bx bxs-heart-circle'></i></a>
            <a href="#"><i class='bx bxs-cart' ></i></a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
        
    </header>

    <div class="wrapper">
        <span class="material-symbols-rounded close">
            close
        </span>

        <!-- section 2 Registration -->
        
        <div class="form-box register">
            <h2>Registration</h2>

            <form action="" method="post">
                <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class= "error-msg">'.$error.'</span>';
                    }
                }
                ?>
                <div class="input-box">
                    <span class="icon"><span class="material-symbols-outlined">
                        person
                        </span></span>
                    <input id="login" name="login" type="text" required>
                    <label for="login">Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><span class="material-symbols-rounded">
                            mail
                        </span></span>
                    <input id="email" name="email" type="text" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><span class="material-symbols-rounded">
                            lock
                        </span></span>

                    <input id="pass" name="password" type="password" >
                    <label for="pass">Password</label>
                </div>
                <button type="submit" method='post' name="submit" class="btn">Register</button>
                <div class="login-register">
                    <p>Already have an account?
                        <a href="./LoginForm.php" class="login-link">Login</a>
                    </p>
                </div>
            </form>
        </div>
    </div>

        
</body>

</html>