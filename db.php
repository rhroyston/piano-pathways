<?php include 'includes/session_members.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		
</head>

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
                    ?>
                    <?php while ($r = $q->fetch()): ;
                    $firstname = htmlspecialchars($r['phpro_firstname']);
                    $lastname = htmlspecialchars($r['phpro_lastname']);
                    $email = htmlspecialchars($r['phpro_email']);
                    $telephone = htmlspecialchars($r['phpro_telephone']);
                    $birthday = htmlspecialchars($r['phpro_birthday']);
                    endwhile; ?>

                <body>
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title"><?php echo $firstname . " " . $lastname; ?></h4>
                
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
                                    
                                        <tr>
                                            <td><?php echo $lastname; ?></td>
                                            <td><?php echo $firstname; ?></td>
                                            <td><?php echo $email; ?></td>
                                            <td><?php echo $telephone; ?></td>
                                            <td><?php echo $birthday; ?></td>
                                        </tr>
                                    
                                </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
  
</body>
</html>