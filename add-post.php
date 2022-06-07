<?php
session_start();

include("connection.php");

if(isset($_SESSION['id']))
{

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {


        
        if(empty($_POST['title']) || empty($_POST['description']) )
        {
            $error = "All Fields must be filled !";
        }
        else
        {

            $title=$_POST['title'];
            $description=$_POST['description'];
            $id = $_SESSION['id'];
            // $phone=$_POST['phone'];/
            // $pass=password_hash($_POST['pass'],PASSWORD_DEFAULT);

            $sql="INSERT INTO `infostation`.`post` (`title`, `description`,`user_id`) VALUES ('$title', '$description', '$id');";

            if(mysqli_query($con,$sql))
            {
                header( "refresh:0;url=view-posts.php" );
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
    <title>Add Post</title>
    <style>
    <?php include "css/style.css"?>
    </style>

</head>

<body style="display: flex;
    align-items: center;
    height: 100vh;">
    <div class="sign-up-container">
        <!-- <div class="header" style="text-align:center;">
            <h1 style="color:black;">SIGN UP</h1>
        </div> -->
        <form method="post" align="center">
            <!-- <div class="form-1"> -->

                <p style="color: red;">
                    <?php 
                if(isset($error)) //show error message if $error not null
                {
                    echo $error;
                }           
                ?></p>

                <input type="text" name="title" id="title" onkeyup="namev(this)" placeholder="Title"
                    autocomplete="off">
                <input type="text" name="description" id="description" onkeyup="namev(this)" placeholder="Enter description"
                    autocomplete="off">


       
                <button >Add</button>
            <!-- </div> -->


        </form>

    </div>
    <script>
    <?php include "js/main.js" ?>
    </script>
</body>

</html>

<?php }
else{

}






?>