<?php
/*** begin the session ***/
session_start();

if(!isset($_SESSION['user_id']))
{
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    </head>
    <?php
        $id = $_GET['id'];
    
        /*** connect to database ***/
        /*** mysql hostname ***/
        $mysql_hostname = '127.8.99.130';
                    
        /*** mysql username ***/
        $mysql_username = 'adminRqmldJy';
                            
        /*** mysql password ***/
        $mysql_password = 'gQDlAVx3a66L';
                            
        /*** database name ***/
        $mysql_dbname = 'thepianopathway';
                             
        try {
                $conn = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
                $sql = "SELECT * FROM phpro_users WHERE phpro_user_id = $id";
                $q = $conn->query($sql);
                $q->setFetchMode(PDO::FETCH_ASSOC);                        
            } catch (PDOException $pe) {
                die("Could not connect to the database $dbname :" . $pe->getMessage());
            }
        while ($r = $q->fetch()): ;
            $firstname = $r['phpro_firstname'];
            $lastname = $r['phpro_lastname'];
            $street = $r['phpro_street'];
            $city = $r['phpro_city'];
            $state = $r['phpro_state'];
            $zip = $r['phpro_zip'];
            $email = $r['phpro_email'];
            $telephone = $r['phpro_telephone'];
            $birthday = $r['phpro_birthday'];
            $grade = $r['phpro_grade'];
            $lesson_option = $r['phpro_lesson_option'];
            $has_friend = $r['phpro_has_friend'];
            $lesson_pref_1 = $r['phpro_lesson_pref_1'];
            $lesson_pref_2 = $r['phpro_lesson_pref_2'];
            $lesson_pref_3 = $r['phpro_lesson_pref_3'];
            $payment_plan = $r['phpro_payment_plan'];
            $lesson_history = $r['phpro_lesson_history'];
        endwhile;
    ?>

    <body>
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><?php echo $firstname . " " . $lastname; ?></h4>
        </div>
        <div class="modal-body">
            <div class="oneline">
                <h5><?php echo $firstname . " " . $lastname; ?></h5>
                <h5><?php echo $street?></h5>
                <h5><?php echo $city . "&#44; " . $state . " " . $zip ?></h5>
            </div>
            <div class="oneline pull-right text-right">
                <h5><?php echo "<i class='fa fa-phone'></i> " . $telephone?></h5>
                <h5><?php echo "<i class='fa fa-envelope-o'></i> " . $email?></h5>
            </div>
            <br>
            <br>
            <?php echo "Grade&#58; " . $grade . "<br>"?>
            <?php echo "Payment Plan&#58; " . $payment_plan . "<br>"?>
            <?php echo "Lesson Option&#58; " . $lesson_option . "<br>"?>
            <?php echo "Has A Friend&#58; " . $has_friend . "<br>"?>
            <?php echo "Lesson Preference 1&#58; " . $lesson_pref_1 . "<br>"?>
            <?php echo "Lesson Preference 2&#58; " . $lesson_pref_2 . "<br>"?>
            <?php echo "Lesson Preference 3&#58; " . $lesson_pref_3 . "<br>"?>
            <?php echo "Lesson History &#58; " . $lesson_history . "<br>"?>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </body>
</html>