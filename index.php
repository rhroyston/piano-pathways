<?php include 'includes/session.php';?>
<div id="cover"></div>
<!DOCTYPE html>
<html lang="en">
  
    
  
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
        <div class="col-sm-6 col-sm-offset-3">
          <a class="custombotton" href="https://www.facebook.com/PianoPathwaysStudio" target="_blank"><i class="fa fa-facebook-square"></i> Friend Us</a>

          <a class="custombotton" href="instructors"><i class="fa fa-users"></i> Instructors</a>

          <a class="custombotton" href="https://twitter.com/PianoPathwaysBR" target="_blank"><i class="fa fa-twitter"></i> Follow Us</a>

          <a class="custombotton" href="https://www.youtube.com/user/rbellelo" target="_blank"><i class="fa fa-youtube"></i> Check Us Out</a>
        </div>
        <br>
        <br>
        <h5 class="text-center"><a class="black textshadowsm" href="https://www.google.com/maps/place/9270+Siegen+Ln+%23304,+Baton+Rouge,+LA+70810/@30.3672887,-91.0751662,17z/data=!3m1!4b1!4m2!3m1!1s0x8626a53e88fc2d09:0xda2e043d4fe40d5d" target="blank"><i class="fa fa-map-marker"></i> 9270 Siegen Lane #304 Baton Rouge, LA 70810</a></h5>
        <h5 class="text-center"><a class="black textshadowsm" href="tel:225-767-0030"><i class="fa fa-phone"></i> &#40;225&#41; 767&#45;0030</a></h5>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
      <div class="row text-center">
        <?php include 'includes/eventsbanner.php';?>
        <?php include 'includes/announcementsbanner.php';?>
        <br>
      </div>
    </div>
    <?php
      $footerimage = "footer-brback";
      include 'includes/footer.php';
      include 'includes/resources.php';
    ?>
  </body>
</html>