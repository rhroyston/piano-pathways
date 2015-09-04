<?php
/*** begin the session ***/
session_start();

if(!isset($_SESSION['user_id']))
{
    $_SESSION['message'] = 'Error&#58; Please Log In';
    $_SESSION['loginpane'] = 'true';
    header("Location: http://thepianopathway-rhroyston.rhcloud.com/login");
    exit();
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
            
        echo '<!DOCTYPE html>';
        echo '<html lang="en">';
        
            $title = 'Admin';
            $jslink = '<script src="js/moment-with-locales.min.js"></script>';
            $jslink2 = '<script src="js/bootstrap-datetimepicker.min.js"></script>';
            $csslink = '<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">';
            
            include 'includes/head.php';
        
            echo '<body style=\'background-image: url("../images/fabric.png");\'>';
            echo '<div id="cover"></div>'; 
            include "includes/basenav.php";
            include "includes/alert.php";
            echo '<div class="container">';
                echo '<div class="row text-center">';
                echo "<h1>Administrator Portal</h1>";
                echo '</div>';
    
                            try {
                                $conn = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
                                $sql = 'SELECT * FROM phpro_users ORDER BY phpro_lastname';
                                 $q = $conn->query($sql);
                                 $q->setFetchMode(PDO::FETCH_ASSOC);                        
                            } catch (PDOException $pe) {
                                die("Could not connect to the database $dbname :" . $pe->getMessage());
                            }
                echo '<div class="row">';
                    echo '<br>';
                    echo '<br>';
                    echo '<br>';
                    
                    echo '<div class="col-sm-4 adminwidth">';
                        echo '<div class="raised">';    
                        echo '<h4>&nbsp;&nbsp;<i class="fa fa-users"></i> Student Record Detail</h4>';
                        echo '<div class="adminscroll">';
                        echo '<table class="table">';
                            
                            while ($r = $q->fetch()):
                            $id = "#id" . htmlspecialchars($r['phpro_user_id']);
                            echo "<tr>";
                                echo "<td><a class='modalclass black textshadowsm' href='session/dbselectuser?id=" . $r['phpro_user_id'] . "' data-toggle='modal' data-target='#myModal'><i class='fa fa-search-plus'></i></a></td>";
                                echo "<td>" . $r['phpro_firstname'] . "</td>";
                                echo "<td>" . $r['phpro_lastname'] . "</td>";
                            echo "</tr>";
                            endwhile;
                            $q=NULL;
                        echo "</table>";
                        echo "</div>";
                        echo "</div>";
                    echo "</div>";

                            try {
                                //$conn = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
                                $sql = 'SELECT * FROM events WHERE event_time >= NOW() ORDER BY event_time LIMIT 50';
                                 $q = $conn->query($sql);
                                 $q->setFetchMode(PDO::FETCH_ASSOC);                        
                            } catch (PDOException $pe) {
                                die("Could not connect to the database $dbname :" . $pe->getMessage());
                            }

                    echo '<div class="col-sm-4 adminwidth">';
                        echo '<div class="raised">';    
                        echo '<h4>&nbsp;&nbsp;<i class="fa fa-calendar-o"></i> Upcoming Events <span class="pull-right admin-small"><a class="modalclass black textshadowsm" href="includes/newevent" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> add new</a></span></h4>';
                        echo '<div class="adminscroll">';
                        echo '<table class="table">';
                            
                            while ($r = $q->fetch()):
                            
                            $date = date_create_from_format('Y-m-d H:i:s', $r['event_time']);
                            //echo date_format($date, 'Y-m-d');    
                            
                            
                            echo "<tr>";
                                echo "<td><a class='modalclass black textshadowsm' href='session/dbselectevent?id=" . $r['event_id'] . "' data-toggle='modal' data-target='#myModal'><i class='fa fa-search-plus'></i></a></td>";
                                echo "<td>" . $r['event_title'] . "</td>";
                                echo "<td>" . date_format($date, 'l\, F jS h:i A') . "</td>";
                            echo "</tr>";
                            endwhile;
                            $q=NULL;
                        echo "</table>";
                        echo "</div>";
                        echo "</div>";
                    echo "</div>";

                            try {
                                //$conn = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
                                $sql = 'SELECT * FROM announcements WHERE announcement_hide_date >= NOW() ORDER BY announcement_hide_date LIMIT 50';
                                 $q = $conn->query($sql);
                                 $q->setFetchMode(PDO::FETCH_ASSOC);                        
                            } catch (PDOException $pe) {
                                die("Could not connect to the database $dbname :" . $pe->getMessage());
                            }

                    echo '<div class="col-sm-4 adminwidth">';
                        echo '<div class="raised">';    
                        echo '<h4>&nbsp;&nbsp;<i class="fa fa-microphone"></i> Announcements <span class="pull-right admin-small"><a class="modalclass black textshadowsm" href="includes/newannouncement" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> add new</a></span></h4>';
                        echo '<div class="adminscroll">';
                        echo '<table class="table">';
                            
                            while ($r = $q->fetch()):
                            
                            $date = date_create_from_format('Y-m-d H:i:s', $r['event_time']);
                            //echo date_format($date, 'Y-m-d');    
                            
                            echo "<tr>";
                                echo "<td><a class='modalclass black textshadowsm' href='session/dbselectevent?id=" . $r['event_id'] . "' data-toggle='modal' data-target='#myModal'><i class='fa fa-search-plus'></i></a></td>";
                                echo "<td>" . $r['event_title'] . "</td>";
                                echo "<td>" . date_format($date, 'l\, F jS h:i A') . "</td>";
                            echo "</tr>";
                            endwhile;
                            
                        echo "</table>";
                        echo "</div>";
                        echo "</div>";
                    echo "</div>";                    
                    
                echo "</div>";
            echo "</div>";
            echo "<div id='modal-placeholder'></div>";
        
            echo "</div>";
        
        echo "</body>";
        echo "</html>";
  
        }
    }
    catch (Exception $e)
    {
        /*** if we are here, something is wrong in the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
}

?>