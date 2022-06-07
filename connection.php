<?php

    $hostname = "localhost";
    $username = "root"; 
    $password = "";
    $db = "infostation";

    $con = new mysqli($hostname, $username, $password,$db);

    if(!$con)
    {
        die("Connection to database failed!!!");
    }

?>

