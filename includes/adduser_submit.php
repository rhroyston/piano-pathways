<?php
/*** begin our session ***/
session_start();

/*** first check that both the username, password and form token have been sent ***/
if(!isset( $_POST['phpro_username'], $_POST['phpro_email'], $_POST['phpro_password'], $_POST['form_token']))
{
    $message = 'Error&#58; Please enter a valid username&#44; email&#44; and password';
}
/*** check the form token is valid ***/
elseif( $_POST['form_token'] != $_SESSION['form_token'])
{
    $message = 'Error&#58; Invalid form submission';
}
/*** check the username is the correct length ***/
elseif (strlen( $_POST['phpro_username']) > 20 || strlen($_POST['phpro_username']) < 4)
{
    $message = 'Error&#58; Incorrect Length for Username';
}
/*** check the email is the correct length ***/
elseif (strlen( $_POST['phpro_email']) > 40 || strlen($_POST['phpro_email']) < 4)
{
    $message = 'Error&#58; Incorrect Length for Email';
}
/*** check the password is the correct length ***/
elseif (strlen( $_POST['phpro_password']) > 20 || strlen($_POST['phpro_password']) < 4)
{
    $message = 'Error&#58; Incorrect Length for Password';
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
elseif (strlen( $_POST['phpro_street']) > 20)
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
    $message = 'Error&#58; Incorrect Length for day';
}
/*** check the lesson option is the correct length ***/
elseif (strlen( $_POST['phpro_lesson_option']) > 40)
{
    $message = 'Error&#58; Incorrect Length for lesson option';
}
/*** check the has friend option is the correct length ***/
elseif (strlen( $_POST['phpro_has_friend']) > 20)
{
    $message = 'Error&#58; Incorrect Length for has friend option';
}
/*** check the lesson choice one is the correct length ***/
elseif (strlen( $_POST['lesson-pref-1']) > 40)
{
    $message = 'Error&#58; Incorrect Length for lesson choice one';
}
/*** check the lesson choice two is the correct length ***/
elseif (strlen( $_POST['lesson-pref-2']) > 40)
{
    $message = 'Error&#58; Incorrect Length for lesson choice two';
}
/*** check the lesson choice three is the correct length ***/
elseif (strlen( $_POST['lesson-pref-3']) > 40)
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
/*** check the username has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['phpro_username']) != true)
{
    /*** if there is no match ***/
    $message = "Error&#58; Username must be alpha numeric";
}
/*** check the password has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['phpro_password']) != true)
{
    /*** if there is no match ***/
    $message = "Error&#58; Password must be alpha numeric characters only";
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
    $phpro_username = filter_var($_POST['phpro_username'], FILTER_SANITIZE_STRING);
    $phpro_email = filter_var($_POST['phpro_email'], FILTER_SANITIZE_STRING);
    $phpro_password = filter_var($_POST['phpro_password'], FILTER_SANITIZE_STRING);
    $phpro_firstname = filter_var($_POST['phpro_firstname'], FILTER_SANITIZE_STRING);
    $phpro_lastname = filter_var($_POST['phpro_lastname'], FILTER_SANITIZE_STRING);
    $phpro_telephone = filter_var($_POST['phpro_telephone'], FILTER_SANITIZE_STRING);
    $phpro_street = filter_var($_POST['phpro_street'], FILTER_SANITIZE_STRING);
    $phpro_city = filter_var($_POST['phpro_city'], FILTER_SANITIZE_STRING);
    $phpro_state = filter_var($_POST['phpro_state'], FILTER_SANITIZE_STRING);
    $phpro_zip = filter_var($_POST['phpro_zip'], FILTER_SANITIZE_STRING);
    $phpro_grade = filter_var($_POST['phpro_grade'], FILTER_SANITIZE_STRING);
    $month = filter_var($_POST['month'], FILTER_SANITIZE_STRING);
    $day = filter_var($_POST['day'], FILTER_SANITIZE_STRING);
    $year = filter_var($_POST['year'], FILTER_SANITIZE_STRING);
    $phpro_lesson_option = filter_var($_POST['phpro_lesson_option'], FILTER_SANITIZE_STRING);
    $phpro_has_friend = filter_var($_POST['phpro_has_friend'], FILTER_SANITIZE_STRING);
    $lesson_pref_1 = filter_var($_POST['lesson_pref_1'], FILTER_SANITIZE_STRING);
    $lesson_pref_2 = filter_var($_POST['lesson_pref_2'], FILTER_SANITIZE_STRING);
    $lesson_pref_3 = filter_var($_POST['lesson_pref_2'], FILTER_SANITIZE_STRING);
    $phpro_payment_plan = filter_var($_POST['phpro_payment_plan'], FILTER_SANITIZE_STRING);
    $phpro_lesson_history = filter_var($_POST['phpro_lesson_history'], FILTER_SANITIZE_STRING);
    $phpro_policy_agreement = filter_var($_POST['phpro_policy_agreement'], FILTER_SANITIZE_STRING);
    $phpro_tuition_agreement = filter_var($_POST['phpro_tuition_agreement'], FILTER_SANITIZE_STRING);
    
    $phpro_birthday = $year . "-" . date_parse($month) . "-" . $day;

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
        $stmt = $dbh->prepare("INSERT INTO phpro_users (phpro_username, phpro_email, phpro_password, phpro_firstname, phpro_lastname, phpro_telephone, phpro_street, phpro_city, phpro_state, phpro_zip, phpro_grade, phpro_birthday, phpro_lesson_option, phpro_has_friend, lesson_pref_1, lesson_pref_2, lesson_pref_3, phpro_payment_plan, phpro_lesson_history, phpro_policy_agreement, phpro_tuition_agreement ) VALUES (:phpro_username, :phpro_email, :phpro_password, :phpro_firstname, :phpro_lastname, :phpro_telephone, :phpro_street, :phpro_city, :phpro_state, :phpro_zip, :phpro_grade, :phpro_birthday, :phpro_lesson_option, :phpro_has_friend, :lesson_pref_1, :lesson_pref_2, :lesson_pref_3, :phpro_payment_plan, :phpro_lesson_history, :phpro_policy_agreement, :phpro_tuition_agreement )");

        /*** bind the parameters ***/
        $stmt->bindParam(':phpro_username', $phpro_username, PDO::PARAM_STR);
        $stmt->bindParam(':phpro_email', $phpro_email, PDO::PARAM_STR, 40);
        $stmt->bindParam(':phpro_password', $phpro_password, PDO::PARAM_STR, 40);
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
        $stmt->bindParam(':phpro_policy_agreement', $phpro_policy_agreement, PDO::PARAM_STR, 40);
        $stmt->bindParam(':phpro_tuition_agreement', $phpro_tuition_agreement, PDO::PARAM_STR, 40);

        /*** execute the prepared statement ***/
        $stmt->execute();

        /*** unset the form token session variable ***/
        unset( $_SESSION['form_token'] );

        /*** if all is done, say thanks ***/
        $message = 'Success&#58; New user added';
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


// redirect back w message to login pane if successful and to register pane if not
if($message == 'Success&#58; New user added'){
    header("Location: http://thepianopathway-rhroyston.rhcloud.com/login");
    //exit();
}
else{
    header("Location: http://thepianopathway-rhroyston.rhcloud.com/login#tab-register");
    $_SESSION["registerpane"] = 'true';
    //exit();
}

?>

