<?php include 'includes/session.php';?>

<!DOCTYPE html>
<html lang="en">
  
<div id="cover"></div>  
  
  <?php 
    $title = 'Login';
    include 'includes/head.php';
  ?>
  
  <body style='background-image: url("../images/brickwallxl.png");'>
    
    <?php include 'includes/socialnav.php';?>
    <?php include 'includes/alert.php';?>
    <?php include 'includes/header.php';?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
      <div class="row text-center">
        <h1>
        <div class="col-md-2 col-md-offset-3">
          <a class="black textshadow" href="about">Who We Are</a>
        </div>    
        <div class="col-md-2">
          <a class="black textshadow" href="instructors">Our Instructors</a>
        </div>    
        <div class="col-md-2">
          <a class="black textshadow" href="studio">View The Studio</a>
        </div>    
        </h1>
      </div>
    </div>
    <?php
      $footerimage = "footer-outside";
      include 'includes/footer.php';
    ?>
    


</div>


  </body>
  <?php include 'includes/resources.php';?>
</html>