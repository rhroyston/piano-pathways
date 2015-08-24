<?php include 'includes/session.php';?>

<!DOCTYPE html>
<html lang="en">
  <?php 
    $title = 'Login';
    include 'includes/head.php';
  ?>
  <body>
    
  <?php include 'includes/socialnav.php';?>
    
    <?php include 'includes/alert.php';?>
    <?php include 'includes/header.php';?>
    <br>
    <br>
    <div class="row text-center">
        <h1>
        <div class="col-md-3 col-md-offset-1">
            <a class="black textshadow" href="about">Who We Are</a>
        </div>    
        <div class="col-md-4">
            <a class="black textshadow" href="instructors">Our Instructors</a>
        </div>    
        <div class="col-md-3">
            <a class="black textshadow" href="studio">View The Studio</a>
        </div>    
        </h1>
    </div>    
    
    <?php include 'includes/footer.php';?>
    <?php include 'includes/resources.php';?>
  </body>
</html>