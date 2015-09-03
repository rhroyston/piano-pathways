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

echo '<div class="row">';
  echo '<div class="col-sm-8 col-sm-offset-2">';

    while ($r = $q->fetch()):
    $date = date_create_from_format('Y-m-d H:i:s', $r['event_time']);
    echo htmlspecialchars($r['event_title']) . " ";
    echo date_format($date, 'l\, F jS h:i A') . "<br>";
    endwhile;

  echo '</div>';
echo '</div>';


?>