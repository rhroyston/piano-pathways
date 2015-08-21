<?php
if (isset($_POST['send'])) {
    
    
    
    
  
     $to = 'rhroyston@gmail.com'; // Use your own email address
     $subject = 'Feedback from my site';  
     $message = 'Name: ' . $_POST['name'] . "\r\n\r\n";
     $message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
     $message .= 'Comments: ' . $_POST['comments'];
     
     $headers = "From: ron@stndip.com\r\n";
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if ($email) {
       $headers .= "\r\nReply-To: $email";
    }
     $headers .= 'Content-Type: text/plain; charset=utf-8';
     
     $success = mail($to, $subject, $message, $headers);
}
?>

<!DOCTYPE html>
<html lang="en">
    
<body>
<?php if (isset($success) && $success) { ?>
<h1>Thank You</h1>
Your message has been sent.
<?php } else { ?>
<h1>Oops!</h1>
Sorry, there was a problem sending your message.
<?php } ?>
</body>

</html>