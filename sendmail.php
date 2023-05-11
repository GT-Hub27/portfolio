<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];



$mailheader = "From:" .$name. "<" .$email. ">\r\n";


$recipient = "gteee27@gmail.com";


mail($recipient, $message, $mailheader)
or die("Error!");

echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6119e771b9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>

<div class="thankyou-text">
       <h1>Thank you for contacting me and will get back to you</h1>
    <p class="back">Go back:<a href="index.html">HOMEPAGE</a></p>
</div>

</body>
</html>


';





?>