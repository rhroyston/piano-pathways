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
  
      while ($r = $q->fetch()):
        echo '<div class="col-sm-2 cboard">';
          echo "<h4 class='black handwritten'>" . htmlspecialchars($r['announcement_title']) . "</h4>";
          echo "<h5 class='black handwritten'>" . $r['announcement_detail'] . "</h5><br>";
        echo '</div>';
      endwhile;

?>