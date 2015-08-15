<?php

/*** begin our session ***/
session_start();

/*** set a form token ***/
$form_token = md5( uniqid('auth', true) );

/*** set the session form token ***/
$_SESSION['form_token'] = $form_token;
?>

<!DOCTYPE html>
<html lang="en">
  <?php include 'includes/head.php';?>
  <body>
    <?php include 'includes/header.php';?>
    <?php include 'includes/banner.php';?>
    <div class="container-fluid">
        <div class="row adjustup">
          <img src="/images/pianoman.png" class="img-responsive center-block">
        </div>
    </div>
    <?php include 'includes/why.php';?>
    <?php include 'includes/instructors.php';?>
    <?php include 'includes/footer.php';?>
    <?php include 'includes/resources.php';?>
  </body>
</html>