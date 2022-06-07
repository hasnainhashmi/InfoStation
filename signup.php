<?php
session_start();

include("connection.php");

// if(isset($_SESSION['id']))
// {
//     // if($_SESSION['logintype'] == "teacher")
//     // {
//     //     header("refresh:0;url=index.php");
//     //     die;
//     // }
//     // else if($_SESSION['logintype'] == "student")
//     // {
//     //     header("refresh:0;url=quiz.php");

//     // }

// }
if($_SERVER['REQUEST_METHOD'] == "POST")
{


    
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['pass']) )
    {
        $error = "All Fields must be filled !";
    }
    else
    {

        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $pass=password_hash($_POST['pass'],PASSWORD_DEFAULT);

        $sql="INSERT INTO `infostation`.`user` (`name`, `password`,`email`, `phone`) VALUES ('$name', '$pass', '$email', '$phone');";

        if(mysqli_query($con,$sql))
        {
            header( "refresh:0;url=signin.php" );
            die;
        }
        else
        {
            echo "error !";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Sign up Form</title>
    <style>
    <?php include "css/style.css"?>
    </style>

</head>

<body style="display: flex;
    align-items: center;
    height: 100vh;">
    <div class="sign-up-container">
        <div class="header" style="text-align:center;">
            <h1 style="color:black;">SIGN UP</h1>
        </div>
        <form method="post" align="center">
            <div class="form-1">

                <p style="color: red;">
                    <?php 
                if(isset($error)) //show error message if $error not null
                {
                    echo $error;
                }           
                ?></p>

                <input type="text" name="name" id="name" onkeyup="namev(this)" placeholder="Enter your full name"
                    autocomplete="off">
                <input type="email" name="email" id="email" onkeyup="namev(this)" placeholder="Enter your email"
                    autocomplete="off">


                <input type="tel" name="phone" id="phone" onkeyup="namev(this)" placeholder="Enter your phone"
                    autocomplete="off">


                <input type="password" name="pass" id="pass" onkeyup="namev(this)" placeholder="Create a password">

                <button type="button" onclick="openOtpForm()">Sign up</button>
            </div>
            <div class="form-2" style="display:none;">
                <p style="color: red;display:none">Wrong Code ! please use the one provided on your email</p>
                <input type="text" name="otp" id="otp" placeholder="Enter the code">
                <button type="button" onclick="checkOtp()">Submit</button>

            </div>


        </form>
        <div class="bottom" style="text-align:center;">
            <a href="signin.php">Already have an account?</a>
            <div class="space"></div>
        </div>
    </div>
    <script>
    <?php include "js/main.js" ?>
    </script>
</body>

</html>