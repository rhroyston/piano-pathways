<?php include 'includes/session.php';?>
<div id="cover"></div>
<!DOCTYPE html>
<html lang="en">
  <?php
    $title = 'Login';
    $csslink = "<link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>";
    include 'includes/head.php';
  ?>
  <body style='background-image: url("../images/softwallpaper.png");'>
    <div class="container-fluid"> 
      <?php include 'includes/socialnav.php';?>
      <?php include 'includes/alert.php';?>
    </div>
    <div class="container halftone">
      <?php include 'includes/header.php';?>
      <?php include 'includes/indexmenu.php';?>
      <br>
      <br>
      <br>
      <br>
      <?php include 'includes/eventsbanner.php';?>
      <?php include 'includes/polaroids.php';?>
      <?php include 'includes/announcementsbanner.php';?>
      <br>
      <br>
      <br>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <br>
          <br>
          <br>
          <br>
        </div>
      </div>
    </div>
    <div class="container-fluid">
        <?php
          $footerimage = "footer";
          include 'includes/footer.php';
          include 'includes/resources.php';
        ?>
    </div>
  </body>
</html>