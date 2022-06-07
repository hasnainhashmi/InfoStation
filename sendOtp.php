<?php
session_start();
$data = false;
if($_SERVER['REQUEST_METHOD'] == 'GET')
{

$recemail = $_GET['email'];
$to = "$recemail";

$subject = "One Time Code";
    // $action = "Here are the credentials to use";

    $code = random_int(100000, 999999);

    $_SESSION['otp'] = $code;
    
    
 






// $message = "
// <html>
// <head>
// <title>You are Registered</title>
// </head>
// <body style='color:black;'>
// <p style='font-weight:bold;'>Code :</p>
// <p style='font-weight:bold;'>".$code."</p>

// </body>
// </html>
// ";

$message = "Code = ".$code;

// Always set content-type when sending HTML email
// $headers = "MIME-Version: 1.0" . "\r\n";
// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers = 'From: <hasnainhashmi049@gmail.com>' . "\r\n";
// $headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
}

echo json_encode($data);

?>