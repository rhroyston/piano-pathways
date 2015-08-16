<?php

/*** begin our session ***/
session_start();

/*** check if the users is already logged in ***/
if(isset( $_SESSION['user_id'] ))
{
    $message = 'Users is already logged in';
}
/*** check that both the username, password have been submitted ***/
if(!isset( $_POST['phpro_username'], $_POST['phpro_password']))
{
    $message = 'Please enter a valid username and password';
}
/*** check the username is the correct length ***/
elseif (strlen( $_POST['phpro_username']) > 20 || strlen($_POST['phpro_username']) < 4)
{
    $message = 'Incorrect Length for Username';
}
/*** check the password is the correct length ***/
elseif (strlen( $_POST['phpro_password']) > 20 || strlen($_POST['phpro_password']) < 4)
{
    $message = 'Incorrect Length for Password';
}
/*** check the username has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['phpro_username']) != true)
{
    /*** if there is no match ***/
    $message = "Username must be alpha numeric";
}
/*** check the password has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['phpro_password']) != true)
{
        /*** if there is no match ***/
        $message = "Password must be alpha numeric";
}
else
{
    /*** if we are here the data is valid and we can insert it into database ***/
    $phpro_username = filter_var($_POST['phpro_username'], FILTER_SANITIZE_STRING);
    $phpro_password = filter_var($_POST['phpro_password'], FILTER_SANITIZE_STRING);

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

        /*** prepare the select statement ***/
        $stmt = $dbh->prepare("SELECT phpro_user_id, phpro_username, phpro_password FROM phpro_users 
                    WHERE phpro_username = :phpro_username AND phpro_password = :phpro_password");

        /*** bind the parameters ***/
        $stmt->bindParam(':phpro_username', $phpro_username, PDO::PARAM_STR);
        $stmt->bindParam(':phpro_password', $phpro_password, PDO::PARAM_STR, 40);

        /*** execute the prepared statement ***/
        $stmt->execute();

        /*** check for a result ***/
        $user_id = $stmt->fetchColumn();

        /*** if we have no result then fail boat ***/
        if($user_id == false)
        {
                $message = 'Login Failed';
        }
        /*** if we do have a result, all is well ***/
        else
        {
                /*** set the session user_id variable ***/
                $_SESSION['user_id'] = $user_id;

                /*** tell the user we are logged in ***/
                $message = 'You are now logged in';
        }


    }
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
}

// if the user successfully logged in redirect them to original page else redirect them to login page w error reason
if (isset($_SESSION['user_id']))
{
    if ($message = 'You are now logged in')
    {
    $url = $_SESSION["original-page"];
    header("Location: $url");
    }
    else {
    // header("Location: http://thepianopathway-rhroyston.rhcloud.com/");
    }
}
else{
    if (isset($_SESSION["original-page"]))
    {
    $url = $_SERVER['HTTP_REFERER'];
    $_SESSION["message"] = $message;
    header("Location: $url");
    }
    else {
    //  header("Location: http://thepianopathway-rhroyston.rhcloud.com/");
    }

}
?>