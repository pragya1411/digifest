<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "manaligorwani18@gmail.com";
    $subject = "New Email Address for Mailing List";
    $headers = "From: $email\n";
    $message = "A visitor to your site has sent the following email address to be added to your mailing list."\n
    Email Address: $email\n
    Name: $name\n
    Comment: $message\n
    
    $user = "$email";
    $usersubject = "Thank You";
    $userheaders = "From: Udaipur Tourism\n";
    $usermessage = "Thank you for contacting us! We'll revert back as soon as possible.";
    mail($to,$subject,$message,$headers);
    mail($user,$usersubject,$usermessage,$userheaders);
    header('Location: ../thankyou.html');
?>