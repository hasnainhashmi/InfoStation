<?php
session_start();
include("connection.php");
// include("helpful.php");



if(isset($_SESSION['id']))
{
    header("location:index.php");
    die();
}






if($_SERVER['REQUEST_METHOD'] == "POST")
{
    if(empty($_POST['name']) || empty($_POST['password'])) //if user has left field(s) empty
    {
        $error = "You must Enter Username and Password !";   
    }
    else //if not empty
    {
        $name=$_POST['name'];
        $password=$_POST['password'];
        
        $sql="SELECT * FROM `infostation`.`user` WHERE `name` = '$name'";
        $result = $con->query($sql);
        $user_data = $result->fetch_assoc();        
        if(empty($user_data) || !(password_verify($password,$user_data['password']))) //if no user with given username found or if password is incorrect
        {
            $error = "Username or Password Incorrect !";
        }
        else //if found
        {
            $_SESSION['id'] = $user_data['id'];
            header("location:index.php");
            die();
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

    <title>Log in Form</title>

    <style>
        <?php include "css/style.css" ?>
    </style>
</head>

<body class="signin-body" style="flex-direction:column;height:auto;overflow:hidden;">
    <!-- <img src="assets/images/lifesavers_logo.jpg.jpg" > -->
    <div class="sign-in-container">
        <div class="header" style="text-align:center;">
            <h1>LOGIN</h1>
        </div>
        <form  method="post" align="center">
            <small style="color: red;">
            <?php 
                if(isset($error)) //show error message if $error not null
                {
                    echo $error;
                }           
            ?></small>
            <input type="text" name="name" id="name" placeholder="Enter Username" autocomplete="off">
            <input type="password" name="password" id="password" placeholder="Enter your password" autocomplete="off">


            <button style="margin-bottom: 30px;">Log in</button>
        </form>
        <div class="bottom" style="text-align:center;">
            <a href="signup.php">Don't have an account ?</a>
            <div class="space"></div>
        </div>
    </div>

</body>
</html>