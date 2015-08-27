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
                        
                        <td><a href="http://fiddle.jshell.net/bHmRB/51/show/" rel="modal">Hello!</a></td>
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

<div id="modal" class="modal fade" 
     tabindex="-1" role="dialog" aria-labelledby="plan-info" aria-hidden="true">
    <div class="modal-dialog modal-full-screen">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" 
                  data-dismiss="modal" aria-hidden="true">
                  <span class="glyphicon glyphicon-remove-circle"></span>
                </button>
            </div>
            <div class="modal-body">
                <!-- /# content goes here -->
            </div>
        </div>
    </div>
</div>

</body>
</html>