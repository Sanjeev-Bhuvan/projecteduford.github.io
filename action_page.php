<?php
$firstname=$_post['firstname'];
$lastname=$_post['lastname']
$visitor_email=$_post['email'];
$subject=$_post['subject'];
$email_from='info@';
$email_subject='New Form Submission';
$email_body="User First Name:$firstname.\n".
            "User Last Name:$lastname.\n".
            "User Email:$visitor_email.\n".
            "Subject:$subject.\n";

$to ='sanjeevbhuvan04@gmail.com';
$headers = "From:$email_from \r\n";
$headers .="Reply-To:$visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers)
header("Location: contact.html");
?>
            
