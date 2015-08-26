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
                <div class="col-md-12">
            		<div class="well">
            			<h2 class="text-center">List of Members</h2>
            			<hr width="70%">
            			<table class="table table-striped">
            				<thead>
            					<tr>
            						<th width="7%" align="left">First Name</th>
            						<th width="7%" align="left">Last Name</th>
            						<th width="7%" align="center">Email</th>
            						<th width="7%" align="center">Telephone</th>
            						<th width="7%" align="left">Birthday</th>
            					</tr>
            				</thead>
            				<tbody>
                                <?php
                            	//select all records form tblmember table
                            		$query = 'SELECT * FROM tblmember';
                            		//execute the query using mysql_query
                            	    $result = mysql_query($query);
                            	    //then using while loop, it will display all the records inside the table
                                	while ($row = mysql_fetch_array($result)) {
                                		echo ' <tr> ';
                                		echo ' <td> ';
                                		echo $row['id'];
                                		echo ' <td> ';
                                		echo $row['fName'];
                                		echo ' <td> ';
                                		echo $row['lName'];
                                		echo ' <td> ';
                                		echo $row['email'];
                                		echo ' <td> ';
                                		echo $row['gender'];
                                		echo ' <td> ';
                                		echo $row['birthdate'];
                                	}	
                            	?>
            				</tbody>
            			</table>
            		</div>
            	</div>
            </div>            
        </div>
    </body>
</html>



