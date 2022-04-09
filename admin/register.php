<?php 
    include('./config/db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-5.15.4-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,300;1,500&display=swap" rel="stylesheet">
    <title>Register Admin</title>
</head>
<body>
<div class="container">
        <div class="form-login-wrapper">
            <form action="submit_register.php" method="post">
                <div class="login-form">
                    <div class="login-background">
                        <span class="">Wellcome!</span> 
                        <p>Register to continue</p>                       
                    </div>
                    <div class="login-form-content">
                        <h1>Register</h1>
                        <?php 
                            if(!empty($_SESSION['password'])){
                                    echo '<div class="alert error">
                                 <p>Wrong or incorrect password!</p>
                                  </div>';
                                }
                            elseif(!empty($_SESSION['email'])){
                                    echo '<div class="alert error">
                                         <p>Email or Username already exists!</p>
                                          </div>';
                                        }
                                session_destroy();
                        ?>
                        <div class="login-form-input">
                        <input type="text" class="form-input" placeholder="username: " required="" name="username"/>
                        <input type="email" class="form-input" placeholder="email: " required="" name="email"/>
                        <input type="password" class="form-input" placeholder="password: " required="" name="password"/>
                        <input type="password" class="form-input" placeholder="repeat password: " required="" name="repassword"/>
                        </div>
                        <div class="login-form-btn">
                        <button class ="form-btn-login" name="btnregister" type="submit" required="">Continue</button>
                        <span>Or if you already have an account and want to go <a href="login.php">Back</a></span>
                      </div>
                        <div class="login-form-social">
                            <a class ="form-btn-login twitter">
                                <div  class ="login-form-social-container">
                                    <i class="form-btn-icon fab fa-twitter"></i>
                                    <span>Register with Twitter</span>
                                </div>
                            </a>
                            <a class ="form-btn-login facebook">
                            <div class ="login-form-social-container">
                                <i class=" form-btn-icon fab fa-facebook-f"></i>
                                    <span>Register with Facebook</span>
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