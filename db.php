<?php include 'includes/session_members.php'; ?>

<!DOCTYPE html>
<html lang="en">
<?php 
    $title = '';
    include 'includes/head.php';
?>

                <?php
                    $id = $_GET['id'];
                    
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
                        $sql = "SELECT * FROM phpro_users WHERE phpro_user_id = $id";
                         $q = $conn->query($sql);
                         $q->setFetchMode(PDO::FETCH_ASSOC);                        
                    } catch (PDOException $pe) {
                        die("Could not connect to the database $dbname :" . $pe->getMessage());
                    }
                    $firstname = htmlspecialchars($r['phpro_firstname']);
                    $lastname = htmlspecialchars($r['phpro_lastname']);
                ?>

                <body>
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                     <h4 class="modal-title">?php echo $firstname . " " . $lastname; ?></h4>
                
                </div>
                <div class="modal-body">
                                <table class="table">
                                    <tr>
                                        <th>Last Name</th>
                                        <th>First Name</th>
                                        <th>Email</th>
                                        <th>Telephone</th>
                                        <th>Birthday</th>
                                    </tr>
                                    <?php while ($r = $q->fetch()): ?>
                                        <tr>
                                            <td><?php echo htmlspecialchars($r['phpro_lastname'])?></td>
                                            <td><?php echo htmlspecialchars($r['phpro_firstname']); ?></td>
                                            <td><?php echo htmlspecialchars($r['phpro_email']); ?></td>
                                            <td><?php echo htmlspecialchars($r['phpro_telephone']); ?></td>
                                            <td><?php echo htmlspecialchars($r['phpro_birthday']); ?></td>
                                        </tr>
                                    <?php endwhile; ?>
                                </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
  
</body>
</html>