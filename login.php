<?php
$error="";
$username="";
include "connection.php";
include "libs.php";
if (check()) {
    header("Location: index.php");      
}
if (isset($_POST['login'])) {
    global $conn;
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='".$username."' AND password='".$pass."'");
    $check_email=mysqli_fetch_array($query);
    if (empty($check_email)) {
        $error = "Incorrect password or username!";
    } else {
        setcookie("username", "$username");  
        header("Location: index.php");       
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
    <section class="login">
        <div class="container">
            <div class="login_inner">
                <div class="login_img">
                    <img src="./img/clip-reading-of-books-1.png" alt="">
                </div>   
                <div class="login_form">
                    <h1>Welcom to <br> <span class="login_title_green">inno</span><span class="login_title_bold">Book</span></h1>
                    <p>An online library</p>
                    <div class="form">
                        <p class="error" style="color: red;"><?php echo $error ?></p>
                        <form method="POST" action="login.php">
                            <input class="form_username" type="text" placeholder="Username" name="username" value=<?php echo $username ?>>
                            <input class="form_password" type="password" placeholder="Password" name="pass">
                            <div class="btn">
                                 <input type="submit" class="sign_btn sign_left" value="Log In" name="login">
                                <a class="sign_btn" href="sign.php">Sign In</a>
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