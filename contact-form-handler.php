


<?php
   $first_name = $_POST['firstName'];
   $last_name = $_POST['lastName'];
   $visitor_email = $_POST['email'];
   $message_type = $_POST['messageType'];
   $comments = $_POST['comments'];
   

   $email_from = 'jasminebittujb@gmail.com';
   $email_subject = "New Form Submisson";
   $email_body = "First Name: $first_name.\n".
	               "Last Name: $last_name.\n".
	                  "Email: $visitor_email.\n".
	                     "Message Type: $message_type.\n".
	                        "Message: $comments.\n";

    
   
   $to = "jasminebittujb@gmail.com";
   $headers = "From: $wmail_from \r\n";
   

   $headers .= "Reply-To: $visitor_email \r\n";

   mail($to,$email_subject,$email_body,$headers)
	   
   header("Location: contactme.html")
	  

?>