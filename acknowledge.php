<?php
include('Mail.php');
if (isset($_POST['send'])) {
    
$recipients = 'ron@stndip.com';

$headers['From']    = 'richard@example.com';
$headers['To']      = 'ron@stndip.com';
$headers['Subject'] = 'Test message';

$body = 'Test message';

$params['sendmail_path'] = '/usr/lib/sendmail';

// Create the mail object using the Mail::factory method
$mail_object =& Mail::factory('sendmail', $params);

$mail_object->send($recipients, $headers, $body);    
    
    

}
?>



