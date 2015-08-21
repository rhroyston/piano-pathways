<?php
// Include the Mail package
   require "Mail.php";

if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}
   
   
   
 
   // Identify the sender, recipient, mail subject, and body
   $sender    = "ron@stndip.com";
   $recipient = "ron@stndip.com";
   $subject   = "Test mail";
   $body      = "Hello from Piano Pathways";
 
   // Identify the mail server, username, password, and port
   $server   = "smtpout.secureserver.net";  
   $username = "ron@stndip.com";
   $password = "nic0tine";
 
   // Set up the mail headers
   $headers = array(
      "From"    => $sender,
      "To"      => $recipient,
      "Subject" => $subject
   );
 
   // Configure the mailer mechanism
   $smtp = Mail::factory("smtp",
      array(
        "host"     => $server,
        "username" => $username,
        "password" => $password,
        "auth"     => true,
      )
   );
 
   // Send the message
   $mail = $smtp->send($recipient, $headers, $body);
 
   if (PEAR::isError($mail)) {
      echo ($mail->getMessage());
   }
?>