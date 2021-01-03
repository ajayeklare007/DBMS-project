<?php
//this script will handle login
session_start();
//check if user already login
if(isset($_SESSION['username'])){
    header("location: welcome̥.php");
    exit;
}
require_once "config.php";
$username = $password = "";
$err= "";
// $param_username ="";

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password']))){
        $err = "Please enter username and Password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }
}
if(empty($err)){
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;

     //try to execute the statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1){
            mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
            if(mysqli_stmt_fetch($stmt)){
                if(password_verify($password, $hashed_password)){
                    //this menas password is correct
                    session_start();
                    $_SESSION["username"]= $username;
                    $_SESSION["id"] = $id;
                    $_SESSION["loggedin"] = true;
                    //redirect user to Welcome page
                    header("location: welcome.php");
                }
            }
        }
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Animated Login Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css1/nav.css">
    <link rel="stylesheet" type="text/css" href="css1/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <header class="nav_container">
        <nav>
            <ul class="nav__links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>
        <a class="cta" href="register.php"><button>Register</button></a>
    </header>

    <img class="wave" src="img1/wave.png">
    <div class="container">
        <div class="img">
            <img src="img1/bg1.svg">
        </div>
        <div class="login-content">
            <form action="" method ="post">
                <img src="img1/avatar1.svg">
                <h2 class="title">Welcome to TASC</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Username</h5>
                        <input type="text" name="username" class="input">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" name="password" class="input">
                    </div>
                </div>
                <a href="#">Forgot Password?</a>
                <input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js1/main.js"></script>
</body>

</html>