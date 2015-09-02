<?php
/*** begin our session ***/
session_start();

if (isset($_POST['phpro_has_friend']) && $_POST['phpro_has_friend'] == 'Yes') {
    $phpro_has_friend_var = "Yes";
}
else{
    $phpro_has_friend_var = "No";
}

/*** first check that both the username, password and form token have been sent ***/
if(!isset($_POST['phpro_email'], $_POST['form_token']))
{
    $message = 'Error&#58; Please enter a valid email';
}
/*** check the form token is valid ***/
elseif( $_POST['form_token'] != $_SESSION['form_token'])
{
    $message = 'Error&#58; Invalid form submission';
}
/*** check the email is the correct length ***/
elseif (strlen( $_POST['phpro_email']) > 60 || strlen($_POST['phpro_email']) < 4)
{
    $message = 'Error&#58; Incorrect Length for Email';
}
/*** check the first name is the correct length ***/
elseif (strlen( $_POST['phpro_firstname']) > 20)
{
    $message = 'Error&#58; Incorrect Length for first name';
}
/*** check the last name is the correct length ***/
elseif (strlen( $_POST['phpro_lastname']) > 20)
{
    $message = 'Error&#58; Incorrect Length for last name';
}
/*** check the street is the correct length ***/
elseif (strlen( $_POST['phpro_street']) > 60)
{
    $message = 'Error&#58; Incorrect Length for street';
}
/*** check the city is the correct length ***/
elseif (strlen( $_POST['phpro_city']) > 20)
{
    $message = 'Error&#58; Incorrect Length for city';
}
/*** check the state is the correct length ***/
elseif (strlen( $_POST['phpro_state']) > 20)
{
    $message = 'Error&#58; Incorrect Length for state';
}
/*** check the zip is the correct length ***/
elseif (strlen( $_POST['phpro_zip']) > 5)
{
    $message = 'Error&#58; Incorrect Length for zip';
}
/*** check the grade is the correct length ***/
elseif (strlen( $_POST['phpro_grade']) > 20)
{
    $message = 'Error&#58; Incorrect Length for grade';
}
/*** check the month is the correct length ***/
elseif (strlen( $_POST['month']) > 20)
{
    $message = 'Error&#58; Incorrect Length for month';
}
/*** check the day is the correct length ***/
elseif (strlen( $_POST['day']) > 2)
{
    $message = 'Error&#58; Incorrect Length for day';
}
/*** check the year is the correct length ***/
elseif (strlen( $_POST['year']) > 4)
{
    $message = 'Error&#58; Incorrect Length for year';
}
/*** check the lesson option is the correct length ***/
elseif (strlen( $_POST['phpro_lesson_option']) > 40)
{
    $message = 'Error&#58; Incorrect Length for lesson option';
}
/*** check the has friend option is the correct length ***/
elseif (strlen( $phpro_has_friend_var) > 20)
{
    $message = 'Error&#58; Incorrect Length for has friend option';
}
/*** check the lesson choice one is the correct length ***/
elseif (strlen( $_POST['phpro_lesson-pref-1']) > 40)
{
    $message = 'Error&#58; Incorrect Length for lesson choice one';
}
/*** check the lesson choice two is the correct length ***/
elseif (strlen( $_POST['phpro_lesson-pref-2']) > 40)
{
    $message = 'Error&#58; Incorrect Length for lesson choice two';
}
/*** check the lesson choice three is the correct length ***/
elseif (strlen( $_POST['phpro_lesson-pref-3']) > 40)
{
    $message = 'Error&#58; Incorrect Length for lesson choice three';
}
/*** check the payment plan is the correct length ***/
elseif (strlen( $_POST['phpro_payment_plan']) > 40)
{
    $message = 'Error&#58; Incorrect Length for payment plan';
}
/*** check the lesson history is the correct length ***/
elseif (strlen( $_POST['phpro_lesson_history']) > 500)
{
    $message = 'Error&#58; Incorrect Length for lesson history';
}
/*** check the policy agreement is the correct length ***/
elseif (strlen( $_POST['phpro_policy_agreement']) > 20)
{
    $message = 'Error&#58; Incorrect Length for policy agreement';
}
/*** check the tuition agreement is the correct length ***/
elseif (strlen( $_POST['phpro_tuition_agreement']) > 20)
{
    $message = 'Error&#58; Incorrect Length for tuition agreement';
}
/*** check the first name has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['phpro_firstname']) != true)
{
    /*** if there is no match ***/
    $message = "Error&#58; First name must be alpha numeric characters only";
}
/*** check the last name has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['phpro_lastname']) != true)
{
    /*** if there is no match ***/
    $message = "Error&#58; Last name must be alpha numeric characters only";
}

