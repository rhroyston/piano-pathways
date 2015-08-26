<?php include 'includes/session_members.php'; ?>

<!DOCTYPE html>
<html lang="en">
<?php 
    $title = 'Admin';
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
                        $sql = "SELECT * FROM phpro_users WHERE phpro_users = $id";
                         $q = $conn->query($sql);
                         $q->setFetchMode(PDO::FETCH_ASSOC);                        
                    } catch (PDOException $pe) {
                        die("Could not connect to the database $dbname :" . $pe->getMessage());
                    }                                
                ?>

<body>
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     <h4 class="modal-title">Modal title</h4>

</div>
<div class="modal-body">

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
                        <a data-toggle="modal" href="<?php echo 'http://thepianopathway-rhroyston.rhcloud.com/db?id=' . htmlspecialchars($r['phpro_user_id']); ?>" data-target="<?php echo '#modal' . htmlspecialchars($r['phpro_user_id'])?>"><i class='fa fa-search-plus'></i></a>
                        <td><?php echo htmlspecialchars($r['phpro_lastname'])?></td>
                        <td><?php echo htmlspecialchars($r['phpro_firstname']); ?></td>
                        <td><?php echo htmlspecialchars($r['phpro_email']); ?></td>
                        <td><?php echo htmlspecialchars($r['phpro_telephone']); ?></td>
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