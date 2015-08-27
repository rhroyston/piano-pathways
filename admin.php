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
                        
                        <td><a href="http://fiddle.jshell.net/bHmRB/51/show/" role="button" class="btn btn-large btn-primary" data-toggle="modal" data-target="#myModal">Launch Demo Modal</a></td>
                        <td><?php echo htmlspecialchars($r['phpro_lastname'])?></td>
                        <td><?php echo htmlspecialchars($r['phpro_firstname']); ?></td>
                        <td><?php echo htmlspecialchars($r['phpro_email']); ?></td>
                        <td><?php echo htmlspecialchars($r['phpro_telephone']); ?></td>
                    </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
        
        
        
        
        
        
    </div>

<!-- Modal HTML -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Content will be loaded here from "remote.php" file -->
        </div>
    </div>
</div>

</body>
</html>