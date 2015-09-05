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
  $sql = 'SELECT * FROM events WHERE event_time >= CURDATE() ORDER BY event_time LIMIT 3';
  $q = $conn->query($sql);
  $q->setFetchMode(PDO::FETCH_ASSOC);                        
} catch (PDOException $pe) {
  die("Could not connect to the database $dbname :" . $pe->getMessage());
}
  
      while ($r = $q->fetch()):
        $date = date_create_from_format('Y-m-d H:i:s', $r['event_time']);
			  echo '<div class="col-sm-2 col-sm-offset-2">';
          echo '<div class="calendar">';
            echo '<div class="calendarheader">' . date_format($date, 'M') . '</div>';
            echo '<div class="num-day">' . date_format($date, 'j') . '</div>';
          echo '</div>';
        echo '</div>';
			  echo '<div class="col-sm-6">';
          echo '<div class="calendar">';
            echo "<span class='black event-title'>" . htmlspecialchars($r['event_title']) . "</span>";
            echo "<h6 class='black'>" . $r['event_street'] . " " . $r['event_city'] . ", " . $r['event_state'] . " " . $r['event_zip'] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Duration&#58; " . $r['event_duration'] . " Hours</h6>";
            echo "<h5 class='black'>" . $r['event_detail'] . "</h5><br>";
          echo '</div>';
        echo '</div>';
      endwhile;
  
?>