<?php  
$name=$_POST['name'];
$Visitor_email=$_POST['email'];
$message=$_POST['message'];



$email_from='edimmoses003@gmail.com';

$email_subject="New Form Submission";

$email_body="User Name: $name.\n".
             "User Email: $Visitor_email.\n".
              "User Message: $message.\n";



              $to= "edimmoses003@gmail.com";

              $headers="From: $email_from \r\n";

              $headers .="Reply-To: $Visitor_email\r\n";

              mail($to, $email_subject,$email_body,$headers);

              header("Location: Contact.html");
?>