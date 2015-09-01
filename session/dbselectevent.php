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
        $event_id = $_GET['id'];
    
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
                $sql = "SELECT * FROM events WHERE event_id = $event_id";
                $q = $conn->query($sql);
                $q->setFetchMode(PDO::FETCH_ASSOC);                        
            } catch (PDOException $pe) {
                die("Could not connect to the database $dbname :" . $pe->getMessage());
            }
        while ($r = $q->fetch()): ;
            $event_title = $r['event_title'];
            $event_street = $r['event_street'];
            $event_city = $r['event_city'];
            $event_state = $r['event_state'];
            $event_zip = $r['event_zip'];
            $event_time = $r['event_time'];
            $event_duration = $r['event_duration'];
            $event_detail = $r['event_detail'];
        endwhile;
        $date = date_create_from_format('Y-m-d H:i:s', $event_time);
    ?>

    <body>
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><?php echo $event_title ?></h4>
        </div>
        <div class="modal-body">
            <div class="oneline">
                <h5><?php echo $event_title ?></h5>
                <h5><?php echo $event_street ?></h5>
                <h5><?php echo $event_city . "&#44; " . $event_state . " " . $event_zip ?></h5>
            </div>
            <div class="oneline pull-right text-right">
                <h5><?php echo "When &#58; " . date_format($date, 'l\, F jS h:i A') ?></h5>
                
                <h5><?php echo "Duration &#58; " . $event_duration ?></h5>
            </div>
            <br>
            <br>
            <?php echo "Event Detail &#58; " . $event_detail . "<br>" ?>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </body>
</html>