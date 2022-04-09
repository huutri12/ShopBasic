<?php

include('./config/db.php');
if (isset($_POST['btnRegister']) && $_POST["username"] !='' && $_POST["email"] !='' && $_POST["password"] !='' && $_POST["repassword"] !='' ){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $result = '';
    if ($password !=  $repassword){
        $_SESSION['password'] = 'password';
        exit(header('Location: register_user.php'));
    }
    $rsUser = "SELECT * FROM user WHERE username ='$username' LIMIT 1" ;
    $rsEmails = "SELECT * FROM user WHERE email ='$email' LIMIT 1" ;
    $resultUser = mysqli_query($conn, $rsUser);
    $resulEmails = mysqli_query($conn, $rsEmails);
    $count_email = mysqli_num_rows($resulEmails);
    $count_user = mysqli_num_rows($resultUser);
    if($count_email > 0 || $count_user > 0 ){
        $_SESSION['email'] = 'email';
        exit(header('Location: register_user.php'));
    }else{
        $query = "INSERT INTO user (username,email,password) VALUES ( '$username','$email', '$password')";
        $result = mysqli_query($conn, $query);
        if($result){
            header('Location: login_user.php');
        }
        else
        {
            echo "Error at adding user<br/>";
            header("refresh:5;url=login_user.php");
        }
    }
    }else{
        header('Location: register_user.php');
    }
?>