else
{
    /*** if we are here the data is valid and we can insert it into database ***/
    $phpro_email = strtolower(filter_var($_POST['phpro_email'], FILTER_SANITIZE_STRING));
    $phpro_firstname = ucfirst(filter_var($_POST['phpro_firstname'], FILTER_SANITIZE_STRING));
    $phpro_lastname = ucfirst(filter_var($_POST['phpro_lastname'], FILTER_SANITIZE_STRING));
    $phpro_telephone = filter_var($_POST['phpro_telephone'], FILTER_SANITIZE_STRING);
    $phpro_street = ucwords(filter_var($_POST['phpro_street'], FILTER_SANITIZE_STRING));
    $phpro_city = ucfirst(filter_var($_POST['phpro_city'], FILTER_SANITIZE_STRING));
    $phpro_state = strtoupper(filter_var($_POST['phpro_state'], FILTER_SANITIZE_STRING));
    $phpro_zip = filter_var($_POST['phpro_zip'], FILTER_SANITIZE_STRING);
    $phpro_grade = filter_var($_POST['phpro_grade'], FILTER_SANITIZE_STRING);
    $month = filter_var($_POST['month'], FILTER_SANITIZE_STRING);
    $day = filter_var($_POST['day'], FILTER_SANITIZE_STRING);
    $year = filter_var($_POST['year'], FILTER_SANITIZE_STRING);
    $phpro_lesson_option = filter_var($_POST['phpro_lesson_option'], FILTER_SANITIZE_STRING);
    $phpro_has_friend = filter_var($phpro_has_friend_var, FILTER_SANITIZE_STRING);
    $phpro_lesson_pref_1 = filter_var($_POST['phpro_lesson_pref_1'], FILTER_SANITIZE_STRING);
    $phpro_lesson_pref_2 = filter_var($_POST['phpro_lesson_pref_2'], FILTER_SANITIZE_STRING);
    $phpro_lesson_pref_3 = filter_var($_POST['phpro_lesson_pref_3'], FILTER_SANITIZE_STRING);
    $phpro_payment_plan = filter_var($_POST['phpro_payment_plan'], FILTER_SANITIZE_STRING);
    $phpro_lesson_history = filter_var($_POST['phpro_lesson_history'], FILTER_SANITIZE_STRING);
    $phpro_birthday = $year . "-" . date('m', strtotime($month)) . "-" . $day;

    /*** now we can encrypt the password ***/
    $phpro_password = sha1( $phpro_password );
    
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
        $stmt = $dbh->prepare("INSERT INTO phpro_users (phpro_email, phpro_firstname, phpro_lastname, phpro_telephone, phpro_street, phpro_city, phpro_state, phpro_zip, phpro_grade, phpro_birthday, phpro_lesson_option, phpro_has_friend, phpro_lesson_pref_1, phpro_lesson_pref_2, phpro_lesson_pref_3, phpro_payment_plan, phpro_lesson_history) VALUES (:phpro_email, :phpro_firstname, :phpro_lastname, :phpro_telephone, :phpro_street, :phpro_city, :phpro_state, :phpro_zip, :phpro_grade, :phpro_birthday, :phpro_lesson_option, :phpro_has_friend, :phpro_lesson_pref_1, :phpro_lesson_pref_2, :phpro_lesson_pref_3, :phpro_payment_plan, :phpro_lesson_history)");

        /*** bind the parameters ***/
        $stmt->bindParam(':phpro_email', $phpro_email, PDO::PARAM_STR, 40);
        $stmt->bindParam(':phpro_firstname', $phpro_firstname, PDO::PARAM_STR);
        $stmt->bindParam(':phpro_lastname', $phpro_lastname, PDO::PARAM_STR);
        $stmt->bindParam(':phpro_telephone', $phpro_telephone, PDO::PARAM_STR);
        $stmt->bindParam(':phpro_street', $phpro_street, PDO::PARAM_STR, 40);
        $stmt->bindParam(':phpro_city', $phpro_city, PDO::PARAM_STR, 40);
        $stmt->bindParam(':phpro_state', $phpro_state, PDO::PARAM_STR, 40);
        $stmt->bindParam(':phpro_zip', $phpro_zip, PDO::PARAM_STR, 40);
        $stmt->bindParam(':phpro_grade', $phpro_grade, PDO::PARAM_STR, 40);
        $stmt->bindParam(':phpro_birthday', $phpro_birthday, PDO::PARAM_STR, 40);
        $stmt->bindParam(':phpro_lesson_option', $phpro_lesson_option, PDO::PARAM_STR, 40);
        $stmt->bindParam(':phpro_has_friend', $phpro_has_friend, PDO::PARAM_STR, 40);
        $stmt->bindParam(':phpro_lesson_pref_1', $phpro_lesson_pref_1, PDO::PARAM_STR, 40);
        $stmt->bindParam(':phpro_lesson_pref_2', $phpro_lesson_pref_2, PDO::PARAM_STR, 40);
        $stmt->bindParam(':phpro_lesson_pref_3', $phpro_lesson_pref_3, PDO::PARAM_STR, 40);
        $stmt->bindParam(':phpro_payment_plan', $phpro_payment_plan, PDO::PARAM_STR, 40);
        $stmt->bindParam(':phpro_lesson_history', $phpro_lesson_history, PDO::PARAM_STR, 40);

        /*** execute the prepared statement ***/
        $stmt->execute();

        /*** unset the form token session variable ***/
        unset( $_SESSION['form_token'] );

        /*** if all is done, say thanks ***/
        $message = 'Success&#58; Online Registration Complete';
    }
    catch(Exception $e)
    {
        /*** check if the username already exists ***/
        if( $e->getCode() == 23000)
        {
            $message = 'Error&#58; Username already exists';
        }
        else
        {
            /*** if we are here, something has gone wrong with the database ***/
            $message = 'Error&#58; We are unable to process your request. Please try again later"';
        }
    }
}
// If there is a message, then pass it in session variable.

$_SESSION["message"] = $message;
$newuser_email = $_POST['phpro_email'];

// redirect back w message to login pane if successful and to register pane if not
if($message == 'Success&#58; Online Registration Complete'){
    $_SESSION["loginpane"] = 'true';
    header("Location: http://thepianopathway-rhroyston.rhcloud.com");
    exit();

}
else{
    header("Location: http://thepianopathway-rhroyston.rhcloud.com/profile");
    exit();
}

?>

