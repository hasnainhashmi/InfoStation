<?php
    session_start();
    unset($_SESSION["id"]);
    // unset($_SESSION["logintype"]);
    header( "refresh:0;url=index.php" );
?>