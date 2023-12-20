</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/admin/admin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@40,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Login Form</title>
</head>

<body>

   

    <div class="wrapper">

        <span class="material-symbols-rounded close">
            close
        </span>
        <div class="form-box login">
            <h2>Login to admin panel</h2>

            <form action="../admin/admin.php" method="post">
                <div class="input-box">
                    <span class="icon"><span class="material-symbols-outlined">
                        person
                    </span></span>

                    <input id="login" type="text" name="login" required>
                    <label for="login">Login</label>
                </div>
                <div class="input-box">
                    <span class="icon"><span class="material-symbols-rounded">
                            lock
                        </span></span>

                    <input id="pass" type="password" name="password" required>
                    <label for="pass">Password</label>
                </div>

                <button type="submit" class="btn">Login</button>
            </form>
        </div>
        
    </div>
    <footer></footer>


        <script src="./loginform.js"></script>
</body>

</html>