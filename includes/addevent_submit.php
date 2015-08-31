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
elseif(!isset( $_POST['event_title'], $_POST['pickertextbox']))
{
    $message = 'Error&#58; Please enter event title and time';
}
/*** check the event title is the correct length ***/
elseif (strlen( $_POST['event_title']) > 80 )
{
    $message = 'Error&#58; Incorrect Length for Event Title';
}
/*** check the event detail is the correct length ***/
elseif (strlen( $_POST['event_detail']) > 80)
{
    $message = 'Error&#58; Incorrect Length for Event Detail';
}
/*** check the event street is the correct length ***/
elseif (strlen( $_POST['event_street']) > 80)
{
    $message = 'Error&#58; Incorrect Length for Event Street';
}
/*** check the event city is the correct length ***/
elseif (strlen( $_POST['event_city']) > 100)
{
    $message = 'Error&#58; Incorrect Length for Event City';
}
/*** check the event state is the correct length ***/
elseif (strlen( $_POST['event_state']) > 20)
{
    $message = 'Error&#58; Incorrect Length for Event State';
}
/*** check the event zip is the correct length ***/
elseif (strlen( $_POST['event_zip']) > 20)
{
    $message = 'Error&#58; Incorrect Length for Event Zip';
}
/*** check the event title has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['event_title']) != true)
{
    /*** if there is no match ***/
    $message = "Error&#58; Event title must be alpha numeric";
}
/*** check the event detail has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['event_detail']) != true)
{
    /*** if there is no match ***/
    $message = "Error&#58; Event detail must be alpha numeric characters only";
}
/*** check the event city has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['event_city']) != true)
{
    /*** if there is no match ***/
    $message = "Error&#58; Event city must be alpha numeric characters only";
}
/*** check the event state has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['event_state']) != true)
{
    /*** if there is no match ***/
    $message = "Error&#58; Event state must be alpha numeric characters only";
}

else
{
    /*** if we are here the data is valid and we can insert it into database ***/
    $event_title = filter_var($_POST['event_title'], FILTER_SANITIZE_STRING);
    $event_street = strtolower(filter_var($_POST['event_street'], FILTER_SANITIZE_STRING));
    $event_city = filter_var($_POST['event_city'], FILTER_SANITIZE_STRING);
    $event_state = ucfirst(filter_var($_POST['event_state'], FILTER_SANITIZE_STRING));
    $event_zip = ucfirst(filter_var($_POST['event_zip'], FILTER_SANITIZE_STRING));
    $event_time = filter_var($_POST['event_time'], FILTER_SANITIZE_STRING);
    $event_duration = ucwords(filter_var($_POST['event_duration'], FILTER_SANITIZE_STRING));
    $event_detail = ucfirst(filter_var($_POST['event_detail'], FILTER_SANITIZE_STRING));
    
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
        $stmt = $dbh->prepare("INSERT INTO phpro_users (phpro_username, phpro_email, phpro_password, phpro_firstname, phpro_lastname, phpro_telephone, phpro_street, phpro_city, phpro_state, phpro_zip, phpro_grade, phpro_birthday, phpro_lesson_option, phpro_has_friend, phpro_lesson_pref_1, phpro_lesson_pref_2, phpro_lesson_pref_3, phpro_payment_plan, phpro_lesson_history, phpro_policy_agreement, phpro_tuition_agreement) VALUES (:phpro_username, :phpro_email, :phpro_password, :phpro_firstname, :phpro_lastname, :phpro_telephone, :phpro_street, :phpro_city, :phpro_state, :phpro_zip, :phpro_grade, :phpro_birthday, :phpro_lesson_option, :phpro_has_friend, :phpro_lesson_pref_1, :phpro_lesson_pref_2, :phpro_lesson_pref_3, :phpro_payment_plan, :phpro_lesson_history, :phpro_policy_agreement, :phpro_tuition_agreement)");

        /*** bind the parameters ***/
        $stmt->bindParam(':event_title', $event_title, PDO::PARAM_STR);
        $stmt->bindParam(':event_street', $event_street, PDO::PARAM_STR, 40);
        $stmt->bindParam(':event_city', $event_city, PDO::PARAM_STR, 40);
        $stmt->bindParam(':event_state', $event_state, PDO::PARAM_STR);
        $stmt->bindParam(':event_zip', $event_zip, PDO::PARAM_STR);
        $stmt->bindParam(':event_time', $event_time, PDO::PARAM_STR);
        $stmt->bindParam(':event_duration', $event_duration, PDO::PARAM_STR, 40);
        $stmt->bindParam(':event_detail', $event_detail, PDO::PARAM_STR, 40);

        /*** execute the prepared statement ***/
        $stmt->execute();

        /*** unset the form token session variable ***/
        //unset( $_SESSION['form_token'] );

        /*** if all is done, say thanks ***/
        $message = 'Success&#58; New Event Added';
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

