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
        $announcement_id = $_GET['id'];
    
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
                $sql = "SELECT * FROM announcements WHERE announcement_id = $announcement_id";
                $q = $conn->query($sql);
                $q->setFetchMode(PDO::FETCH_ASSOC);                        
            } catch (PDOException $pe) {
                die("Could not connect to the database $dbname :" . $pe->getMessage());
            }
        while ($r = $q->fetch()): ;
            $announcement_title = $r['announcement_title'];
            $announcement_detail = $r['announcement_detail'];
            $announcement_hide_date = $r['announcement_hide_date'];
        endwhile;
        $date = date_create_from_format('Y-m-d H:i:s', $announcement_hide_date);
    ?>

    <body>
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><?php echo $announcement_title ?></h4>
        </div>
        <div class="modal-body">
            <br>
            <?php echo $announcement_detail . "<br>" ?>
            <br>
            <div class="oneline pull-right text-right">
                <h6><?php echo "Expires&#58; " . date_format($date, 'l\, F jS h:i A') ?></h6>
            </div>
            <br>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </body>
</html>