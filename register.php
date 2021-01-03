<?php

require_once "config.php";
$stmt="";
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    // check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt){
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            //set the value of param
            $param_username = trim($_POST['username']);

            //try to execute the statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username already taken";
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "something went wrong";
            }
        }
    }
    // mysqli_stmt_close($stmt);

//check for password

if(empty(trim($_POST['password']))){
    $password_err = "password cannot be empty";
}
elseif(strlen(trim($_POST['password']))  < 5 ){
    $password_err = "password cannot be eless then 5 character";
}
else{
    $password =  trim($_POST['password']);
}

//check for confirm password

if(trim($_POST['password']) != trim($_POST['confirm_password'])){
    $password_err = "password should match";
}

//if there is no error go ahed and insert
if(empty($username_err) && empty($passworde_err) && empty($confirm_password_err)){
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    if($stmt){
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        //try to execute the query
        if(mysqli_stmt_execute($stmt)){
            header("location: log.php");
        }
        else{
            echo "Something went wrong";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}
?>



<!DOCTYPE html>
<html>

<head>
    <title>Register form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
        <a class="cta" href="log.php"><button>Login</button></a>
    </header>

    <img class="wave" src="img/wave.png">
    <div class="container">
        <div class="img">
            <img src="img/bg1.svg">
        </div>
        <div class="login-content">
            <form action="" method= "POST">
                <img src="img/avatar.svg">
                <h2 class="title">Welcome Register here</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Username</h5>
                        <input type="text" name= "username" class="input">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" name ="password"class="input">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Confirm Password</h5>
                        <input type="password" name ="confirm_password" class="input">
                    </div>
                </div>
                <a href="log.php">Already have Account?</a>
                <!-- <a class="cta" href="log.php"><button>Login</button></a> -->
                <input type="submit" class="btn" value="Register here">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>̥