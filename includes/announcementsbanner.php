<? php
/*** connect to database ***/;
/*** mysql hostname ***/;
$mysql_hostname = "127.8.99.130";
                                    
/*** mysql username ***/;
$mysql_username = "adminRqmldJy";
                                    
/*** mysql password ***/
$mysql_password = 'gQDlAVx3a66L';
                                    
/*** database name ***/
$mysql_dbname = 'thepianopathway';
    
try {
  $conn = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
  $sql = 'SELECT * FROM announcements WHERE announcement_hide_date >= CURDATE() ORDER BY announcement_hide_date LIMIT 3';
  $q = $conn->query($sql);
  $q->setFetchMode(PDO::FETCH_ASSOC);                        
} catch (PDOException $pe) {
  die("Could not connect to the database $dbname :" . $pe->getMessage());
}

    echo '<div class="col-sm-6 events">';
    echo '<h2 class="eventheader textshadownl"><i class="fa fa-microphone"></i> Announcements</h2>';
  
      while ($r = $q->fetch()):
        echo "<h4>" . htmlspecialchars($r['announcement_title']) . "</h4>";
        echo "<h5>" . $r['announcement_detail'] . "</h5><br>";
      endwhile;
echo '</div>';
?>