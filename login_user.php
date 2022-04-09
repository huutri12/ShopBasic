<?php
    ob_start();
    include('config/db.php'); 
    if(isset($_POST['btnlogin_user'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sqlLogin = "SELECT * FROM user WHERE username ='$username' AND password ='$password' AND level=0 LIMIT 1";
        $result = mysqli_query($conn,$sqlLogin);
        $count_result = mysqli_num_rows($result);
        if ($count_result == 0 ) {
            $_SESSION["check1"] = 'check1';
            exit(header('Location: login_user.php'));
        }
        else {
            unset($_SESSION["check1"]);
            $row = mysqli_fetch_row($result);
            if (count(array($row))){
                $_SESSION["login"] = $row;
                header('Location: index.php');
            }else{ 
                echo "Error at adding user<br/>";
                header("refresh:5;url=login_user.php");
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
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,300;1,500&display=swap" rel="stylesheet">
    <title>Login User</title>
</head>
<body>
<div class="container">
        <div class="form-login-wrapper">
            <form action="" method="post">
                <div class="login-form">
                    <div class="login-background">
                        <span class="">Wellcome!</span> 
                        <p>Login to continue</p>                       
                    </div>
                    <div class="login-form-content">
                        <h1>Login</h1>
                        <?php 
                            if(!empty($_SESSION['check1'])){
                                    echo '<div class="alertt errorr">
                                 <p>Wrong or incorrect password!</p>
                                  </div>';
                                }
                                unset($_SESSION["check1"]);
                            
                        ?>
                        <div class="login-form-input">
                            <input type="text" class="form-input" placeholder="Username" required="" name="username"/>
                            <input type="password" class="form-input" placeholder="Password" required="" name="password"/>
                        </div>
                        <div class="login-form-btn">
                            <button class ="form-btn-login" name="btnlogin_user" type="submit" required="">Continue</button>
                            <span>or if you don't have account <a href="register_user.php">Register</a></span>
                        </div>
                        <div class="login-form-social">
                            <a class ="form-btn-login twitter">
                                <div  class ="login-form-social-container">
                                    <i class="form-btn-icon fab fa-twitter"></i>
                                    <span>Sign In with Twitter</span>
                                </div>
                            </a>
                            <a class ="form-btn-login facebook">
                            <div class ="login-form-social-container">
                                <i class=" form-btn-icon fab fa-facebook-f"></i>
                                    <span>Sign In with Facebook</span>
                            </div>
                            </a>
                        </div>
                        </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>