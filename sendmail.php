<?php
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

$mailheader = "From: " .$name. " <" .$email. ">\r\n";

$recipient = "gteee27@gmail.com";

$subject = "New message from contact form";

if(mail($recipient, $subject, $message, $mailheader)){
    echo '
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
                <h1>Thank you for contacting me. I will get back to you as soon as possible.</h1>
                <p class="back">Go back: <a href="index.html">HOMEPAGE</a></p>
            </div>
        </body>
        </html>
    ';
} else {
    echo "Error sending email";
}
?>
