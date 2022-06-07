<?php
session_start();
include("connection.php");

if(isset($_SESSION['id']))
{

    $id = $_SESSION['id'];
    //getting posts 
    $query="SELECT * FROM `infostation`.`post` WHERE `user_id`='$id';";
    
    $result = $con->query($query);
    
    $posts = Array(); //using array to store multiple rows (if found)          
    while($row = $result->fetch_assoc())
    {
        $posts[] = $row;
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

<body >

    <h1>Your posts :</h1>

    <?php
        for($i=0;$i<count($posts);$i++)
        {
            ?>
            <div class="post" style="    margin: 15px;
    padding: 10px;
    border: 1px solid black;">

                <h3> <?php echo $posts[$i]['title']; ?> </h3>
                  <h4>  <?php echo $posts[$i]['description']; ?> </h4>
                
            </div>
            <?php
        }



    ?>

    <!-- <div class="sign-up-container"> -->
        <!-- <div class="header" style="text-align:center;">
            <h1 style="color:black;">SIGN UP</h1>
        </div> -->


    <!-- </div> -->
    <script>
    <?php include "js/main.js" ?>
    </script>
</body>

</html>
    
    
    
    




