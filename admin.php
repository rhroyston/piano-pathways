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
            $message = 'Welcome '.$phpro_username;
            
            
            
            
            
        }
    }
    catch (Exception $e)
    {
        /*** if we are here, something is wrong in the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<?php 
    $title = 'Admin';
    include 'includes/head.php';
?>
<body style='background-image: url("../images/fabric.png");'>
    <div id="cover"></div>  
    <?php include 'includes/alert.php';?>
    <div class="container">
        <div class="row text-center">
            <h2><?php echo $message; ?></h2>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <?php
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
                        $sql = 'SELECT * FROM phpro_users';
                         $q = $conn->query($sql);
                         $q->setFetchMode(PDO::FETCH_ASSOC);                        
                    } catch (PDOException $pe) {
                        die("Could not connect to the database $dbname :" . $pe->getMessage());
                    }                                
                ?>
                <table class="table">
                    <tr>
                        <th> </th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Email</th>
                        <th>Telephone</th>
                    </tr>
                    <?php while ($r = $q->fetch()): ?>
                    <?php $id = "#id" . htmlspecialchars($r['phpro_user_id']);?> 
                    <tr>
                        <td><a class="modalclass" href="<?php echo 'local/dbselectuser?id=' . htmlspecialchars($r['phpro_user_id']); ?>" data-toggle="modal" data-target="#myModal"><i class='fa fa-search-plus'></i></a></td>
                        <td><?php echo htmlspecialchars($r['phpro_lastname']); ?></td>
                        <td><?php echo htmlspecialchars($r['phpro_firstname']); ?></td>
                        <td><?php echo htmlspecialchars($r['phpro_email']); ?></td>
                        <td><?php echo htmlspecialchars($r['phpro_telephone']); ?></td>
                    </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
    </div>
    <div id="modal-placeholder"></div>

    </div>

</body>
</html>