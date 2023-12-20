
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./loginform.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@40,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;800;900&display=swap" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

        <a href="/index.php"><span class="material-symbols-rounded close">
            close
        </a></span>
        <div class="form-box login">
            <h2>Login</h2>
            <form action="./session/user.php" method="post">
                <div class="input-box">
                <span class="icon"><span class="material-symbols-outlined">
                        person
                    </span></span>
                    <input id="login" type="text" name="login">
                    <label for="login">Login</label>
                </div>
                <div class="input-box">
                    <span class="icon"><span class="material-symbols-rounded">
                            lock
                        </span></span>

                    <input id="password" type="password" name="password" >
                    <label for="password">Password</label>
                </div>

                <div class="remeber-forgot">
                    <label for="check">
                        <input id="check" type="checkbox">
                        Remember me
                    </label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Don't have an account?
                        <a href="./RegisterForm.php" class="register-link">Register</a>
                    </p>
                </div>
            </form>
        </div>
        
    </div>
    <footer></footer>


        <script src="./loginform.js"></script>
</body>

<!-- </html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./loginform.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@40,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Login Form</title>
</head>

<body>
    <header>
        <h2 class="logo">JSX</h2>
        <div class="list">
            <a href="#">Home</a>
            <a href="#">About Us</a>
            <a href="#">Contact</a>
            <a href="#">Courses</a>
            <button class="btnLogin-popup">Login</button>
        </div>
    </header>

   

    <div class="wrapper">

        <span class="material-symbols-rounded close">
            close
        </span>
        <div class="form-box login">
            <h2>Вход в админ панель</h2>

            <form action="./session/user.php" method="post">
                <div class="input-box">
                    <span class="icon"><span class="material-symbols-outlined">
                        person
                    </span></span>

                    <input id="login" type="text" name="login" required>
                    <label for="login">Логин</label>
                </div>
                <div class="input-box">
                    <span class="icon"><span class="material-symbols-rounded">
                            lock
                        </span></span>

                    <input id="pass" type="password" name="password" required>
                    <label for="pass">Пароль</label>
                </div>

                <button type="submit" class="btn">Войти</button>
                <div class="login-register">
                    <p>Don't have an account?
                        <a href="./RegisterForm.php" class="register-link">Register</a>
                    </p>
                </div>
            </form>
        </div>
        
    </div>
    <footer></footer>


        <script src="./loginform.js"></script>
</body>

</html> -->