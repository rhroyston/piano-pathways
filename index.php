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
        <div class="col-md-2 col-md-offset-3">
          <a class="custombotton" href="about">Who We Are</a>
        </div>    
        <div class="col-md-2">
          <a class="custombotton" href="instructors">Our Instructors</a>
        </div>    
        <div class="col-md-2">
          <a class="custombotton" href="studio">View The Studio</a>
        </div>    
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <?php include 'includes/eventsbanner.php';?>
    <br>

    <?php
      $footerimage = "footer-fence";
      include 'includes/footer.php';
      include 'includes/resources.php';
    ?>
  </body>
</html>