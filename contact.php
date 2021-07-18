<?php
 $name = $_POST['name'];
 $visitor_email = $_POST['email'];
 $message = $_POST['message'];


 $email_from = "From:$visitor_email \n";
$email_subject = "New Form Submissions";


$email_body = "user Name :$name.\n".
               "User Email:$visitor_email.\n". 
               "User Message:$message.\n";




               $to ="Tafaratakaiza19@gmail.com";

               $headers = "From:$email_from \r\n";
               $headers.="Reply-To : $visitor_email \r\n";

               mail($to,$email_subject,$email_body,$headers);
               header("Location:index.html")

?>