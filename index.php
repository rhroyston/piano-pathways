<?php include 'includes/session.php';?>

<!DOCTYPE html>
<html lang="en">
  
  <div id="cover"></div>  
  
  <?php 
    $title = 'Login';
    include 'includes/head.php';
  ?>
  
  <body style='background-image: url("../images/sky.jpg");'>
    
    <?php include 'includes/socialnav.php';?>
    <?php include 'includes/alert.php';?>
    <?php include 'includes/header.php';?>
    <div class="container">
      <div class="row text-center">
        <div class="col-sm-8 col-sm-offset-2">
          <a class="custombotton" href="about"><i class="fa fa-facebook-square"></i> Follow Us</a>

          <a class="custombotton" href="instructors"><i class="fa fa-users"></i> Our Instructors</a>

          <a class="custombotton" href="studio"><i class="fa fa-music"></i> View The Studio</a>
          
          <a class="custombotton" href="studio"><i class="fa fa-youtube"></i> Check Us Out</a>
        </div>    
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
      <div class="row">
        <?php include 'includes/eventsbanner.php';?>
        <?php include 'includes/announcementsbanner.php';?>
        <br>
      </div>
    </div>
    <?php
      $footerimage = "footer-fence";
      include 'includes/footer.php';
      include 'includes/resources.php';
    ?>
  </body>
</html>