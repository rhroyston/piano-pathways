<?php
/*** begin the session ***/
session_start();

if(!isset($_SESSION['user_id']))
{
    $message = 'You must be logged in to access this page';
}
else
{
    try
    {
        /*** connect to database ***/
        /*** mysql hostname ***/
        $mysql_hostname = '127.8.99.130';

        /*** mysql username ***/
        $mysql_username = 'adminRqmldJy';

        /*** mysql password ***/
        $mysql_password = 'gQDlAVx3a66L';

        /*** database name ***/
        $mysql_dbname = 'thepianopathway';


        /*** select the users name from the database ***/
        $dbh = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
        /*** $message = a message saying we have connected ***/

        /*** set the error mode to excptions ***/
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /*** prepare the insert ***/
        $stmt = $dbh->prepare("SELECT phpro_username FROM phpro_users 
        WHERE phpro_user_id = :phpro_user_id");

        /*** bind the parameters ***/
        $stmt->bindParam(':phpro_user_id', $_SESSION['user_id'], PDO::PARAM_INT);

        /*** execute the prepared statement ***/
        $stmt->execute();

        /*** check for a result ***/
        $phpro_username = $stmt->fetchColumn();

        /*** if we have no something is wrong ***/
        if($phpro_username == false)
        {
            $message = 'Access Error';
        }
        else
        {
            echo '<!DOCTYPE html>';
            echo '<html lang="en">';
            echo '<head>';
            echo '<meta http-equiv="content-type" content="text/html; charset=UTF-8" />';
            echo '</head>';

            $id = $_GET['id'];
                    
            /*** connect to database ***/
            try {
                $conn = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
                $sql = "SELECT * FROM phpro_users WHERE phpro_user_id = $id";
                 $q = $conn->query($sql);
                 $q->setFetchMode(PDO::FETCH_ASSOC);                        
                } catch (PDOException $pe) {
                    die("Could not connect to the database $dbname :" . $pe->getMessage());
                }
                    
                while ($r = $q->fetch()): ;
                $firstname = htmlspecialchars($r['phpro_firstname']);
                $lastname = htmlspecialchars($r['phpro_lastname']);
                $email = htmlspecialchars($r['phpro_email']);
                $telephone = htmlspecialchars($r['phpro_telephone']);
                $birthday = htmlspecialchars($r['phpro_birthday']);
                endwhile;

                echo '<body>';
                echo '<div class="modal-header">';
                echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                echo "<h4 class='modal-title'><?php echo $firstname . ' ' . $lastname; ?></h4>";
                
                echo '</div>';
                echo '<div class="modal-body">';
                echo '<table class="table">';
                echo '<tr>';
                echo'<th>Last Name</th>';
                echo '<th>First Name</th>';
                echo '<th>Email</th>';
                echo '<th>Telephone</th>';
                echo '<th>Birthday</th>';
                echo '</tr>';
                echo '<tr>';
                echo "<td><?php echo $lastname; ?></td>";
                echo "<td><?php echo $firstname; ?></td>";
                echo "<td><?php echo $email; ?></td>";
                echo "<td><?php echo $telephone; ?></td>";
                echo "<td><?php echo $birthday; ?></td>";
                echo "</tr>";
                echo "</table>";
                echo '</div>';
                echo '<div class="modal-footer">';
                echo '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
                echo '<button type="button" class="btn btn-primary">Save changes</button>';
                echo '</div>';
                echo '</body>';
                echo '</html>';
        }
    }
    catch (Exception $e)
    {
        /*** if we are here, something is wrong in the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
}
?>


