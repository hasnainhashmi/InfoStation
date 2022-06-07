<?php
session_start();
$otp = $_GET['otp'];
$data = false;
if($otp == $_SESSION['otp'])
{
    $data = true;
}
else{
    $data = false;
}

echo json_encode($data);





?>