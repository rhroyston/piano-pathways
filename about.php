<?php include 'includes/session.php';?>

<!DOCTYPE html>
<html lang="en">
  <?php 
    $title = 'Login';
    include 'includes/head.php';
  ?>
  <body style='background-image: url("../images/symphony.png");'>
  <div id="cover"></div>  
  <?php include 'includes/socialnav.php';?>
    
    <?php include 'includes/alert.php';?>
    <?php include 'includes/header.php';?>
    <div class="container">
        <div class="row">
            <h1>
                About   
            </h1>
        </div>    
    </div> 

    <?php
      $footerimage = "footer-inside1";
      include 'includes/footer.php';
    ?>
    <?php include 'includes/resources.php';?>
  </body>
</html>