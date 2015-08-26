<?php include 'includes/session_members.php'; ?>

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
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Telephone</th>
                    </tr>
                    <?php while ($r = $q->fetch()): ?>
                    <?php $id = "#id" . htmlspecialchars($r['phpro_user_id']);?> 
                    <tr>
                        <td><a href="$id" data-toggle="modal" class="black textshadowsm">more <i class='fa fa-search-plus'></i></a></td>
                        <td><?php echo htmlspecialchars($r['phpro_lastname'])?></td>
                        <td><?php echo htmlspecialchars($r['phpro_firstname']); ?></td>
                        <td><?php echo htmlspecialchars($r['phpro_email']); ?></td>
                        <td><?php echo htmlspecialchars($r['phpro_telephone']); ?></td>
                    </tr>
                    
<div id="<?php echo "$id"; ?> class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title">Sarah Stoltzfus Johnson</h2>
        <h4 class="modal-title">Piano Faculty</h4>
      </div>
      <div class="modal-body">
        <p>A National Certified Teacher of Piano&#44; Rebecca C&#46; Bellelo holds a Ph&#46;D&#46; in music from LSU&#44; and a Master of Music degree in Piano Pedagogy from LSU&#46; She earned a Bachelor of Music degree in piano performance from Delta State University&#46; As a private piano teacher for the past ten years to pre&#45;college level students&#44; her students have been honored for their performances by winning numerous awards in local and state festivals&#44; such as the district and state MTNA competition&#44; Bach & Sonatina festival competition at LSU&#44; and BRMTA Tournament&#46;
        </p>
        <p>Rebecca founded Piano Pathways in 2011 with the goal to offer the Baton Rouge community a piano&#45;centered music studio&#44; where any student with any desire to play piano could be accepted and learn to play the instrument&#46; Rebecca serves as a teacher trainer/mentor to new Recreational Music Making (RMM) teachers awarded the National Piano Foundation RMM Teaching Fellowship&#46; She has served as an active adjudicator&#44; clinician&#44; and presenter at several state and national conferences&#44; including Music Teachers National Association Conferences&#44; National Conference on Keyboard Pedagogy&#44; National Association for Music Education conference&#44; Louisiana Music Teachers Association state conferences&#44; and Louisiana Music Educators Association conferences&#46; Rebecca is also an adjunct lecturer at Southeastern Louisiana University&#44; where she teaches class piano and piano pedagogy&#46; Rebecca remains current in the technological advancements in the pedagogy field and uses these tools to provide an invaluable opportunity for students in the classroom&#46;
        </p>
        <p>Rebecca&#39;s passionate desire to teach and enrich students through music is apparent in her teaching philosophy that every person is musical&#46; Every lesson consists of opportunities to expand the student&#39;s understandings of music&#44; integrating in every lesson performance&#44; reading&#44; technique&#44; and musicianship&#46; She incorporates a wide variety of activities that foster a healthy learning environment while allowing the student to grow as a well&#45;rounded individual&#46;
        </p>       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>                     
                    
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
        
        
        
        
        
        
    </div>
</body>
</html>