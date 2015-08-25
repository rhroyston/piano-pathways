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
            						<th width="6%" align="left">Member ID</th>
            						<th width="7%" align="left">First Name</th>
            						<th width="7%" align="left">Last Name</th>
            						<th width="7%" align="center">Email</th>
            						<th width="7%" align="center">Gender</th>
            						<th width="7%" align="left">BirthDay</th>
            					</tr>
            				</thead>
            				<tbody>
            				</tbody>
            			</table>
            		</div>
            	</div>
            </div>            
        </div>
    </body>
</html>



