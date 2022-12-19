<?php 
$error="";
$pass="";
$username="";
$name="";
$surname="";
include "connection.php";
include "libs.php";
if (check()) {
    header("Location: index.php");      
}
if (isset($_POST['register'])) {
    global $conn;
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $pass1 = $_POST['pass1'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];

    if (empty($username) || empty($surname)|| empty($name)|| empty($pass) || empty($pass1)) {
        $error = "One of fields are empty!";
    } else if ($pass != $pass1) {
        $error = "Passwords are not same!";
    }else {
        $query = mysqli_query($conn, "SELECT * FROM `users` WHERE `username` = '$username' LIMIT 1");
        $profile = mysqli_fetch_array($query);
        if (!empty($profile)) {
            $error = "Username already excists!";
        } else {
            $registration = mysqli_query($conn, "INSERT INTO `users` VALUES (NULL, '$name', '$surname', '$username', '$pass')");
            setcookie("username", "$username");  
            header("Location: index.php");  
        }
    }
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>JIHC library</title>
</head>
<body>
    <section class="sign">
        <div class="container">
            <div class="sign_inner">
                <div class="sign_img">
                    <img src="./img/clip-reading-of-books-1.png" alt="">
                </div>   
                <div class="sign_form">
                    <h1>Welcome to <br> <span class="sign_title_green">inno</span><span class="sign_title_bold">Book</span></h1>
                    <p>An online library </p>
                    <div class="form">
                        <p class="error" style="color: red;"><?php echo $error ?></p>
                        <form method="POST" action="sign.php">
                            <input class="form_name" type="text" placeholder="Name" name="name" value="<?php echo $name ?>">
                            <input class="form_surname" type="text" placeholder="Surname" name="surname" value="<?php echo $surname ?>">
                            <input class="form_username" type="text" placeholder="Username" name="username" value="<?php echo $username ?>">
                            <input class="form_password" type="password" placeholder="Password" name="pass1" value="<?php echo $pass1 ?>">
                            <input class="form_password" type="password" placeholder="Repeat password" name="pass" value="">
                            <div class="btn">                                
                                <input type="submit" class="sign_btn sign_left" value="Sign In" name="register">
                                <a class="login_btn login_right" href="login.php">Login In</a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <script src="js/main.js"></script>
</body>
</html>