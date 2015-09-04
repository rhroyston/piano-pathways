<?php
/*** begin our session ***/
session_start();

if(!isset($_SESSION['user_id']))
{
    $_SESSION['message'] = 'Error&#58; Please Log In';
    $_SESSION['loginpane'] = 'true';
    header("Location: http://thepianopathway-rhroyston.rhcloud.com/login");
    exit();
}
elseif(!isset( $_POST['announcement_title'], $_POST['announcement_hide_date']))
{
    $message = 'Error&#58; Please Enter Announcement Title and Expiration Date';
}
/*** check the announcement title is the correct length ***/
elseif (strlen( $_POST['announcement_title']) > 80 )
{
    $message = 'Error&#58; Incorrect Length for Announcement Title';
}
/*** check the announcement detail is the correct length ***/
elseif (strlen( $_POST['announcement_detail']) > 80)
{
    $message = 'Error&#58; Incorrect Length for Announcement Detail';
}

else
{
    /*** if we are here the data is valid and we can insert it into database ***/
    $announcement_title = filter_var($_POST['announcement_title'], FILTER_SANITIZE_STRING);
    $announcement_detail = ucfirst(filter_var($_POST['announcement_detail'], FILTER_SANITIZE_STRING));
    $announcement_hide_date = filter_var(date('Y-m-d H:i:s', strtotime($_POST['announcement_hide_date'])), FILTER_SANITIZE_STRING);
    
    /*** connect to database ***/
    /*** mysql hostname ***/
    $mysql_hostname = '127.8.99.130';

    /*** mysql username ***/
    $mysql_username = 'adminRqmldJy';

    /*** mysql password ***/
    $mysql_password = 'gQDlAVx3a66L';

    /*** database name ***/
    $mysql_dbname = 'thepianopathway';

    try
    {
        $dbh = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
        /*** $message = a message saying we have connected ***/

        /*** set the error mode to excptions ***/
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /*** prepare the insert ***/
        $stmt = $dbh->prepare("INSERT INTO announcements (announcement_title, announcement_detail, announcement_hide_date) VALUES (:announcement_title, :announcement_detail, :announcement_hide_date)");

        /*** bind the parameters ***/
        $stmt->bindParam(':announcement_title', $announcement_title, PDO::PARAM_STR);
        $stmt->bindParam(':announcement_detail', $announcement_detail, PDO::PARAM_STR);
        $stmt->bindParam(':announcement_hide_date', $announcement_hide_date, PDO::PARAM_STR);
        
        /*** execute the prepared statement ***/
        $stmt->execute();

        /*** unset the form token session variable ***/
        //unset( $_SESSION['form_token'] );

        /*** if all is done, say thanks ***/
        $message = 'Success&#58; New Announcement Added';
    }
    catch(Exception $e)
    {
        /*** check if the username already exists ***/
        //if( $e->getCode() == 23000)
        //{
        //    $message = 'Error&#58; Username already exists';
        //}
        //else
        //{
            /*** if we are here, something has gone wrong with the database ***/
            $message = 'Error&#58; We are unable to process your request. Please try again later"';
        //}
    }
}
// If there is a message, then pass it in session variable.

$_SESSION["message"] = $message;

// redirect back w message to login pane if successful and to register pane if not

header("Location: http://thepianopathway-rhroyston.rhcloud.com/admin");

exit();

?>

